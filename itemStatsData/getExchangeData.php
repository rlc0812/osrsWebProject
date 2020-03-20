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

$curl_response = str_replace('"members":true,','"members":1,',$curl_response);
$curl_response = str_replace('"members":false,','"members":1,',$curl_response);
$exchangeArray=json_decode($curl_response,true);

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

foreach($exchangeArray as $item){
	//Case update neither buy nor sell
	if(($item["buy_quantity"]==0)&&($item["sell_quantity"]==0)){
		$stmt->bind_param('isiiiiiiiiiii',$item["id"],$item["name"],$item["members"],$item["sp"],$item["buy_average"],$item["buy_quantity"],$item["sell_average"],$item["sell_quantity"],$item["overall_average"],$item["overall_quantity"],$item["buy_quantity"],$item["sell_quantity"],$item["overall_quantity"]);
		$stmt->execute();
	}
	//Case update only buy
	elseif($item["sell_quantity"]==0){
		$stmt2->bind_param('isiiiiiiiiiiiii',$item["id"],$item["name"],$item["members"],$item["sp"],$item["buy_average"],$item["buy_quantity"],$item["sell_average"],$item["sell_quantity"],$item["overall_average"],$item["overall_quantity"],$item["buy_average"],$item["buy_quantity"],$item["sell_quantity"],$item["overall_average"],$item["overall_quantity"]);
		$stmt2->execute();
	}
	//Case update only sell
	elseif($item["buy_quantity"]==0){
		$stmt3->bind_param('isiiiiiiiiiiiii',$item["id"],$item["name"],$item["members"],$item["sp"],$item["buy_average"],$item["buy_quantity"],$item["sell_average"],$item["sell_quantity"],$item["overall_average"],$item["overall_quantity"],$item["buy_quantity"],$item["sell_average"],$item["sell_quantity"],$item["overall_average"],$item["overall_quantity"]);
		$stmt3->execute();
	}
	//Case update all
	else{
		$stmt4->bind_param('isiiiiiiiiiiiiii',$item["id"],$item["name"],$item["members"],$item["sp"],$item["buy_average"],$item["buy_quantity"],$item["sell_average"],$item["sell_quantity"],$item["overall_average"],$item["overall_quantity"],$item["buy_average"],$item["buy_quantity"],$item["sell_average"],$item["sell_quantity"],$item["overall_average"],$item["overall_quantity"]);
		$stmt4->execute();
	}
}
mysqli_close($conn);
?>
