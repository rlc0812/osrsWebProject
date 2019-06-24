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
	$stmt=$conn->prepare("SELECT username,attack,defence,strength,hitpoints,ranged,prayer,magic FROM level where username = ?"); 
	$stmt->bind_param('s',$username);
	$stmt->execute();
	//$result=$stmt->get_result();
	$stmt->bind_result($username,$atk, $def, $str ,$hp, $range, $pray ,$mage);
	//$levels=$result->fetch_assoc();
	while ($stmt->fetch()) {
		$levels = array('username'=>$username, 'attack'=>$atk, 'defence'=>$def, 'strength'=>$str ,'hitpoints'=>$hp, 'ranged'=>$range, 'prayer'=>$pray ,'magic'=>$mage);
	}
	echo '<input type="text" class="text-center w-75" id="strengthLevel" value="'.$str.'" placeholder="Enter strength">';
	//return($levels);
}

if(isset($_POST['characterName'])){
	$char =($_POST['characterName']);
	getLevels($char);
}

?>
