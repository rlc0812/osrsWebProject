<?php
function getStrengthBonus($itemSlot){
    if(file_exists('connect.inc')){
        include_once('connect.inc');
    }
    if(file_exists('../connect.inc')){
        include_once('../connect.inc');
    }
    $conn = connectToDb();
    $stmt=$conn->prepare("select itemName,itemSlot,meleeStrength from itemStats where (itemSlot = (?) AND meleeStrength > 0) ORDER BY itemName ASC");
    $stmt->bind_param('s', $itemSlot);
    $stmt->execute();
    $stmt->bind_result($itemName,$itemSlot,$meleeStrength);

    while ($stmt->fetch()) {
        $itemName = str_replace('_',' ',$itemName);
        echo '<option id="'.$itemName.'" value="'.$meleeStrength.'">'.$itemName.'</option>';
    }

}
?>

