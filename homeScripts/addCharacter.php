<?php
function addCharacter($userID, $userName)
{
	$conn = connectToDb();
	$stmt =$conn->prepare("SELECT char1,char2,char3,char4 from memberList where userID =?");
	$stmt->bind_param('s',$userID);
	$stmt->execute();
	$stmt->bind_result($row[0],$row[1],$row[2],$row[3]);
	$stmt->fetch();

	if($row[0]==NULL)
	{	
		$conn = connectToDb();
		$stmt = $conn->prepare("UPDATE memberList SET char1=(?) where (userID =?)");
		$stmt->bind_param('ss',$userName,$userID);
		$stmt->execute();
	}
	elseif($row[1]==NULL)
	{
		$conn = connectToDb();
		$stmt = $conn->prepare("UPDATE memberList SET char2=(?) where (userID =?)");
		$stmt->bind_param('ss', $userName, $userID);
		$stmt->execute();
	}
	elseif($row[2]==NULL)
	{
		$conn = connectToDb();
		$stmt = $conn->prepare("UPDATE memberList SET char3=(?) where (userID =?)");
		$stmt->bind_param('ss', $userName,$userID);
		$stmt->execute();
	}
	elseif($row[3]==NULL)
	{ 
		$conn = connectToDb();
		$stmt = $conn->prepare("UPDATE memberList SET char4=(?) where (userID =?)");
		$stmt->bind_param('ss', $userName,$userID);
		$stmt->execute();

	}
	if( (!($row[0]==NULL)) && (!($row[1]==NULL)) && (!($row[2]==NULL)) && (!($row[3]==NULL)))
	{	
		echo "You already have 4 characters added.";
	}
	
}
?>
