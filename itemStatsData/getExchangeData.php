#!/usr/bin/php -q
<?php
echo "Ran";

include('../connect.inc');
$curl = curl_init('https://rsbuddy.com/exchange/summary.json');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FAILONERROR, true);

//Error Check
if (curl_error($curl)){
	$error_message = curl_error($curl);
}
else{
$curl_response = curl_exec($curl);
}
curl_close($curl);

if (isset($error_message)) {//Process the error
echo("Curl failed.");

}
if($curl_response == NULL){
return false;
}
$exploded = explode("{",$curl_response);
$exploded = str_replace('"','',$exploded);
$exploded = str_replace('}','',$exploded);
$itemListArray = [];
foreach($exploded as $item){
$newArr = explode(",",$item);
	foreach($newArr as $value){
		$value=strstr($value, ':');
		$value = str_replace(':','',$value);
		$value = str_replace('false','0',$value);
		$value = str_replace('true','1',$value);
		$value = str_replace("\u0027","'",$value);
		if($value !==""){
			array_push($itemListArray,$value);
		}	
	}
}
$itemList = array_chunk($itemListArray,10);

//Execute insert/update
$conn = connectToDb();
/*
+-----------------+-------------+------+-----+---------+-------+
| Field           | Type        | Null | Key | Default | Extra |
+-----------------+-------------+------+-----+---------+-------+
| itemID          | int(5)      | NO   | PRI | NULL    |       |
| name            | varchar(60) | YES  |     | NULL    |       |
| members         | tinyint(1)  | YES  |     | NULL    |       |
| shopPrice       | int(50)     | YES  |     | NULL    |       |
| buyAverage      | int(50)     | YES  |     | NULL    |       |
| buyQuantity     | int(50)     | YES  |     | NULL    |       |
| sellAverage     | int(50)     | YES  |     | NULL    |       |
| sellQuantity    | int(50)     | YES  |     | NULL    |       |
| overallAverage  | int(50)     | YES  |     | NULL    |       |
| overallQuantity | int(60)     | YES  |     | NULL    |       |
+-----------------+-------------+------+-----+---------+-------+*/

foreach($itemList as $item){

//Case update neither buy nor sell
if(($item[5]==0)&&($item[7]==0)){
	$stmt=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	buyQuantity=?,
	sellQuantity=?,
	overallQuantity=?
	");
	$stmt->bind_param('isiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[5],$item[7],$item[9]);
}
//Case update only buy
elseif($item[7]==0){
	$stmt=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	buyAverage=?,
	buyQuantity=?,
	sellQuantity=?,
	overallAverage=?,
	overallQuantity=?
	");
	$stmt->bind_param('isiiiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[4],$item[5],$item[7],$item[8],$item[9]);
}
//Case update only sell
elseif($item[5]==0){
	$stmt=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	buyQuantity=?,
	sellAverage=?,
	sellQuantity=?,
	overallAverage=?,
	overallQuantity=?
	");
	$stmt->bind_param('isiiiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[5],$item[6],$item[7],$item[8],$item[9]);
}
//Case update all
else{
	$stmt=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	buyAverage=?,
	buyQuantity=?,
	sellAverage=?,
	sellQuantity=?,
	overallAverage=?,
	overallQuantity=?
	");
	$stmt->bind_param('isiiiiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9]);
}
$stmt->execute();

}
mysqli_close($conn);
?>
