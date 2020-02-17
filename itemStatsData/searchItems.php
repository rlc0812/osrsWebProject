<?php
if(isset($_POST['item'])&&(!(empty(trim($_POST['item']))))){
	if(file_exists('connect.inc')){
		include_once('connect.inc');
	}
	if(file_exists('../connect.inc')){
		include_once('../connect.inc');
	}
$conn = connectToDb();
	$item = mysqli_real_escape_string($conn,$_POST['item']);
	$item = trim($item);
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
	FROM exchange INNER JOIN items ON (exchange.itemID=items.ID) 
	WHERE exchange.name LIKE concat('%', ?, '%')");
	$stmt->bind_param('s',$item);
	$stmt->execute();
	$stmt->bind_result($itemID,$name,$members,$store,$buyAvg,$buyQt,$sellAvg,$sellQt,$overAvg,$overQt,$icon,$buyLimit);
echo '
            <thead>
                <tr>
                    <th>ID</th>	
                    <th class="no-sort">Icon</th>	    
                    <th>Name</th>
                    <th>Members</th>
                    <th>Buy Limit</th>
                    <th>Sell General Store</th>
                    <th>Buy Average</th>
                    <th>Buy Quantity</th>
                    <th>Sell Average</th>
                    <th>Sell Quantity</th>
                    <th>Overall Average</th>
                    <th>Overall Quantity<`/th>
                </tr>
            </thead>
            <tbody>
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
		<td>'.$itemID.'</td>
                <td><img src="data:image/jpg;base64,'.base64_encode($icon).'"/></td>
		<td class="itemText">'.$name.'</td>
		<td>'.$members.'</td>
		<td>'.number_format(intval($buyLimit)).'</td>
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
	echo '</tbody>';
}

?>
