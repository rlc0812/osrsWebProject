<?php

function updateSelectedItem()
{
    $itemName = $_POST['itemName'];
    $itemSlot = $_POST['itemSlot'];
    $strengthBonus = $_POST['strengthBonus'];

    echo '<div id="'.$itemSlot.'Placeholder" name="'.$itemName.'" value="'.$strengthBonus.'">'.$itemName.': +'.$strengthBonus.'</div>';
    //echo '<div id="'.$itemSlot.'Placeholder" name="'.$itemName.'" value="'.$strengthBonus.'" class="itemText">'.$itemName.'</div>'.'<div">+'.$strengthBonus.'</div>';
}

if( (isset($_POST['itemName']))&&(isset($_POST['itemSlot']))&&(isset($_POST['strengthBonus'])) ){
    updateSelectedItem();
}

?>
