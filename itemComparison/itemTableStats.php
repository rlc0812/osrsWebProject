<?php
function getItemList($itemSlot){
    if(file_exists('connect.inc')){
        include_once('connect.inc');
    }
    if(file_exists('../connect.inc')){
        include_once('../connect.inc');
    }

    $conn = connectToDb();
    if(($itemSlot==='weapon')||($itemSlot==='2h')){
	$stmt=$conn->prepare("SELECT items.ID,items.icon,items.name,equipment.stabAttack,equipment.slashAttack,equipment.crushAttack,equipment.magicAttack,equipment.rangeAttack,equipment.stabDefence,equipment.slashDefence,equipment.crushDefence,equipment.magicDefence,equipment.rangeDefence,equipment.meleeStrength,equipment.rangeStrength,equipment.magicStrength,equipment.prayer,equipment.itemSlot,equipment.requirementAttack,equipment.requirementStrength,equipment.requirementHitPoints,equipment.requirementRanged,equipment.requirementMagic,equipment.requirementDefence,equipment.requirementPrayer, weapons.attackSpeed,weapons.weaponType,
weapons.combatStyle1,weapons.attackType1,weapons.attackStyle1,weapons.experience1,weapons.boosts1,weapons.combatStyle2,weapons.attackType2,weapons.attackStyle2,weapons.experience2,weapons.boosts2,weapons.combatStyle3,weapons.attackType3,weapons.attackStyle3,weapons.experience3,weapons.boosts3,weapons.combatStyle4,weapons.attackType4,weapons.attackStyle4,weapons.experience4,weapons.boosts4,weapons.combatStyle5,weapons.attackType5,weapons.attackStyle5,weapons.experience5,weapons.boosts5 FROM items INNER JOIN equipment on (items.ID=equipment.ID) INNER JOIN weapons on (equipment.ID=weapons.ID) WHERE (itemSlot = (?) AND noted='0' AND duplicate='0')");
	$stmt->bind_param('s', $itemSlot);
	$stmt->execute();
	$stmt->bind_result($itemID,$icon,$itemName,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer,$attackSpeed,$weaponType,$combatStyle1,$attackType1,$attackStyle1,$experience1,$boosts1,$combatStyle2,$attackType2,$attackStyle2,$experience2,$boosts2,$combatStyle3,$attackType3,$attackStyle3,$experience3,$boosts3,$combatStyle4,$attackType4,$attackStyle4,$experience4,$boosts4,$combatStyle5,$attackType5,$attackStyle5,$experience5,$boosts5);
	}
    else{
	$stmt=$conn->prepare("SELECT DISTINCT items.ID,items.icon,items.name,equipment.stabAttack,equipment.slashAttack,equipment.crushAttack,equipment.magicAttack,equipment.rangeAttack,equipment.stabDefence,equipment.slashDefence,equipment.crushDefence,equipment.magicDefence,equipment.rangeDefence,equipment.meleeStrength,equipment.rangeStrength,equipment.magicStrength,equipment.prayer,equipment.itemSlot,equipment.requirementAttack,equipment.requirementStrength,equipment.requirementHitPoints,equipment.requirementRanged,equipment.requirementMagic,equipment.requirementDefence,equipment.requirementPrayer FROM items INNER JOIN equipment ON (items.ID=equipment.ID) WHERE (itemSlot = (?) AND noted='0' AND duplicate='0')");
	$stmt->bind_param('s', $itemSlot);
	$stmt->execute();
	$stmt->bind_result($itemID,$icon,$itemName,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer);
	}

    echo'
            <thead>
                <tr class="itemText2 font-weight-normal">
                    <th>Item Name</th>
                    <th class="no-sort">Icon</th>';
    if(($itemSlot==='weapon')||($itemSlot==='2h')){
               echo'<th>Category</th>';
	}
    echo'
                    <th>Stab Att.</th>
                    <th>Slash Att.</th>
                    <th>Crush Att.</th>
                    <th>Magic Att.</th>
                    <th>Ranged Att.</th>
                    <th>Stab Def.</th>
                    <th>Slash Def.</th>
                    <th>Crush Def.</th>
                    <th>Magic Def.</th>
                    <th>Range Def.</th>
                    <th>Melee Str.</th>
                    <th>Range Str.</th>
                    <th>Magic Str.</th>
                    <th>Prayer</th>';
    if(($itemSlot==='weapon')||($itemSlot==='2h')){
               echo'<th>Speed</th>';
	}
    echo'
                </tr>
            </thead>
            <tbody>
            ';
        while ($stmt->fetch()) {
            echo'
                <tr>
				    <td class="itemText">'.$itemName.'</td>
                    <td><img src="data:image/jpg;base64,'.base64_encode($icon).'"/></td>';
		    if(($itemSlot==='weapon')||($itemSlot==='2h')){
			       echo'<td>'.str_replace('_',' ',$weaponType).'</td>';
			}
  	    echo'
                    <td>'.$stabAttack.'</td>
                    <td>'.$slashAttack.'</td>
                    <td>'.$crushAttack.'</td>
                    <td>'.$magicAttack.'</td>
                    <td>'.$rangeAttack.'</td>
                    <td>'.$stabDefence.'</td>
                    <td>'.$slashDefence.'</td>
                    <td>'.$crushDefence.'</td>
                    <td>'.$magicDefence.'</td>
                    <td>'.$rangeDefence.'</td>
                    <td>'.$meleeStrength.'</td>
                    <td>'.$rangeStrength.'</td>
                    <td>'.$magicStrength.'</td>
                    <td>'.$prayer.'</td>';
  		    if(($itemSlot==='weapon')||($itemSlot==='2h')){
                        echo' <td>'.$attackSpeed.'</td>';
                    }
                echo'
                </tr>
            ';
        }
        echo '</tbody>';

}  

if(isset($_POST['itemSlot'])){
    $itemSlot = htmlspecialchars($_POST['itemSlot']);
    getItemList($itemSlot);
}
?>
