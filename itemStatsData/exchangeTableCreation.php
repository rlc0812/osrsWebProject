
<!DOCTYPE html> 
<html lang="en-US">
<head>
</head>
</html>
<?php

function getItemList($type,$limit){
	if(file_exists('connect.inc')){
		include_once('connect.inc');
	}
	if(file_exists('../connect.inc')){
		include_once('../connect.inc');
	}

	$conn = connectToDb();
	if($type=='buyAverage'){
		$stmt=$conn->prepare("SELECT 
		exchange.itemID,
		exchange.name,
		exchange.members,
		exchange.ShopPrice,
		exchange.buyAverage,
		exchange.buyQuantity,
		exchange.sellAverage,
		exchange.sellQuantity,
		exchange.overallAverage,
		exchange.overallQuantity,
		items.icon,
		items.buyLimit
		FROM exchange INNER JOIN items ON (exchange.itemID=items.ID) ORDER BY buyAverage DESC LIMIT ?");
		$stmt->bind_param('i', $limit);
	}
	if($type=='buyQuantity'){
		$stmt=$conn->prepare("SELECT 
		exchange.itemID,
		exchange.name,
		exchange.members,
		exchange.ShopPrice,
		exchange.buyAverage,
		exchange.buyQuantity,
		exchange.sellAverage,
		exchange.sellQuantity,
		exchange.overallAverage,
		exchange.overallQuantity,
		items.icon,
		items.buyLimit
		FROM exchange INNER JOIN items ON (exchange.itemID=items.ID) ORDER BY buyQuantity DESC LIMIT ?");
		$stmt->bind_param('i', $limit);
	}
	if($type=='sellAverage'){
		$stmt=$conn->prepare("SELECT 
		exchange.itemID,
		exchange.name,
		exchange.members,
		exchange.ShopPrice,
		exchange.buyAverage,
		exchange.buyQuantity,
		exchange.sellAverage,
		exchange.sellQuantity,
		exchange.overallAverage,
		exchange.overallQuantity,
		items.icon,
		items.buyLimit
		FROM exchange INNER JOIN items ON (exchange.itemID=items.ID) ORDER BY sellAverage DESC LIMIT ?");
		$stmt->bind_param('i', $limit);
	}
	if($type=='sellQuantity'){
		$stmt=$conn->prepare("SELECT 
		exchange.itemID,
		exchange.name,
		exchange.members,
		exchange.ShopPrice,
		exchange.buyAverage,
		exchange.buyQuantity,
		exchange.sellAverage,
		exchange.sellQuantity,
		exchange.overallAverage,
		exchange.overallQuantity,
		items.icon,
		items.buyLimit
		FROM exchange INNER JOIN items ON (exchange.itemID=items.ID) ORDER BY sellQuantity DESC LIMIT ?");
		$stmt->bind_param('i', $limit);
	}
	if($type=='overallAverage'){
		$stmt=$conn->prepare("SELECT 
		exchange.itemID,
		exchange.name,
		exchange.members,
		exchange.ShopPrice,
		exchange.buyAverage,
		exchange.buyQuantity,
		exchange.sellAverage,
		exchange.sellQuantity,
		exchange.overallAverage,
		exchange.overallQuantity,
		items.icon,
		items.buyLimit
		FROM exchange INNER JOIN items ON (exchange.itemID=items.ID) ORDER BY overallAverage DESC LIMIT ?");
		$stmt->bind_param('i', $limit);
	}
	if($type=='overallQuantity'){
		$stmt=$conn->prepare("SELECT 
		exchange.itemID,
		exchange.name,
		exchange.members,
		exchange.ShopPrice,
		exchange.buyAverage,
		exchange.buyQuantity,
		exchange.sellAverage,
		exchange.sellQuantity,
		exchange.overallAverage,
		exchange.overallQuantity,
		items.icon,
		items.buyLimit
		FROM exchange INNER JOIN items ON (exchange.itemID=items.ID) ORDER BY overallQuantity DESC LIMIT ?");
		$stmt->bind_param('i', $limit);
	}
	$stmt->execute();
	$stmt->bind_result($itemId, $name,$members,$store,$buyAvg,$buyQt,$sellAvg,$sellQt,$overAvg,$overQt,$icon,$buyLimit);

//$result=$stmt->get_result();


echo'
<div class="table-responsive pb-5 text-center">
<table id="alchemyTable" class="table-striped table-dark table-sm w-100">
	<tr class="bg-dark">
		<th>Icon</th>	
		<th>Name</th>	
		<th>Members</th>
		<th>Sell General Store</th>
		<th>Buy Average</th>
		<th>Buy Limit</th>
		<th>Buy Quantity</th>
		<th>Sell Average</th>
		<th>Sell Quantity</th>
		<th>Overall Average</th>
		<th>Overall Quantity</th>
	</tr>
	';

//while ($row = $result->fetch_row()) {
while ($stmt->fetch()) {

	if($members=='1'){
		$members='Yes';
	}
	if($members=='0'){
		$members='No';
	}
	echo'

	<tr>
	<td><img src="data:image/jpg;base64,'.base64_encode($icon).'"/></td>
	<td class="itemText">'.$name.'</td>
	<td>'.$members.'</td>
	<td>'.number_format(intval($store)).'</td>
	<td>'.number_format(intval($buyAvg)).'</td>
	<td>'.number_format(intval($buyLimit)).'</td>
	<td>'.number_format(intval($buyQt)).'</td>
	<td>'.number_format(intval($sellAvg)).'</td>
	<td>'.number_format(intval($sellQt)).'</td>
	<td>'.number_format(intval($overAvg)).'</td>
	<td>'.number_format(intval($overQt)).'</td>
	</tr>
	';

}
echo'
</table>
<th class="text-left"colspan="9"><button type="button" class="btn btn-dark" onclick="loadMore(\''.$type.'\',\''.$limit.'\');">Load 10 more</button></th>

</div>
';
}


if((isset($_POST['type'])) && (isset($_POST['limit']))){
	if(file_exists('connect.inc')){
		include_once('connect.inc');
	}
	if(file_exists('../connect.inc')){
		include_once('../connect.inc');
	}
	$conn = connectToDb();
	$type = mysqli_real_escape_string($conn,$_POST['type']);
	$limit = mysqli_real_escape_string($conn,$_POST['limit']);
	$limit+=10;
	getItemList($type,$limit);
}

?>

