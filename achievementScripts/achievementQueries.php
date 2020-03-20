<?php
function getNames($userID){
	if(file_exists('connect.inc')){
		include_once('connect.inc');
	}
	elseif(file_exists('../connect.inc')){
		include_once('../connect.inc');
	}

	$conn = connectToDb();//Create database connection
	$userID = mysqli_real_escape_string($conn,$userID);
	$userID = htmlspecialchars($userID);
	$userID = trim($userID);
	//Retrieve Account Data

	$stmt=$conn->prepare("SELECT char1,char2,char3,char4 FROM memberList where userID = ?"); 
	$stmt->bind_param('i',$userID);
	$stmt->execute();
	//$result=$stmt->get_result();
	$stmt->bind_result($char1, $char2 ,$char3, $char4);
	//$accountNames=$result->fetch_row();

	while ($stmt->fetch()) {
		$accountNames = array('0'=>$char1,'1'=>$char2,'2'=>$char3,'3'=>$char4);
	}
	return($accountNames);
}

function getLevels($username){
	if(file_exists('connect.inc')){
		include_once('connect.inc');
	}
	elseif(file_exists('../connect.inc')){
		include_once('../connect.inc');
	}

	$conn = connectToDb();//Create database connection
	$username = mysqli_real_escape_string($conn,$username);
	$username = htmlspecialchars($username);
	$username = trim($username);

	//Retrieve Account Data
	$stmt=$conn->prepare("SELECT * FROM level where username = ?"); 
	$stmt->bind_param('s',$username);
	$stmt->execute();
	//$result=$stmt->get_result();
	$stmt->bind_result($username, $overall ,$atk, $def, $str ,$hp, $range, $pray ,$mage, $cook, $wc ,$fletch, $fish, $fm ,$craft, $smith, $mine ,$herb, $agil, $thiev ,$slay, $farm, $rc ,$hunt, $con);
	//$levels=$result->fetch_assoc();
	while ($stmt->fetch()) {
		$levels = array('username'=>$username, 'overall'=>$overall ,'attack'=>$atk, 'defence'=>$def, 'strength'=>$str ,'hitpoints'=>$hp, 'ranged'=>$range, 'prayer'=>$pray ,'magic'=>$mage, 'cooking'=>$cook, 'woodcutting'=>$wc ,'fletching'=>$fletch, 'fishing'=>$fish, 'firemaking'=>$fm ,'crafting'=>$craft, 'smithing'=>$smith, 'mining'=>$mine ,'herblore'=>$herb, 'agility'=>$agil, 'thieving'=>$thiev ,'slayer'=>$slay, 'farming'=>$farm, 'runecraft'=>$rc ,'hunter'=>$hunt, 'construction'=>$con);
	}

	return($levels);
}


?>
