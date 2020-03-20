<?php

//Call connectToDB() to make connection:
//////////////////////////////////////////////////////////////////
//include_once('~/kparms/public_html/runescape/connect.inc');
//include_once('connect.inc');

if(file_exists('connect.inc')){
	include_once('connect.inc');
}
elseif(file_exists('../connect.inc')){
	include_once('../connect.inc');
}
	
function getStats($userID){//Currently gets the stats of the users main and returns the array

$conn = connectToDb();//Create database connection

//Retrieve Account Data

$query = "SELECT * FROM rank  
INNER JOIN level ON level.username = rank.username 
INNER JOIN experience ON experience.username = level.username 
INNER JOIN clues ON clues.username = experience.username
INNER JOIN bounty ON bounty.username = clues.username
WHERE rank.username = (SELECT char1 FROM memberList WHERE userID = $userID);";

$query .= "SELECT * FROM rank  
INNER JOIN level ON level.username = rank.username 
INNER JOIN experience ON experience.username = level.username 
INNER JOIN clues ON clues.username = experience.username
INNER JOIN bounty ON bounty.username = clues.username
WHERE rank.username = (SELECT char2 FROM memberList WHERE userID = $userID);";

$query .= "SELECT * FROM rank  
INNER JOIN level ON level.username = rank.username 
INNER JOIN experience ON experience.username = level.username 
INNER JOIN clues ON clues.username = experience.username
INNER JOIN bounty ON bounty.username = clues.username
WHERE rank.username = (SELECT char3 FROM memberList WHERE userID = $userID);";

$query .= "SELECT * FROM rank  
INNER JOIN level ON level.username = rank.username 
INNER JOIN experience ON experience.username = level.username
INNER JOIN clues ON clues.username = experience.username
INNER JOIN bounty ON bounty.username = clues.username
WHERE rank.username = (SELECT char4 FROM memberList WHERE userID = $userID);";

if(mysqli_multi_query($conn, $query)) {
$accountArray = [];
$charNumber = 0;
	 do {
		$charNumber++;
		if ($result = mysqli_store_result($conn)) {
			while ($row = mysqli_fetch_row($result)) {
				array_push($accountArray, $row);
				
			}
		if(mysqli_num_rows($result)==0)//If no result return placeholder so homepage displays characters in right order
		{
			array_push($accountArray, NULL);
		}
		mysqli_free_result($result);
		}

	} while (mysqli_more_results($conn) && mysqli_next_result($conn));;
}
mysqli_close($conn);
return($accountArray);
}
////////////////////////////////////////////////////////////////

function insertStats($rankArray){
$conn = connectToDb();

//NEED TO PULL USERID from session here
$userID = 0;
///////////////////////////////////////////////////////////////////////////////////////
$conn=connectToDb();
$stmt=$conn->prepare("INSERT INTO rank (userName, overall, attack, defence, strength, hitpoints, ranged, prayer, magic, cooking, woodcutting, fletching, fishing, firemaking, crafting, smithing, mining, herblore, agility, thieving, slayer, farming, runecraft, hunter, construction) VALUES ((?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?))
ON DUPLICATE KEY UPDATE
overall=(?),
attack=(?),
defence=(?),
strength=(?),
hitpoints=(?),
ranged=(?),
prayer=(?),
magic=(?),
cooking=(?),
woodcutting=(?),
fletching=(?),
fishing=(?),
firemaking=(?),
crafting=(?),
smithing=(?),
mining=(?),
herblore=(?),
agility=(?),
thieving=(?),
slayer=(?),
farming=(?),
runecraft=(?),
hunter=(?),
construction=(?)
");
$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssss',$rankArray["Username"],$rankArray["Overall Rank"],$rankArray["Attack"][0],$rankArray["Defence"][0],$rankArray["Strength"][0],$rankArray["Hitpoints"][0],$rankArray["Ranged"][0],$rankArray["Prayer"][0],$rankArray["Magic"][0],$rankArray["Cooking"][0],$rankArray["Woodcutting"][0],$rankArray["Fletching"][0],$rankArray["Fishing"][0],$rankArray["Firemaking"][0],$rankArray["Crafting"][0],$rankArray["Smithing"][0],$rankArray["Mining"][0],$rankArray["Herblore"][0],$rankArray["Agility"][0],$rankArray["Thieving"][0],$rankArray["Slayer"][0],
$rankArray["Farming"][0],$rankArray["Runecraft"][0],$rankArray["Hunter"][0],$rankArray["Construction"][0],$rankArray["Overall Rank"],$rankArray["Attack"][0],$rankArray["Defence"][0],$rankArray["Strength"][0],$rankArray["Hitpoints"][0],$rankArray["Ranged"][0],$rankArray["Prayer"][0],$rankArray["Magic"][0],$rankArray["Cooking"][0],$rankArray["Woodcutting"][0],$rankArray["Fletching"][0],$rankArray["Fishing"][0],$rankArray["Firemaking"][0],$rankArray["Crafting"][0],$rankArray["Smithing"][0],$rankArray["Mining"][0],$rankArray["Herblore"][0],$rankArray["Agility"][0],$rankArray["Thieving"][0],$rankArray["Slayer"][0],$rankArray["Farming"][0],$rankArray["Runecraft"][0],$rankArray["Hunter"][0],$rankArray["Construction"][0]);
$stmt->execute();
/////////////////////////////////////////////////////////////////////////////////
$conn=connectToDb();
$stmt=$conn->prepare("INSERT INTO level (userName, overall, attack, defence, strength, hitpoints, ranged, prayer, magic, cooking, woodcutting, fletching, fishing, firemaking, crafting, smithing, mining, herblore, agility, thieving, slayer, farming, runecraft, hunter, construction) VALUES ((?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?))
ON DUPLICATE KEY UPDATE
overall=(?),
attack=(?),
defence=(?),
strength=(?),
hitpoints=(?),
ranged=(?),
prayer=(?),
magic=(?),
cooking=(?),
woodcutting=(?),
fletching=(?),
fishing=(?),
firemaking=(?),
crafting=(?),
smithing=(?),
mining=(?),
herblore=(?),
agility=(?),
thieving=(?),
slayer=(?),
farming=(?),
runecraft=(?),
hunter=(?),
construction=(?)
");
$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssss',$rankArray["Username"],$rankArray["Total Level"],$rankArray["Attack"][1],$rankArray["Defence"][1],$rankArray["Strength"][1],$rankArray["Hitpoints"][1],$rankArray["Ranged"][1],$rankArray["Prayer"][1],$rankArray["Magic"][1],$rankArray["Cooking"][1],$rankArray["Woodcutting"][1],$rankArray["Fletching"][1],$rankArray["Fishing"][1],$rankArray["Firemaking"][1],$rankArray["Crafting"][1],$rankArray["Smithing"][1],$rankArray["Mining"][1],$rankArray["Herblore"][1],$rankArray["Agility"][1],$rankArray["Thieving"][1],$rankArray["Slayer"][1],
$rankArray["Farming"][1],$rankArray["Runecraft"][1],$rankArray["Hunter"][1],$rankArray["Construction"][1],$rankArray["Total Level"],$rankArray["Attack"][1],$rankArray["Defence"][1],$rankArray["Strength"][1],$rankArray["Hitpoints"][1],$rankArray["Ranged"][1],$rankArray["Prayer"][1],$rankArray["Magic"][1],$rankArray["Cooking"][1],$rankArray["Woodcutting"][1],$rankArray["Fletching"][1],$rankArray["Fishing"][1],$rankArray["Firemaking"][1],$rankArray["Crafting"][1],$rankArray["Smithing"][1],$rankArray["Mining"][1],$rankArray["Herblore"][1],$rankArray["Agility"][1],$rankArray["Thieving"][1],$rankArray["Slayer"][1],$rankArray["Farming"][1],$rankArray["Runecraft"][1],$rankArray["Hunter"][1],$rankArray["Construction"][1]);
$stmt->execute();
////////////////////////////////////////////////////////////////////////////
$conn=connectToDb();
$stmt=$conn->prepare("INSERT INTO experience (userName, overall, attack, defence, strength, hitpoints, ranged, prayer, magic, cooking, woodcutting, fletching, fishing, firemaking, crafting, smithing, mining, herblore, agility, thieving, slayer, farming, runecraft, hunter, construction) VALUES ((?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?),(?))
ON DUPLICATE KEY UPDATE
overall=(?),
attack=(?),
defence=(?),
strength=(?),
hitpoints=(?),
ranged=(?),
prayer=(?),
magic=(?),
cooking=(?),
woodcutting=(?),
fletching=(?),
fishing=(?),
firemaking=(?),
crafting=(?),
smithing=(?),
mining=(?),
herblore=(?),
agility=(?),
thieving=(?),
slayer=(?),
farming=(?),
runecraft=(?),
hunter=(?),
construction=(?)
");//49
$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssss',$rankArray["Username"],$rankArray["Total Experience"],$rankArray["Attack"][2],$rankArray["Defence"][2],$rankArray["Strength"][2],$rankArray["Hitpoints"][2],$rankArray["Ranged"][2],$rankArray["Prayer"][2],$rankArray["Magic"][2],$rankArray["Cooking"][2],$rankArray["Woodcutting"][2],$rankArray["Fletching"][2],$rankArray["Fishing"][2],$rankArray["Firemaking"][2],$rankArray["Crafting"][2],$rankArray["Smithing"][2],$rankArray["Mining"][2],$rankArray["Herblore"][2],$rankArray["Agility"][2],$rankArray["Thieving"][2],$rankArray["Slayer"][2],
$rankArray["Farming"][2],$rankArray["Runecraft"][2],$rankArray["Hunter"][2],$rankArray["Construction"][2],$rankArray["Total Experience"],$rankArray["Attack"][2],$rankArray["Defence"][2],$rankArray["Strength"][2],$rankArray["Hitpoints"][2],$rankArray["Ranged"][2],$rankArray["Prayer"][2],$rankArray["Magic"][2],$rankArray["Cooking"][2],$rankArray["Woodcutting"][2],$rankArray["Fletching"][2],$rankArray["Fishing"][2],$rankArray["Firemaking"][2],$rankArray["Crafting"][2],$rankArray["Smithing"][2],$rankArray["Mining"][2],$rankArray["Herblore"][2],$rankArray["Agility"][2],$rankArray["Thieving"][2],$rankArray["Slayer"][2],$rankArray["Farming"][2],$rankArray["Runecraft"][2],$rankArray["Hunter"][2],$rankArray["Construction"][2]);
$stmt->execute();
///////////////////////////////////////////////////////////////////////////
$conn = connectToDb();
$stmt=$conn->prepare("INSERT INTO clues VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE
beginnerRank=(?),
beginnerDone=(?),
easyRank=(?),
easyDone=(?),
mediumRank=(?),
mediumDone=(?),
hardRank=(?),
hardDone=(?),
eliteRank=(?),
eliteDone=(?),
masterRank=(?),
masterDone=(?),
overallRank=(?),
overallDone=(?)
");
$stmt->bind_param('sssssssssssssssssssssssssssss',$rankArray["Username"],
	$rankArray["Beginner Clues"][0],$rankArray["Beginner Clues"][1],
	$rankArray["Easy Clues"][0],$rankArray["Easy Clues"][1],
	$rankArray["Medium Clues"][0],$rankArray["Medium Clues"][1],
	$rankArray["Hard Clues"][0],$rankArray["Hard Clues"][1],
	$rankArray["Elite Clues"][0],$rankArray["Elite Clues"][1],
	$rankArray["Master Clues"][0],$rankArray["Master Clues"][1],
	$rankArray["All Clues"][0],$rankArray["All Clues"][1],

	$rankArray["Beginner Clues"][0],$rankArray["Beginner Clues"][1],
	$rankArray["Easy Clues"][0],$rankArray["Easy Clues"][1],
	$rankArray["Medium Clues"][0],$rankArray["Medium Clues"][1],
	$rankArray["Hard Clues"][0],$rankArray["Hard Clues"][1],
	$rankArray["Elite Clues"][0],$rankArray["Elite Clues"][1],
	$rankArray["Master Clues"][0],$rankArray["Master Clues"][1],
	$rankArray["All Clues"][0],$rankArray["All Clues"][1]);
$stmt->execute();
///////////////////////////////////////////////////////////////////////
$conn = connectToDb();
$stmt=$conn->prepare("INSERT INTO bounty VALUES(?,?,?,?,?) ON DUPLICATE KEY UPDATE
huntRank=(?),
huntKills=(?),
rogueRank=(?),
rogueKills=(?)
");
$stmt->bind_param('sssssssss',$rankArray["Username"],$rankArray["Bounty Hunter - Hunter"][0],$rankArray["Bounty Hunter - Hunter"][1],$rankArray["Bounty Hunter - Rogue"][0],$rankArray["Bounty Hunter - Rogue"][1],$rankArray["Bounty Hunter - Hunter"][0],$rankArray["Bounty Hunter - Hunter"][1],$rankArray["Bounty Hunter - Rogue"][0],$rankArray["Bounty Hunter - Rogue"][1]);
$stmt->execute();
///////////////////////////////////////////////////////////////////////
}


?>

