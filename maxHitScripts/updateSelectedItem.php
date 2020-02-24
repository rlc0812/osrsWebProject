<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function updateSelectedItem()
{
    $itemName = $_POST['itemName'];
    $itemSlot = $_POST['itemSlot'];
    $strengthBonus = $_POST['strengthBonus'];
    if($itemName=='None'){
        echo '<div id="'.$itemSlot.'Placeholder" name="'.$itemName.'" value="'.$strengthBonus.'"><div class="itemText2 d-inline">'.$itemName.'</div><span class="yellowText"> +'.$strengthBonus.'</span></div>';
    }
    else{
        echo '<div class="darkBg2 border-left border-right border-bottom border-dark" id="'.$itemSlot.'Placeholder" name="'.$itemName.'" value="'.$strengthBonus.'"><div class="itemText d-inline" id="'.$itemSlot.'Value">'.$itemName.'</div><span class="yellowText"> +'.$strengthBonus.'</span></div>';
    }
}

function updateSelectedIcon()
{
    if(file_exists('connect.inc')){
        include_once('connect.inc');
    }
    if(file_exists('../connect.inc')){
        include_once('../connect.inc');
    }
    $conn = connectToDb();
    $itemName = $_POST['itemNameIcon'];   
    $itemSlot = $_POST['itemSlot'];

    if($itemName=='None'){
        echo'<img class="mt-1" height="32" width="32" src="images/slot_images/'.$itemSlot.'_slot.png"><br>';
    }
    else{
        $stmt=$conn->prepare("SELECT DISTINCT name,icon FROM items WHERE (name=(?) AND noted=0) LIMIT 1");
        if(false===$stmt)
        {
            die('prepare() failed '.htmlspecialchars($conn->error));
        }
        $rc = $stmt->bind_param('s',$itemName);
        if(false===$rc)
        {
            die('bind_param() failed '.htmlspecialchars($stmt->error));
        }

        if($stmt->execute()){
            //Worked
        }

        else {
            die('select() failed '.htmlspecialchars($stmt->error));
        }
        $stmt->bind_result($name,$icon);
        while ($stmt->fetch()) {
            echo'<img class="mt-1" id="'.$itemSlot.'Icon" src="data:image/jpg;base64,'.base64_encode($icon).'"/>';
        }
    }
}



if( (isset($_POST['itemName']))&&(isset($_POST['itemSlot']))&&(isset($_POST['strengthBonus'])) ){
    updateSelectedItem();
}

if( (isset($_POST['itemSlot']))&&(isset($_POST['itemNameIcon']))){
    updateSelectedIcon();
}




?>
