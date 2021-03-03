<?php
include_once('connect.inc');

if(isset($_POST['itemName'])){
	$conn = connectToDb();
	$itemName =trim($_POST['itemName']);
	$itemName =strip_tags($itemName);
	$location =trim($_POST['location']);
	$location =strip_tags($location);
	//$itemName =htmlspecialchars($_POST['itemName']);
	$itemName = str_replace("_"," ",$itemName);


		if($itemName!==NULL)
		{	//Check if the item is a weapon
	
			$stmt=$conn->prepare("SELECT DISTINCT 
			items.ID,
			items.icon,
			items.name,
			items.members,
			items.tradeable,
			items.weight,
			items.examine,
			items.questItem,
			equipment.stabAttack,
			equipment.slashAttack,
			equipment.crushAttack,
			equipment.magicAttack,
			equipment.rangeAttack,
			equipment.stabDefence,
			equipment.slashDefence,
			equipment.crushDefence,
			equipment.magicDefence,
			equipment.rangeDefence,
			equipment.meleeStrength,
			equipment.rangeStrength,
			equipment.magicStrength,
			equipment.prayer,
			equipment.itemSlot,
			equipment.requirementAttack,
			equipment.requirementStrength,
			equipment.requirementHitPoints,
			equipment.requirementRanged,
			equipment.requirementMagic,
			equipment.requirementDefence,
			equipment.requirementPrayer,
			weapons.attackSpeed,
			weapons.weaponType,
			weapons.combatStyle1,
			weapons.attackType1,
			weapons.attackStyle1,
			weapons.experience1,
			weapons.boosts1,
			weapons.combatStyle2,
			weapons.attackType2,
			weapons.attackStyle2,
			weapons.experience2,
			weapons.boosts2,
			weapons.combatStyle3,
			weapons.attackType3,
			weapons.attackStyle3,
			weapons.experience3,
			weapons.boosts3,
			weapons.combatStyle4,
			weapons.attackType4,
			weapons.attackStyle4,
			weapons.experience4,
			weapons.boosts4,
			weapons.combatStyle5,
			weapons.attackType5,
			weapons.attackStyle5,
			weapons.experience5,
			weapons.boosts5
			FROM items
			INNER JOIN equipment
			ON (items.ID=equipment.ID)
			INNER JOIN weapons
			ON (equipment.ID = weapons.ID)
			WHERE (items.name = (?) AND noted='0' AND duplicate='0') LIMIT 1");
			
			$stmt->bind_param('s', $itemName);
			$stmt->execute();
			$stmt->store_result();
			$result=$stmt->bind_result($itemID,$icon,$itemName,$members,$tradeable,$weight,$examine,$questItem,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer,$attackSpeed,$weaponType,$combatStyle1,$attackType1,$attackStyle1,$experience1,$boosts1,$combatStyle2,$attackType2,$attackStyle2,$experience2,$boosts2,$combatStyle3,$attackType3,$attackStyle3,$experience3,$boosts3,$combatStyle4,$attackType4,$attackStyle4,$experience4,$boosts4,$combatStyle5,$attackType5,$attackStyle5,$experience5,$boosts5);
			if( $stmt->num_rows > 0 )
			{
				while ($stmt->fetch()) 
				{
					displayItemStats($location,$itemID,$icon,$itemName,$members,$tradeable,$weight,$examine,$questItem,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer,$attackSpeed,$weaponType,$combatStyle1,$attackType1,$attackStyle1,$experience1,$boosts1,$combatStyle2,$attackType2,$attackStyle2,$experience2,$boosts2,$combatStyle3,$attackType3,$attackStyle3,$experience3,$boosts3,$combatStyle4,$attackType4,$attackStyle4,$experience4,$boosts4,$combatStyle5,$attackType5,$attackStyle5,$experience5,$boosts5);
				}
			}
			else{
				//If not a weapon needs to call this
				
				$stmt2=$conn->prepare("SELECT DISTINCT 
				items.ID,
				items.icon,
				items.name,
				items.members,
				items.tradeable,
				items.weight,
				items.examine,
				items.questItem,
				equipment.stabAttack,
				equipment.slashAttack,
				equipment.crushAttack,
				equipment.magicAttack,
				equipment.rangeAttack,
				equipment.stabDefence,
				equipment.slashDefence,
				equipment.crushDefence,
				equipment.magicDefence,
				equipment.rangeDefence,
				equipment.meleeStrength,
				equipment.rangeStrength,
				equipment.magicStrength,
				equipment.prayer,equipment.itemSlot,
				equipment.requirementAttack,
				equipment.requirementStrength,
				equipment.requirementHitPoints,
				equipment.requirementRanged,
				equipment.requirementMagic,
				equipment.requirementDefence,
				equipment.requirementPrayer
				FROM items
				INNER JOIN equipment
				ON (items.ID=equipment.ID)
				WHERE (items.name = (?) AND noted='0' AND duplicate='0') LIMIT 1");
				
				$stmt2->bind_param('s', $itemName);
				$stmt2->execute();
				$stmt2->bind_result($itemID,$icon,$itemName,$members,$tradeable,$weight,$examine,$questItem,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer);
				while ($stmt2->fetch()) 
				{
					displayItemStats($location,$itemID,$icon,$itemName,$members,$tradeable,$weight,$examine,$questItem,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer,$attackSpeed,$weaponType,$combatStyle1,$attackType1,$attackStyle1,$experience1,$boosts1,$combatStyle2,$attackType2,$attackStyle2,$experience2,$boosts2,$combatStyle3,$attackType3,$attackStyle3,$experience3,$boosts3,$combatStyle4,$attackType4,$attackStyle4,$experience4,$boosts4,$combatStyle5,$attackType5,$attackStyle5,$experience5,$boosts5);
				}
			}
		
		}
	
}

function displayItemStats($location,$itemID,$icon,$itemName,$members,$tradeable,$weight,$examine,$questItem,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer,$attackSpeed,$weaponType,$combatStyle1,$attackType1,$attackStyle1,$experience1,$boosts1,$combatStyle2,$attackType2,$attackStyle2,$experience2,$boosts2,$combatStyle3,$attackType3,$attackStyle3,$experience3,$boosts3,$combatStyle4,$attackType4,$attackStyle4,$experience4,$boosts4,$combatStyle5,$attackType5,$attackStyle5,$experience5,$boosts5){
	echo '<div class="container-fluid w-100 p-0 itemText2 text-center">';
					echo '<div class="table-responsive">';
					echo '<table class="table-sm w-100">';
					echo '<tr class="border-bottom brownHeader">';
					if(isset($_POST['location'])){
						echo '<td><button type="button" id="emptybutton1" class="btn btn-secondary" onclick="emptyElement('.$location.');">Hide</button></td>';
					}
						echo'<td class="p-2 text-center"><img class="grayBg border border-dark" src="data:image/jpg;base64,'.base64_encode($icon).'"/></td>';
						echo '<td class="p-2 itemText">' .$itemName.'</td>';
						echo '<td>Equip slot: ';
	
						if(isset($_POST['location'])){
							echo str_replace("_"," ",$itemSlot).'</td><td><img src="images/slot_images/'.$itemSlot.'_slot.png"></td>';
						}
						else{
							echo str_replace("_"," ",$itemSlot).'</td>';
							echo '<td class="text-center"><img src="images/slot_images/'.$itemSlot.'_slot.png"></td>';
						}
	
					echo '</tr>';
					echo '</div>';
					echo '</table>';
					
					echo '<div class="table-responsive">';
					echo '<table class="brownTable table-sm w-100 itemText2">';
					echo '<tr>';
						echo '<td class="border-bottom-0" colspan="5">Attack Bonuses</td>';
					echo '</tr>';
					echo '<tr>';
						//Stab bonus
						if($stabAttack>0)
						{
						echo '<td class="text-success border-top-0" style="width:20%"><div class="p-2">Stab</br>'.$stabAttack.'</div></td>';
						}
						elseif($stabAttack<0)
						{
						echo '<td class="text-danger border-top-0" style="width:20%"><div class="p-2">Stab</br>'.$stabAttack.'</div></td>';
						}
						else
						{
						echo '<td class="border-top-0" style="width:20%"><div class="p-2">Stab</br>'.$stabAttack.'</div></td>';
						}
	
						//Slash bonus
						if($slashAttack>0)
						{
						echo '<td class="text-success border-top-0" style="width:20%"><div class="p-2">Slash</br>'.$slashAttack.'</div></td>';
						}
						elseif($slashAttack<0)
						{
						echo '<td class="text-danger border-top-0" style="width:20%"><div class="p-2">Slash</br>'.$slashAttack.'</div></td>';
						}
						else
						{
						echo '<td class="border-top-0" style="width:20%"><div class="p-2">Slash</br>'.$slashAttack.'</div></td>';
						}
						
						//Crush bonus
						if($crushAttack>0)
						{
							echo '<td class="text-success border-top-0" style="width:20%"><div class="p-2">Crush</br>'.$crushAttack.'</div></td>';
						}
						elseif($crushAttack<0)
						{
							echo '<td class="text-danger border-top-0" style="width:20%"><div class="p-2">Crush</br>'.$crushAttack.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0" style="width:20%"><div class="p-2">Crush</br>'.$crushAttack.'</div></td>';
						}
	
						//Range bonus
						if($rangeAttack>0)
						{
							echo '<td class="text-success border-top-0" style="width:20%"><div class="p-2">Range</br>'.$rangeAttack.'</div></td>';
						}
						elseif($rangeAttack<0)
						{
							echo '<td class="text-danger border-top-0" style="width:20%"><div class="p-2">Range</br>'.$rangeAttack.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0" style="width:20%"><div class="p-2">Range</br>'.$rangeAttack.'</div></td>';
						}
						//Magic bonus
						if($magicAttack>0)
						{
							echo '<td class="text-success border-top-0" style="width:20%"><div class="p-2">Magic</br>'.$magicAttack.'</div></td>';
						}
						elseif($magicAttack<0)
						{
							echo '<td class="text-danger border-top-0" style="width:20%"><div class="p-2">Magic</br>'.$magicAttack.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0" style="width:20%"><div class="p-2">Magic</br>'.$magicAttack.'</div></td>';
						}
					echo '</tr>';
	
					echo '<tr>';
						echo '<td class="border-bottom-0" colspan="5">Defense Bonuses</td>';
					echo '</tr>';
					echo '<tr>';
						//Stab bonus
						if($stabDefence>0)
						{
						echo '<td class="text-success border-top-0"><div class="p-2">Stab</br>'.$stabDefence.'</div></td>';
						}
						elseif($stabDefence<0)
						{
						echo '<td class="text-danger border-top-0"><div class="p-2">Stab</br>'.$stabDefence.'</div></td>';
						}
						else
						{
						echo '<td class="border-top-0"><div class="p-2">Stab</br>'.$stabDefence.'</div></td>';
						}
	
						//Slash bonus
						if($slashDefence>0)
						{
						echo '<td class="text-success border-top-0"><div class="p-2">Slash</br>'.$slashDefence.'</div></td>';
						}
						elseif($slashDefence<0)
						{
						echo '<td class="text-danger border-top-0"><div class="p-2">Slash</br>'.$slashDefence.'</div></td>';
						}
						else
						{
						echo '<td class="border-top-0"><div class="p-2">Slash</br>'.$slashDefence.'</div></td>';
						}
						
						//Crush bonus
						if($crushDefence>0)
						{
							echo '<td class="text-success border-top-0"><div class="p-2">Crush</br>'.$crushDefence.'</div></td>';
						}
						elseif($crushAttack<0)
						{
							echo '<td class="text-danger border-top-0"><div class="p-2">Crush</br>'.$crushDefence.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0"><div class="p-2">Crush</br>'.$crushDefence.'</div></td>';
						}
	
						//Range bonus
						if($rangeDefence>0)
						{
							echo '<td class="text-success border-top-0"><div class="p-2">Range</br>'.$rangeDefence.'</div></td>';
						}
						elseif($rangeDefence<0)
						{
							echo '<td class="text-danger border-top-0"><div class="p-2">Range</br>'.$rangeDefence.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0"><div class="p-2">Range</br>'.$rangeDefence.'</div></td>';
						}
						//Magic bonus
						if($magicDefence>0)
						{
							echo '<td class="text-success border-top-0"><div class="p-2">Magic</br>'.$magicDefence.'</div></td>';
						}
						elseif($magicDefence<0)
						{
							echo '<td class="text-danger border-top-0"><div class="p-2">Magic</br>'.$magicDefence.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0"><div class="p-2">Magic</br>'.$magicDefence.'</div></td>';
						}
					echo '</tr>';
	
					echo '<tr>';
						echo '<td class="border-bottom-0" colspan="3">Strength Bonuses</td>';
						echo '<td colspan="2" class="border-bottom-0 border-left">Other Bonuses</td>';
					echo '</tr>';
					echo '<tr>';
						//Melee strength
						if($meleeStrength>0)
						{
							echo '<td class="text-success border-top-0"><div class="p-2">Melee</br>'.$meleeStrength.'</div></td>';
						}
						elseif($meleeStrength<0)
						{
							echo '<td class="text-danger border-top-0"><div class="p-2">Melee</br>'.$meleeStrength.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0"><div class="p-2">Melee</br>'.$meleeStrength.'</div></td>';
						}
						//Range strength
						if($rangeStrength>0)
						{
							echo '<td class="text-success border-top-0"><div class="p-2">Range</br>'.$rangeStrength.'</div></td>';
						}
						elseif($rangeStrength<0)
						{
							echo '<td class="text-danger border-top-0"><div class="p-2">Range</br>'.$rangeStrength.'</div></td>';
						}
						elseif($rangeStrength==NULL)
						{
							echo '<td class="border-top-0"><div class="p-2">Range</br>0</div></td>';
						}
						else
						{
							echo '<td class="border-top-0"><div class="p-2">Range</br>'.$rangeStrength.'</div></td>';
						}
						//Magic strength
						if($magicStrength>0)
						{
							echo '<td class="text-success border-top-0"><div class="p-2">Magic</br>'.$magicStrength.'</div></td>';
						}
						elseif($magicStrength<0)
						{
							echo '<td class="text-danger border-top-0"><div class="p-2">Magic</br>'.$magicStrength.'</div></td>';
						}
						elseif($magicStrength==NULL)
						{
							echo '<td class="border-top-0"><div class="p-2">Magic</br>0</div></td>';
						}
						else
						{
							echo '<td class="border-top-0"><div class="p-2">Magic</br>'.$magicStrength.'</div></td>';
						}			
						//Other Bonuses
						if($prayer>0)
						{
							echo '<td class="text-success border-top-0 border-left"><div class="p-2">Prayer</br>'.$prayer.'</div></td>';
						}
						elseif($prayer<0)
						{
							echo '<td class="text-danger border-top-0 border-left"><div class="p-2">Prayer</br>'.$prayer.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0 border-left"><div class="p-2">Prayer</br>'.$prayer.'</div></td>';
						}
						if(!($attackSpeed==NULL)){
							echo '<td class="border-top-0"><div class="p-2">Speed</br>'.$attackSpeed.'</div></td>';
						}
						else
						{
							echo '<td class="border-top-0"></td>';
						}
					echo '</tr>';
					echo '<tr>';
						echo '<td colspan="5" class="border-bottom-0">Miscellanous Info</td>';
					echo '</tr>';
					echo'<tr>';
						echo '<td class="border-top-0">Requirements</br>';
						if($requirementHitpoints!==NULL){
							echo 'Hitpoints: '.$requirementHitpoints;
						}
						if($requirementAttack!==NULL){
							echo 'Attack: '.$requirementAttack.' ';
						}
						if($requirementStrength!==NULL){
							echo 'Strength: '.$requirementStrength.' ';
						}
						if($requirementDefence!==NULL){
							echo 'Defence: '.$requirementDefence.' ';
						}
						if($requirementRanged!==NULL){
							echo 'Ranged: '.$requirementRanged.' ';
						}
						if($requirementPrayer!==NULL){
							echo 'Prayer: '.$requirementPrayer.' ';
						}
						if($requirementMagic!==NULL){
							echo 'Magic: '.$requirementMagic;
						}
						if(($requirementRanged==NULL)&&($requirementHitpoints==NULL)&&($requirementAttack==NULL)&&($requirementStrength==NULL)&&($requirementDefence==NULL)&&($requirementPrayer==NULL)&&($requirementMagic==NULL))
						{
							echo'None';
						}
						'</td>';
						echo '<td class="border-top-0">Weight</br>'.$weight.'kg</td>';
						if($tradeable=='1'){
							echo '<td class="border-top-0">Tradeable</br>Yes</td>';
						}
						else{
							echo '<td class="border-top-0">Tradeable</br>No</td>';							
						}
						if($members=='1'){
							echo '<td class="border-top-0">Members<br><img src="images/members_icon.png"/></td>';
						}
						else
						{
							echo '<td class="border-top-0">Members<br><img src="images/f2p_icon.png"/></td>';		
						}
						if($questItem=='1'){
							echo'<td class="border-top-0">Quest Item<br>Yes</td>';
						}
						else{
							echo'<td class="border-top-0">Quest Item<br>No</td>';
						}
					echo '</tr>';
					if(isset($_POST['additionalMessage']))
					{
						$additionalMessage =trim($_POST['additionalMessage']);
					}
					echo '<tr>';
					if((!($attackSpeed==NULL))&&($additionalMessage==='')){
						echo '<td >Examine:</td><td colspan="3" class="text-left">'.$examine.'</td>';
						echo '<td><button type="button" id="'.$itemID.'" class="btn btn-secondary" onclick="showStyles(this.id);">Show Styles</button></td>';
					}
					else{
						echo '<td >Examine:</td><td colspan="4" class="text-left">'.$examine.'</td>';
					}
					echo '</tr>';
					
					
					if(isset($_POST['additionalMessage']))
					{
						if(!($additionalMessage===''))//If message exists
						{
							echo '<tr>';
							echo '<td>Additional notes:</td>';
							if(!($attackSpeed==NULL)){
								echo '<td class="text-left" colspan="3">'.$additionalMessage.'</td>';
								echo '<td><button type="button" id="'.$itemID.'" class="btn btn-secondary" onclick="showStyles(this.id);">Show Styles</button></td>';
							}
							else{
								echo '<td class="text-left" colspan="4">'.$additionalMessage.'</td>';
							}
							echo '</tr>';
						}
					}
						//echo '<td><button type="button" id="emptybutton1" class="btn btn-secondary" onclick="emptyElement('.$location.');">Hide</button></td>';
					echo '</table>';
					if(!($attackSpeed==NULL)){
						//echo '<button type="button" id="show'.$itemID.'" class="btn btn-secondary" onclick="showStyles(\'table'.$itemID.'\',this.id);">Show Attack Styles</button>';
						echo '<div class="table-responsive">';
							echo '<table class="brownTable table-sm w-100 itemText2 hidden" id="table'.$itemID.'">';
								echo '<tr class="brownHeader">';
								echo '<td colspan="5">Weapon type: '.str_replace('_',' ',$weaponType).'</td>';
								echo '</tr>';
								$i=1;
								while($i<6){
									if(!(${'combatStyle'.$i}===NULL)){
										echo '<tr>';
										echo '<td style="width:20%" class="border-top-0">Attack Style '.$i.': '.${'attackStyle'.$i}.'</td>';
										echo '<td style="width:20%" class="border-top-0">Combat Style: '.${'combatStyle'.$i}.'</td>';
										echo '<td style="width:20%" class="border-top-0">Attack Type: '.${'attackType'.$i}.'</td>';
										echo '<td style="width:20%" class="border-top-0">Experience: '.${'experience'.$i}.'</td>';
										if(!(${'boosts'.$i}===NULL)){
											echo '<td style="width:20%" class="border-top-0">Benefits of Style: '.${'boosts'.$i}.'</td>';
										}
										else{
											echo '<td style="width:20%" class="border-top-0">Benefits of Style: None </td>';
										}
										echo '</tr>';
									}
									$i++;
								}
							echo '</table>
						</div>';
						
					}
					
					echo'<div>
					</div>';
}
?>
<script type="text/javascript">
function emptyElement(elementId)
{
	$( "#table"+elementId).empty();
}
function showStyles(elementId)
{	
	$("#table"+elementId).show();
	$("#"+elementId).attr("onclick","hideStyles(this.id)");
	$("#"+elementId).text("Hide Styles");
}
function hideStyles(elementId)
{	
	$("#table"+elementId).hide();
	$("#"+elementId).attr("onclick","showStyles(this.id)");
	$("#"+elementId).text("Show Styles");
}

</script>

