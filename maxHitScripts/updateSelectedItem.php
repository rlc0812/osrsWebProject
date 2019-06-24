<?php

function updateSelectedItem()
{
    $itemName = $_POST['itemName'];
    $itemSlot = $_POST['itemSlot'];
    $strengthBonus = $_POST['strengthBonus'];

    echo '<div id="'.$itemSlot.'Placeholder" value="'.$strengthBonus.'">'.$itemName.': +'.$strengthBonus.'</div>';

}

if( (isset($_POST['itemName']))&&(isset($_POST['itemSlot']))&&(isset($_POST['strengthBonus'])) ){
    updateSelectedItem();
}

?>