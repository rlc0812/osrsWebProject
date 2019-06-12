<?php
if(isset($_POST['columnName'])){


include_once('../connect.inc');
$conn = connectToDb();
	$columnName = mysqli_real_escape_string($conn,$_POST['columnName']);
	$columnName = trim($columnName);
	$item = mysqli_real_escape_string($conn,$_POST['searchValue']);
	$item = trim($item);

//ORDER ASCENDING
if($columnName=="nameASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY name ASC");
}elseif($columnName=="membersASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY members ASC");
}elseif($columnName=="shopPriceASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY shopPrice ASC");
}elseif($columnName=="buyAverageASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY buyAverage ASC");
}elseif($columnName=="buyQuantityASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY buyQuantity ASC");
}elseif($columnName=="sellAverageASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY  sellAverage ASC");
}elseif($columnName=="sellQuantityASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY sellQuantity ASC");
}elseif($columnName=="overallAverageASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY  overallAverage ASC");
}elseif($columnName=="overallQuantityASC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY overallQuantity ASC");
}
//ORDER DESCENDING
if($columnName=="nameDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY name DESC");
}elseif($columnName=="membersDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY members DESC");
}elseif($columnName=="shopPriceDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY shopPrice DESC");
}elseif($columnName=="buyAverageDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY buyAverage DESC");
}elseif($columnName=="buyQuantityDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY buyQuantity DESC");
}elseif($columnName=="sellAverageDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY  sellAverage DESC");
}elseif($columnName=="sellQuantityDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY sellQuantity DESC");
}elseif($columnName=="overallAverageDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY  overallAverage DESC");
}elseif($columnName=="overallQuantityDESC"){
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%') ORDER BY overallQuantity DESC");
}

	$stmt->bind_param('s',$item);

	$stmt->execute();
	//$result=$stmt->get_result();
	$stmt->bind_result($itemId, $name,$members,$store,$buyAvg,$buyQt,$sellAvg,$sellQt,$overAvg,$overQt);
	//if($result){		
echo '
	<button type="button" class="submit btn-primary pull-left" onclick="emptyId('. "'idSearch'".');">Remove search</button>

<div class="table-responsive pb-5 text-center">
<table id="frequentItems" class="table-striped table-dark table-sm w-100">
	<colgroup>
	<col style="width:15%">
	<col style="width:10%">
	<col style="width:10%">
	<col style="width:10%">
	<col style="width:10%">
	<col style="width:10%">
	<col style="width:10%">
	<col style="width:10%">
	</colgroup>
	<tr class="bg-dark border-bottom">
		<td class="noWrap">
			<p class="sortbar">Name</p><div class="sortbutton pl-2" onclick="orderBy('."'nameASC','$item'".');">&#8593;</div><div class="sortbutton" onclick="orderBy('."'nameDESC','$item'".');">&#8595;</div>
		</td>

		<td class="noWrap">
			<p class="sortbar">Members</p><div class="sortbutton pl-2" onclick="orderBy('."'membersASC','$item'".');">&#8593;</div><div class="sortbutton" onclick="orderBy('."'membersDESC','$item'".');">&#8595;</div>
		</td>
		<td class="noWrap">
			<p class="sortbar">Store Price</p><div class="sortbutton pl-2" onclick="orderBy('."'shopPriceASC','$item'".');">&#8593;</div><div class="sortbutton" onclick="orderBy('."'shopPriceDESC','$item'".');">&#8595;</div>
		</td>
		<td class="noWrap">
			<p class="sortbar">Buy Average</p><div class="sortbutton pl-2" onclick="orderBy('."'buyAverageASC','$item'".');">&#8593;</div><div class="sortbutton" onclick="orderBy('."'buyAverageDESC','$item'".');">&#8595;</div>
		</td>
		<td class="noWrap">
			<p class="sortbar">Buy Quantity</p><div class="sortbutton pl-2" onclick="orderBy('."'buyQuantityASC','$item'".');">&#8593;</div><div class="sortbutton pl-0" onclick="orderBy('."'buyQuantityDESC','$item'".');">&#8595;</div>
		</td>
		<td class="noWrap">
			<p class="sortbar">Sell Average</p><div class="sortbutton pl-2" onclick="orderBy('."'sellAverageASC','$item'".');">&#8593;</div><div class="sortbutton"onclick="orderBy('."'sellAverageDESC','$item'".');">&#8595;</div>
		</td>
		<td class="noWrap">
			<p class="sortbar">Sell Quantity</p><div class="sortbutton pl-2" onclick="orderBy('."'sellQuantityASC','$item'".');">&#8593;</div><div class="sortbutton" onclick="orderBy('."'sellQuantityDESC','$item'".');">&#8595;</div>
		</td>
		<td class="noWrap">
			<p class="sortbar">Overall Average</p><div class="sortbutton pl-2"onclick="orderBy('."'overallAverageASC','$item'".');">&#8593;</div><div class="sortbutton" onclick="orderBy('."'overallAverageDESC','$item'".');">&#8595;</div>
		</td>
		<td class="noWrap">
			<p class="sortbar">Overall Quantity</p><div class="sortbutton pl-2" onclick="orderBy('."'overallQuantityASC','$item'".');">&#8593;</div><div class="sortbutton" onclick="orderBy('."'overallQuantityDESC','$item'".');">&#8595;</div>
		</td>
	</tr>
	';
	while ($stmt->fetch()) {
	if($members=='1'){
		$members='Yes';
	}
	if($members=='0'){
		$members='No';
	}
	echo'
	<tr>
	<td>'.$name.'</td>
	<td>'.$members.'</td>
	<td>'.number_format(intval($store)).'</td>
	<td>'.number_format(intval($buyAvg)).'</td>
	<td>'.number_format(intval($buyQt)).'</td>
	<td>'.number_format(intval($sellAvg)).'</td>
	<td>'.number_format(intval($sellQt)).'</td>
	<td>'.number_format(intval($overAvg)).'</td>
	<td>'.number_format(intval($overQt)).'</td>
	</tr>
	';
	}

unset($item);
}
?>
