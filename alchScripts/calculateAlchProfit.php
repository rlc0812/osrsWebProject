<?php
function calculateAlchProfit(){
	if(file_exists('connect.inc')){
		include_once('connect.inc');
	}
	if(file_exists('../connect.inc')){
		include_once('../connect.inc');
	}
	$conn = connectToDb();

	$stmt=$conn->prepare("SELECT name, buyAverage FROM exchange WHERE name='Nature Rune'");
	if(false===$stmt)
	{
		die('prepare() failed '.htmlspecialchars($conn->error));
	}

	if($stmt->execute()){
		//Worked
	}
	else {
		die('select() failed '.htmlspecialchars($stmt->error));
	}

	$stmt->bind_result($name, $natureRune);


	while ($stmt->fetch()){

	}

	$stmt2=$conn->prepare("SELECT exchange.itemID,exchange.name,exchange.members,exchange.buyQuantity,exchange.sellQuantity,exchange.buyAverage,items.highAlch,items.buyLimit,items.icon FROM exchange INNER JOIN items ON (exchange.itemID = items.ID) WHERE (exchange.buyQuantity!='0'AND exchange.sellQuantity!='0' AND buyAverage<10000000)");
	if(false===$stmt2)
	{
		die('prepare() failed '.htmlspecialchars($conn->error));
	}

	if($stmt2->execute()){
		//Worked
	}
	else {
		die('select() failed '.htmlspecialchars($stmt2->error));
	}

	$stmt2->bind_result($itemID,$name,$members,$buyQty,$sellQty,$buyAvg,$highAlch,$buyLimit,$icon);

	$array = [];


	echo'

			<thead>
			<tr>
				<th>ID</th>
				<th class="no-sort">Icon</th>
				<th>Item Name</th>
				<th>Members</th>
				<th>Buy Limit</th>
				<th>Buy Quantity</th>
				<th>Sell Quantity</th>
				<th>Buy Average</th>
				<th>High Alch</th>
				<th>Profit/Loss</th>
			</tr>
			</thead>
			<tbody>
			';

	while ($stmt2->fetch()) {
		$profitLoss = ($highAlch-($natureRune+$buyAvg));
		if($buyLimit==NULL){
			$buyLimit="None";
		}
		echo'
			<tr>
				<td>'.$itemID.'</td>
                <td><img src="data:image/jpg;base64,'.base64_encode($icon).'"/></td>
				<td class="itemText">'.$name.'</td>
				<td>'.$members.'</td>
				<td>'.$buyLimit.'</td>
				<td>'.$buyQty.'</td>
				<td>'.$sellQty.'</td>
				<td>'.$buyAvg.'</td>
				<td>'.$highAlch.'</td>';
	
			if(abs($profitLoss==0)){
				echo'<td class ="p-1"><img src="alchScripts/coinIcons/Coins_1.png"> '.$profitLoss.'</td>';
			}
			elseif(abs($profitLoss==1)){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_1.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss > 0){
					echo'<td class ="text-success p-1"><br><img src="alchScripts/coinIcons/Coins_1.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)==2){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_2.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss > 0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_2.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)==3){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_3.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_3.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)==4){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_4.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_4.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)<25){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_5.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_5.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)<100){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_25.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_25.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)<250){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_100.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_100.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)<1000){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_250.png"> '.$profitLoss.'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_250.png"> '.$profitLoss.'</td>';
				}
			}
			elseif(abs($profitLoss)<10000){
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_1000.png"> '.number_format($profitLoss).'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_1000.png"> '.number_format($profitLoss).'</td>';
				}
			}
			else{
				if($profitLoss < 0){
					echo'<td class ="text-danger p-1"><img src="alchScripts/coinIcons/Coins_10000.png"> '.number_format($profitLoss).'</td>';
				}
				elseif($profitLoss>0){
					echo'<td class ="text-success p-1"><img src="alchScripts/coinIcons/Coins_10000.png"> '.number_format($profitLoss).'</td>';
				}
			}

			echo'
				</tr>';



	}
			echo'</tbody>';
}
if(isset($_POST['table'])){
	calculateAlchProfit();
}
?>
