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
		//UNKNOWN at [24]
	'Bounty Hunter - Hunter' => $highScoreValues[25],
	'Bounty Hunter - Rogue' => $highScoreValues[26],
	'All Clues' => $highScoreValues[27],
	'Beginner Clues' => $highScoreValues[28],
	'Easy Clues' => $highScoreValues[29],
	'Medium Clues' => $highScoreValues[30],
	'Hard Clues' => $highScoreValues[31],
	'Elite Clues' => $highScoreValues[32],
	'Master Clues' => $highScoreValues[33],
		//LMS rank is [34]
	//Boss highscores come after [34]
	/*
	'Abyssal Sire'=> $highScoreValues[35],
	'Alchemical Hydra'=> $highScoreValues[36],
	'Barrows Chests'=> $highScoreValues[37],
	'Bryophyta'=> $highScoreValues[38],
	'Callisto'=> $highScoreValues[39],
	'Cerberus'=> $highScoreValues[40],
	'Chambers of Xeric'=> $highScoreValues[41],
	'Chambers of Xeric Challenge Mode'=> $highScoreValues[42],
	'Chaos Elemental'=> $highScoreValues[43],
	'Chaos Fanatic'=> $highScoreValues[44],
	'Commander Zilyana'=> $highScoreValues[45],
	'Corporeal Beast'=> $highScoreValues[46],
	'Dagannoth Prime'=> $highScoreValues[47],
	'Dagannoth Rex'=> $highScoreValues[48],
	'Dagannoth Supreme'=> $highScoreValues[49],
	'Crazy Archaelogist'=> $highScoreValues[50],
	'Deranged Archaelogist'=> $highScoreValues[51],
	'General Graardor'=> $highScoreValues[52],
	'Giant Mole'=> $highScoreValues[53],
	'Grotesque Guardians'=> $highScoreValues[54],
	'Hespori'=> $highScoreValues[55],
	'Kalphite Queen'=> $highScoreValues[56],
	'King Black Dragon'=> $highScoreValues[57],
	'Kraken'=> $highScoreValues[58],
	"Kree'Arra"=> $highScoreValues[59],
	"K'ril Tsutsaroth"=> $highScoreValues[60],
	'Mimic'=> $highScoreValues[61],
	'Obor'=> $highScoreValues[62],
	'Sarachnis'=> $highScoreValues[63],
	'Scorpia'=> $highScoreValues[64],
	'Skotizo'=> $highScoreValues[65]
	'The Gauntlet'=> $highScoreValues[66],
	'The Corrupted Gauntlet'=> $highScoreValues[67],
	'Theatre of Blood'=> $highScoreValues[68],
	'Thermonuclear Smoke Devil'=> $highScoreValues[69],
	'TzKal-Zuk'=> $highScoreValues[70],
	'TzTok-Jad'=> $highScoreValues[71],
	'Venenatis'=> $highScoreValues[72],
	"Vet'ion"=> $highScoreValues[73],
	'Vorkath'=> $highScoreValues[74],
	'Wintertodt'=> $highScoreValues[75],
	'Zalcano'=> $highScoreValues[76],
	'Zulrah'=> $highScoreValues[77]
	*/
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

