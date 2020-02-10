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
	$stmt=$conn->prepare("SELECT * FROM equipment INNER JOIN weapons on (equipment.ID=weapons.ID) WHERE itemSlot = (?)");
	$stmt->bind_param('s', $itemSlot);
	$stmt->execute();
	$stmt->bind_result($itemID,$itemName,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer,$itemID2,$itemNameID2,$attackSpeed,$weaponType,$combatStyle1,$attackType1,$attackStyle1,$experience1,$boosts1,$combatStyle2,$attackType2,$attackStyle2,$experience2,$boosts2,$combatStyle3,$attackType3,$attackStyle3,$experience3,$boosts3,$combatStyle4,$attackType4,$attackStyle4,$experience4,$boosts4,$combatStyle5,$attackType5,$attackStyle5,$experience5,$boosts5);
	}
    else{
	$stmt=$conn->prepare("SELECT * FROM equipment WHERE itemSlot = (?)");
	$stmt->bind_param('s', $itemSlot);
	$stmt->execute();
	$stmt->bind_result($itemID,$itemName,$stabAttack,$slashAttack,$crushAttack,$magicAttack,$rangeAttack,$stabDefence,$slashDefence,$crushDefence,$magicDefence,$rangeDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$itemSlot,$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer);
	}

    echo'
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Stab Attack</th>
                    <th>Slash Attack</th>
                    <th>Crush Attack</th>
                    <th>Magic Attack</th>
                    <th>Ranged Attack</th>
                    <th>Stab Defence</th>
                    <th>Slash Defence</th>
                    <th>Crush Defence</th>
                    <th>Magic Defence</th>
                    <th>Range Defence</th>
                    <th>Melee Strength</th>
                    <th>Range Strength</th>
                    <th>Magic Strength</th>
                    <th>Prayer</th>';
    if(($itemSlot==='weapon')||($itemSlot==='2h')){
		echo'
                    <th>Attack Speed</th>';
	}
    echo'
                </tr>
            </thead>
            <tbody>
            ';

        while ($stmt->fetch()) {
            echo'
                <tr>
                    <td>'.$itemName.'</td>
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
