<?php 
include('../connect.inc');
$conn=connectToDb();
$stmt=$conn->prepare("SELECT itemID, name, shopPrice from exchange");
$stmt->execute();
//$result=$stmt->get_result();
$stmt->bind_result($itemID, $name, $shopPrice);
//while($assoc=$result->fetch_assoc()){

while ($stmt->fetch()) {
	$assoc = array('itemID'=>$itemID,'name'=>$name,'shopPrice'=>$shopPrice);
	insertData($assoc);
}

function insertData($item){
	$conn=connectToDb();
	$highAlch = ((intval($item['shopPrice']))*0.6);
	$lowAlch =(intval(($highAlch/2)));
	$stmt=$conn->prepare("INSERT INTO alchemy VALUES (?,?,?,?,?)");
	$stmt->bind_param('isiii',$item['itemID'],$item['name'],$item['shopPrice'],$highAlch,$lowAlch);
	$stmt->execute();
}

?>




