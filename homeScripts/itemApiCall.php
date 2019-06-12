<?php
include_once('dataInsert.php');//Calls function to input the stats
include_once('addCharacter.php');//Inserts users character into either char1/2/3/4 of memberList
include_once('tableCreation.php');

/////ONLY CALLED ON INSERT USER from home.php//////
if(isset($_POST['ign'])){

	$addedUser =($_POST['ign']);
	//$addedUser =strip_tags($addedUser);
	//$addedUser =htmlspecialchars($addedUser);

	$userID =trim($_POST['userID']);
	$userID =strip_tags($userID);
	$userID =htmlspecialchars($userID);

	$response = addingUser($addedUser); 
	if($response)
	{	echo '<div class="container-fluid">';
		echo '<p>'.$addedUser.': is a valid character.</p>';
		addCharacter($userID, $addedUser);
		$statTableArray = getStats($userID);//Get updated stat table
		$counter = 1;
		echo '<div class="row" id="tableRow">';
		foreach($statTableArray as $character)
		{
			if($character==NULL){
			}
			else{
			tableCreation($character,$counter);
			}
			$counter++;
		}
		echo '</div>';
		echo '</div>';
	}
	else
	{
		echo '<div class="container-fluid">';
		echo ("Invalid character.");
		$statTableArray = getStats($userID);//Get updated stat table
		$counter = 1;
		echo '<div class="row" id="tableRow">';

		foreach($statTableArray as $character)
		{
			if($character==NULL){
			}
			else{
			tableCreation($character,$counter);
			}
			$counter++;
		}
		echo '</div>';
		echo '</div>';
	}
}

/////
function addingUser($username){//Function used when adding a new RSN to account
$rankArray = apiPullStats($username);
//IF CHARACTER DOES NOT EXIST//
if($rankArray == false){
	return false;
}
else{
	insertStats($rankArray);
	return true;
}
}
/////

function apiPullStats($userChoice){//Function is called to grab stats and organize into an array
//Base url used for highscores
$baseUrl = 'https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=';
//$userChoice = 'Gohan SSJ 2';
$wholeUrl = ($baseUrl.$userChoice);
//Call the api using CURL
$curl1 = curl_init();
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl1, CURLOPT_FAILONERROR, true);
curl_setopt($curl1, CURLOPT_URL, $wholeUrl);

//Error Check 2.0//
if (curl_error($curl1)){
	$error_message = curl_error($curl1);
}
else{
$curl_response = curl_exec($curl1);
}

curl_close($curl1);

if (isset($error_message)) {//Process the error
echo("Curl failed.");
}
if($curl_response == NULL){
return false;
}

$statsArray = (explode(PHP_EOL, $curl_response)); //Break the data by category (attack, def, str, ect)
$i=0;
foreach($statsArray as $rankValue){
	$highScoreValues[$i] = explode(",", $rankValue);//Break data further (Rank,Level,Experience)
	$i++;
	}
$rankArray = array(
	'Username' => $userChoice,
	'Overall Rank' => $highScoreValues[0][0],
	'Total Level' => $highScoreValues[0][1],
	'Total Experience' => $highScoreValues[0][2],
	'Attack' => $highScoreValues[1],
	'Defence' => $highScoreValues[2],
	'Strength' => $highScoreValues[3],
	'Hitpoints' => $highScoreValues[4],
	'Ranged' => $highScoreValues[5],
	'Prayer' => $highScoreValues[6],
	'Magic' => $highScoreValues[7],
	'Cooking' => $highScoreValues[8],
	'Woodcutting' => $highScoreValues[9],
	'Fletching' => $highScoreValues[10],
	'Fishing' => $highScoreValues[11],
	'Firemaking' => $highScoreValues[12],
	'Crafting' => $highScoreValues[13],
	'Smithing' => $highScoreValues[14],
	'Mining' => $highScoreValues[15],
	'Herblore' => $highScoreValues[16],
	'Agility' => $highScoreValues[17],
	'Thieving' => $highScoreValues[18],
	'Slayer' => $highScoreValues[19],
	'Farming' => $highScoreValues[20], 
	'Runecraft' => $highScoreValues[21],
	'Hunter' => $highScoreValues[22],
	'Construction' => $highScoreValues[23],
	'Bounty Hunter - Hunter' => $highScoreValues[24],
	'Bounty Hunter - Rogue' => $highScoreValues[25],
	//LMS rank is [26]
	'All Clues' => $highScoreValues[27],
	'Beginner Clues' => $highScoreValues[28],
	'Easy Clues' => $highScoreValues[29],
	'Medium Clues' => $highScoreValues[30],
	'Hard Clues' => $highScoreValues[31],
	'Elite Clues' => $highScoreValues[32],
	'Master Clues' => $highScoreValues[33]
	);
	/*
	foreach($rankArray as $arrayTest)
	{
		var_dump($arrayTest);
		echo '<br>' ;
	}*/
return $rankArray;
}


?>

