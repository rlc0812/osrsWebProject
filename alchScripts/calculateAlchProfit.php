<?php

function calculateAlchProfit(){
include_once('../connect.inc');
$conn = connectToDb();
$stmt=$conn->prepare("SELECT name, buyAverage FROM exchange WHERE name='Nature Rune'");
$stmt->execute();
$stmt->bind_result($name, $natureRune);
while ($stmt->fetch()){

}


if(isset($_POST['item'])){//Search
	$item=mysqli_real_escape_string($conn,$_POST['item']);
	$stmt=$conn->prepare("SELECT exchange.itemID, exchange.name, exchange.members, exchange.buyQuantity, exchange.sellQuantity, exchange.buyAverage ,alchemy.highAlchemy FROM exchange INNER JOIN alchemy ON exchange.itemID = alchemy.itemID where exchange.name LIKE concat('%', ?, '%')");
	$stmt->bind_param('s',$item);
}
else{//Default load
	$stmt=$conn->prepare("SELECT exchange.itemID, exchange.name, exchange.members, exchange.buyQuantity, exchange.sellQuantity, exchange.buyAverage ,alchemy.highAlchemy FROM exchange INNER JOIN alchemy ON exchange.itemID = alchemy.itemID");
}

$stmt->execute();
//$result=$stmt->get_result();
$stmt->bind_result($itemId,$name,$members,$buyQty,$sellQty,$buyAvg,$highAlch);
$array = [];

//while($row=$result->fetch_row()){
while ($stmt->fetch()) {
	$profitLoss = ($highAlch-($natureRune+$buyAvg));
	$row = array('id'=>$itemId,'name'=>$name,'members'=>$members,'buyQty'=>$buyQty,'sellQty'=>$sellQty,'buyAvg'=>$buyAvg,'highAlch'=>$highAlch,'profitLoss'=>$profitLoss);
	if($row['buyAvg']!==0){//If item does not have an active price do not add it
		array_push($array, $row);
	}
}
foreach ($array as $key => $row) {
    // replace 0 with the field's index/key
    $profit[$key] = $row['profitLoss'];
}

if(($array!==NULL)&&(!empty($array))){
	array_multisort($profit, SORT_DESC, $array);
	if(isset($_POST['item'])){
	echo'<h3>Current search string: <span class="text-primary">'.$_POST['item'].'</span></h3>';
	}
	echo'
	<div class="table-responsive pb-5 text-center">
	<table class="table-striped table-dark table-sm w-100" id="alchTable">
		<tr class="bg-dark">
			<td colspan="8"><h3>Nature Rune Cost: '.$natureRune.'</h3></td>
		</tr>
		<tr class="bg-dark">
			<th>Item ID</th>
			<th>Item Name</th>
			<th>Members</th>
			<th>Buy Quantity</th>
			<th>Sell Quantity</th>
			<th>Buy Average</th>
			<th>High Alch</th>
			<th>NET profit/loss</th>
		</tr>

		';
}
else{
	echo '<h3>No results found for search string <span class="text-primary">'.$item.'</span></h3>';
}


foreach($array as $row)
{
	$profitLoss = $row['profitLoss'];

	if(($profitLoss>=-100)||(isset($_POST['item'])))
	{
	echo'
		<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['members'].'</td>
			<td>'.$row['buyQty'].'</td>
			<td>'.$row['sellQty'].'</td>
			<td>'.$row['buyAvg'].'</td>
			<td>'.$row['highAlch'].'</td>';
		if(abs($profitLoss==0)){
			echo'<td class ="p-1"><img src="coinIcons/Coins_1.png"> '.$profitLoss.'</td>';
		}
		elseif(abs($profitLoss==1)){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_1.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss > 0){
				echo'<td class ="text-success p-1"><br><img src="coinIcons/Coins_1.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)==2){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_2.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss > 0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_2.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)==3){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_3.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_3.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)==4){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_4.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_4.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)<25){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_5.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_5.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)<100){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_25.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_25.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)<250){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_100.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_100.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)<1000){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_250.png"> '.$profitLoss.'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_250.png"> '.$profitLoss.'</td>';
			}
		}
		elseif(abs($profitLoss)<10000){
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_1000.png"> '.number_format($profitLoss).'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_1000.png"> '.number_format($profitLoss).'</td>';
			}
		}
		else{
			if($profitLoss < 0){
				echo'<td class ="text-danger p-1"><img src="coinIcons/Coins_10000.png"> '.number_format($profitLoss).'</td>';
			}
			elseif($profitLoss>0){
				echo'<td class ="text-success p-1"><img src="coinIcons/Coins_10000.png"> '.number_format($profitLoss).'</td>';
			}
		}

		echo'
			</tr>';
		}

		}
		echo'
			</table>
			</div>
		';
	}


if(isset($_POST['item'])){
	if(!(empty($_POST['item']))){
		calculateAlchProfit();
	}
	else{
		echo '<h3 class="text-danger">Please enter a valid search string.</h3>';
	}
}

if(isset($_POST['resetBool'])){
	unset($_POST['item']);
	calculateAlchProfit();
}

?>
