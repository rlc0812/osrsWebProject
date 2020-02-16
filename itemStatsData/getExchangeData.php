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

$stmt=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
ON DUPLICATE KEY UPDATE
buyQuantity=?,
sellQuantity=?,
overallQuantity=?
");

$stmt2=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
ON DUPLICATE KEY UPDATE
buyAverage=?,
buyQuantity=?,
sellQuantity=?,
overallAverage=?,
overallQuantity=?
");

$stmt3=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
ON DUPLICATE KEY UPDATE
buyQuantity=?,
sellAverage=?,
sellQuantity=?,
overallAverage=?,
overallQuantity=?
");

$stmt4=$conn->prepare("INSERT INTO exchange VALUES (?,?,?,?,?,?,?,?,?,?)
ON DUPLICATE KEY UPDATE
buyAverage=?,
buyQuantity=?,
sellAverage=?,
sellQuantity=?,
overallAverage=?,
overallQuantity=?
");

foreach($itemList as $item){

//Case update neither buy nor sell
if(($item[5]==0)&&($item[7]==0)){
	$stmt->bind_param('isiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[5],$item[7],$item[9]);
	$stmt->execute();
}
//Case update only buy
elseif($item[7]==0){
	$stmt2->bind_param('isiiiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[4],$item[5],$item[7],$item[8],$item[9]);
	$stmt2->execute();
}
//Case update only sell
elseif($item[5]==0){
	$stmt3->bind_param('isiiiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[5],$item[6],$item[7],$item[8],$item[9]);
	$stmt3->execute();
}
//Case update all
else{
	$stmt4->bind_param('isiiiiiiiiiiiiii',$item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9]);
	$stmt4->execute();
}

}
mysqli_close($conn);
?>
