<?php
function getStrengthBonus($itemSlot){
    if(file_exists('connect.inc')){
        include_once('connect.inc');
    }
    if(file_exists('../connect.inc')){
        include_once('../connect.inc');
    }
    $conn = connectToDb();
    $stmt=$conn->prepare("select (itemName,itemSlot,meleeStrength) from itemStats where itemSlot = (?)");
    $stmt->bind_param('s', $itemSlot);
    $stmt->execute();
    $stmt->bind_result($itemName,$itemSlot,$meleeStrength);
//Do something with the results
}
?>
