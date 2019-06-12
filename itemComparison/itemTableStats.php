
<?php
function getItemList($itemSlot){
    if(file_exists('connect.inc')){
        include_once('connect.inc');
    }
    if(file_exists('../connect.inc')){
        include_once('../connect.inc');
    }

    $conn = connectToDb();
	$stmt=$conn->prepare("select * from itemStats where itemSlot = (?)");
    $stmt->bind_param('s', $itemSlot);
	$stmt->execute();
    $stmt->bind_result($itemID,$itemName,$itemSlot,$stabAttack,$slashAttack,$crushAttack,$rangeAttack,$magicAttack,$stabDefence,$slashDefence,$crushDefence,
    $rangeDefence,$magicDefence,$meleeStrength,$rangeStrength,$magicStrength,$prayer,$attackSpeed);


    echo'
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Stab Attack</th>
                    <th>Slash Attack</th>
                    <th>Crush Attack</th>
                    <th>Ranged Attack</th>
                    <th>Magic Attack</th>
                    <th>Stab Defence</th>
                    <th>Slash Defence</th>
                    <th>Crush Defence</th>
                    <th>Range Defence</th>
                    <th>Magic Defence</th>
                    <th>Melee Strength</th>
                    <th>Range Strength</th>
                    <th>Magic Strength</th>
                    <th>Prayer</th>
                    <th>Attack Speed</th>
                </tr>
            </thead>
            <tbody>
            ';

        while ($stmt->fetch()) {
            if(!($rangeAttack=="64to100")){
                settype($rangeAttack, "integer");
            }
            if(!($rangeStrength=="52to70")){
                settype($rangeStrength, "integer"); 
            }
            if(false){
                settype($prayer, "integer");
            }
            if(!(($attackSpeed=='no')||($attackSpeed=='Varies'))){
                settype($attackSpeed, "integer");   
            }  
            echo'
                <tr>
                    <td>'.str_replace("_"," ",$itemName).'</td>
                    <td>'.$stabAttack.'</td>
                    <td>'.$slashAttack.'</td>
                    <td>'.$crushAttack.'</td>
                    <td>'.$rangeAttack.'</td>
                    <td>'.$magicAttack.'</td>
                    <td>'.$stabDefence.'</td>
                    <td>'.$slashDefence.'</td>
                    <td>'.$crushDefence.'</td>
                    <td>'.$rangeDefence.'</td>
                    <td>'.$magicDefence.'</td>
                    <td>'.$meleeStrength.'</td>
                    <td>'.$rangeStrength.'</td>';
                    if($magicStrength==NULL){
                        echo'<td>0</td>';
                    }
                    else{
                        echo'<td>'.$magicStrength.'</td>';
                    }
                    echo'
                    <td>'.$prayer.'</td>';
                    if(!($attackSpeed===NULL||$attackSpeed=='no')){
                        echo' <td>'.$attackSpeed.'</td>';
                    }
                    else{
                        echo' <td>N/A</td>';
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
