<?php
include_once('connect.inc');

if(isset($_POST['itemName'])){
	$conn = connectToDb();
	$itemName =trim($_POST['itemName']);
	$itemName =strip_tags($itemName);
	$location =trim($_POST['location']);
	$location =strip_tags($location);
	//$itemName =htmlspecialchars($_POST['itemName']);



		if($itemName!==NULL)
		{
			$stmt = $conn->prepare("SELECT * FROM itemStats WHERE itemName = (?) LIMIT 1");
			$stmt->bind_param('s',$itemName);
			$stmt->execute();
			//$itemArray = $stmt->get_result()->fetch_row();
			$stmt->bind_result($itemID, $itemName1, $itemSlot, $stabAttack, $slashAttack, $crushAttack, $rangeAttack, $magicAttack, $stabDefence, $slashDefence, $crushDefence, $rangeDefence, $magicDefence, $meleeStrength,
			$rangeStrength, $magicStrength, $prayer, $attackSpeed);
			while ($stmt->fetch()) {

				echo '<div class="container-fluid w-100 p-0">';
				echo '<div class="table-responsive">';
				echo '<table class="table-dark table-sm w-100">';
				echo '<tr class="border-bottom">';
				if(isset($_POST['location'])){
					echo '<td><button type="button" id="emptybutton1" class="btn btn-secondary" onclick="emptyElement('.$location.');">Hide</button></td>';
				}
					$nameNoQuote = str_replace("'","",$itemName);
					if(($itemName=='Fire_cape')||($itemName=='Infernal_cape')){
						echo '<td class="p-2 text-center"><img src="images/untradeable_icons/'.$nameNoQuote.'_animated.gif"></td>';
					}
					else{
						$path ='images/item_icons/'.$nameNoQuote.'.png';
						$path2 ='images/item_icons/'.$itemName.'.png';
						$path3 ='images/untradeable_icons/'.$itemName.'.png';

						echo '<td class="p-2 text-center">';
							if(file_exists($path)){
								echo '<img src="images/item_icons/'.$nameNoQuote.'.png">';
							}
							elseif(file_exists($path2)){
								echo '<img src="images/item_icons/'.$itemName.'.png">';
							}
							elseif(file_exists($path3)){
								echo '<img src="images/untradeable_icons/'.$itemName.'.png">';
							}
							else
							{
								echo '<img src="images/untradeable_icons/'.$nameNoQuote.'.png">';
							}
						echo '</td>';
					}
					$itemName = str_replace("_"," ",$itemName);
					echo '<td class="p-2"><i> '.$itemName.'</i></td>';
					echo '<td colspan="2"><u>Equip slot:</u> ';

					if(isset($_POST['location'])){
						echo str_replace("_"," ",$itemSlot).'</td><td><img src="images/slot_images/'.$itemSlot.'_slot.png"></td>';
					}
					else{
						echo str_replace("_"," ",$itemSlot).'</td>';
						echo '<td colspan="2" class="text-center"><img src="images/slot_images/'.$itemSlot.'_slot.png"></td>';
					}

				echo '</tr>';
				echo '</div>';
				echo '</table>';
				
				echo '<div class="table-responsive">';
				echo '<table class="table-dark table-sm w-100">';
				echo '<tr>';
					echo '<th>Attack bonuses:</th>';

					//Stab bonus
					if($stabAttack>0)
					{
					echo '<td class="text-success"><div class="statCellColor p-2">Stab</br>'.$stabAttack.'</div></td>';
					}
					elseif($stabAttack<0)
					{
					echo '<td class="text-danger"><div class="statCellColor p-2">Stab</br>'.$stabAttack.'</div></td>';
					}
					else
					{
					echo '<td><div class="statCellColor p-2">Stab</br>'.$stabAttack.'</div></td>';
					}

					//Slash bonus
					if($slashAttack>0)
					{
					echo '<td class="text-success"><div class="statCellColor p-2">Slash</br>'.$slashAttack.'</div></td>';
					}
					elseif($slashAttack<0)
					{
					echo '<td class="text-danger"><div class="statCellColor p-2">Slash</br>'.$slashAttack.'</div></td>';
					}
					else
					{
					echo '<td><div class="statCellColor p-2">Slash</br>'.$slashAttack.'</div></td>';
					}
					
					//Crush bonus
					if($crushAttack>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Crush</br>'.$crushAttack.'</div></td>';
					}
					elseif($crushAttack<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Crush</br>'.$crushAttack.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Crush</br>'.$crushAttack.'</div></td>';
					}

					//Range bonus
					if($rangeAttack>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Range</br>'.$rangeAttack.'</div></td>';
					}
					elseif($rangeAttack<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Range</br>'.$rangeAttack.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Range</br>'.$rangeAttack.'</div></td>';
					}
					//Magic bonus
					if($magicAttack>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Magic</br>'.$magicAttack.'</div></td>';
					}
					elseif($magicAttack<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Magic</br>'.$magicAttack.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Magic</br>'.$magicAttack.'</div></td>';
					}
				echo '</tr>';

				echo '<tr>';
					echo '<th>Defense bonuses:</th>';
					//Stab bonus
					if($stabDefence>0)
					{
					echo '<td class="text-success"><div class="statCellColor p-2">Stab</br>'.$stabDefence.'</div></td>';
					}
					elseif($stabDefence<0)
					{
					echo '<td class="text-danger"><div class="statCellColor p-2">Stab</br>'.$stabDefence.'</div></td>';
					}
					else
					{
					echo '<td><div class="statCellColor p-2">Stab</br>'.$stabDefence.'</div></td>';
					}

					//Slash bonus
					if($slashDefence>0)
					{
					echo '<td class="text-success"><div class="statCellColor p-2">Slash</br>'.$slashDefence.'</div></td>';
					}
					elseif($slashDefence<0)
					{
					echo '<td class="text-danger"><div class="statCellColor p-2">Slash</br>'.$slashDefence.'</div></td>';
					}
					else
					{
					echo '<td><div class="statCellColor p-2">Slash</br>'.$slashDefence.'</div></td>';
					}
					
					//Crush bonus
					if($crushDefence>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Crush</br>'.$crushDefence.'</div></td>';
					}
					elseif($crushAttack<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Crush</br>'.$crushDefence.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Crush</br>'.$crushDefence.'</div></td>';
					}

					//Range bonus
					if($rangeDefence>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Range</br>'.$rangeDefence.'</div></td>';
					}
					elseif($rangeDefence<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Range</br>'.$rangeDefence.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Range</br>'.$rangeDefence.'</div></td>';
					}
					//Magic bonus
					if($magicDefence>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Magic</br>'.$magicDefence.'</div></td>';
					}
					elseif($magicDefence<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Magic</br>'.$magicDefence.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Magic</br>'.$magicDefence.'</div></td>';
					}
				echo '</tr>';

				echo '<tr>';
					echo '<th>Strength bonuses:</th>';
					//Melee strength
					if($meleeStrength>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Melee</br>'.$meleeStrength.'</div></td>';
					}
					elseif($meleeStrength<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Melee</br>'.$meleeStrength.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Melee</br>'.$meleeStrength.'</div></td>';
					}
					//Range strength
					if($rangeStrength>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Range</br>'.$rangeStrength.'</div></td>';
					}
					elseif($rangeStrength<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Range</br>'.$rangeStrength.'</div></td>';
					}
					elseif($rangeStrength==NULL)
					{
						echo '<td><div class="statCellColor p-2">Range</br>0</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Range</br>'.$rangeStrength.'</div></td>';
					}
					//Magic strength
					if($magicStrength>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Magic</br>'.$magicStrength.'</div></td>';
					}
					elseif($magicStrength<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Magic</br>'.$magicStrength.'</div></td>';
					}
					elseif($magicStrength==NULL)
					{
						echo '<td><div class="statCellColor p-2">Magic</br>0</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Magic</br>'.$magicStrength.'</div></td>';
					}
					echo '<td></td>';
					echo '<td></td>';
				echo '</tr>';
				echo '<tr>';
					echo '<th>Other bonuses:</th>';
					if($prayer>0)
					{
						echo '<td class="text-success"><div class="statCellColor p-2">Prayer</br>'.$prayer.'</div></td>';
					}
					elseif($prayer<0)
					{
						echo '<td class="text-danger"><div class="statCellColor p-2">Prayer</br>'.$prayer.'</div></td>';
					}
					else
					{
						echo '<td><div class="statCellColor p-2">Prayer</br>'.$prayer.'</div></td>';
					}
					if(!($attackSpeed==NULL)){
						echo '<td><div class="statCellColor p-2">Speed</br>'.$attackSpeed.'</div></td>';
					}
					else
					{
						echo '<td></td>';
					}
					echo '<td></td>';
					echo '<td></td>';
					echo '<td></td>';
					
				echo '</tr>';
				if(isset($_POST['additionalMessage']))
				{
					$additionalMessage =trim($_POST['additionalMessage']);
					
					if(!($additionalMessage=="none"))//If message exists
					{
						echo '<tr>';
						echo '<th>Additional notes:</th>';
						echo '<td class="text-left" colspan="5">'.$additionalMessage.'</td>';
						echo '</tr>';
					}
				}
				echo 
				'</table>
				<div>
				</div>';

			}
		}
	
}
?>
<script type="text/javascript">
function emptyElement(elementId)
{
	$( "#table"+elementId).empty();
}
</script>