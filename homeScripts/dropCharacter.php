<?php
include_once('../connect.inc');
include_once('itemApiCall.php');
include_once('tableCreation.php');

//Commented out error reporting for the launch
//error_reporting(E_ALL);

$userID = $_POST['userID'];

if(isset($_POST['btn'])){
	if(($_POST['btn'])=='btn1')
	{
		$conn = connectToDb();
		$stmt = $conn->prepare("UPDATE memberList SET char1 = NULL WHERE (userID =?)");
		tableCreation($statTableArray[0],'1');
		$stmt->bind_param('s', $userID);
		$stmt->execute();
		echo "Character 1 successfully removed.";
		$statTableArray = getStats($userID);
		tableCreation($statTableArray[0],'1');
	}

	elseif($_POST['btn']=='btn2')
	{
		$conn = connectToDb();
		$stmt2 = $conn->prepare("UPDATE memberList SET char2 = NULL WHERE (userID =?)");
		$stmt2->bind_param('s', $userID);
		$stmt2->execute();
		echo "Character 2 successfully removed.";
		$statTableArray = getStats($userID);
		tableCreation($statTableArray[1],'2');
	}
	elseif(($_POST['btn'])=='btn3')
	{
		$conn = connectToDb();
		$stmt = $conn->prepare("UPDATE memberList SET char3 = NULL WHERE (userID =?)");
		$stmt->bind_param('s', $userID);
		$stmt->execute();
		echo "Character 3 successfully removed.";
		$statTableArray = getStats($userID);
		tableCreation($statTableArray[2],'3');
	}
	elseif(($_POST['btn'])=='btn4')
	{
		$conn = connectToDb();
		$stmt = $conn->prepare("UPDATE memberList SET char4 = NULL WHERE (userID =?)");
		$stmt->bind_param('s', $userID);
		$stmt->execute();
		echo "Character 4 successfully removed.";
		$statTableArray = getStats($userID);
		tableCreation($statTableArray[3],'4');

	}
}
?>
