<?php

function getItemStats($itemWithSpaces, $itemSlot){
	include('connect.inc');
	$conn = connectToDb();
	$baseitemUrl='http://oldschoolrunescape.wikia.com/wiki/';

	$itemUrl=($baseitemUrl . $itemSlot);
	echo($itemUrl);
	$itemWithSpaces= ucfirst($itemWithSpaces);
	$itemWithUnderscore = str_replace(" ", "_", $itemWithSpaces);
	$itemWithUnderscore = str_replace("'", "%27", $itemWithUnderscore);
	echo($itemUrl . '</br>');
	echo ($itemWithSpaces . '</br>');
	echo ($itemWithUnderscore . '</br>');

	$curl = curl_init($itemUrl);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FAILONERROR, true);

	if (curl_error($curl)){
		$error_message = curl_error($curl);
	}
	else{
	$curl_response = curl_exec($curl);
	}
	curl_close($curl);

	if($curl_response == NULL){
	echo("no response ");
	}

	//var_dump($curl_response);
	$exploded = explode('<td><a href="/wiki/'.$itemWithUnderscore.'" title="'.$itemWithSpaces.'">'.$itemWithSpaces.'</a>',$curl_response);
	$exploded = explode('</td></tr>',$exploded[1]);
	$exploded = explode('</td><td style="text-align:',$exploded[0]);
	$x = 0;
	foreach($exploded as $int){
	$exploded[$x] = str_replace(PHP_EOL,"",$int);
	$exploded[$x] = str_replace("+","",$exploded[$x]);
	$exploded[$x] = str_replace(' right;"> ',"",$exploded[$x]);
	$exploded[$x] = str_replace(' center;">',"",$exploded[$x]);
	$exploded[$x] = str_replace(' ',"",$exploded[$x]);
	$x++;
	}
	var_dump($exploded);
$itemWithUnderscore = str_replace("%27","", $itemWithUnderscore);
$itemSlot = str_replace("_table","", $itemSlot);
//Begin insertion statements

	if(count($exploded)=="15")
	{
		$stmt2 = $conn->prepare("INSERT INTO itemStats (itemName,itemSlot,stabAttack,slashAttack,crushAttack,rangeAttack,magicAttack,stabDefence,slashDefence,crushDefence,rangeDefence,magicDefence,meleeStrength,rangeStrength,magicStrength,prayer) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt2->bind_param('ssssssssssssssss',$itemWithUnderscore,$itemSlot,$exploded[1],$exploded[2],$exploded[3],$exploded[4],$exploded[5],$exploded[6],$exploded[7],$exploded[8],$exploded[9],$exploded[10],$exploded[11],$exploded[12],$exploded[13],$exploded[14]);
		$stmt2->execute();
		echo("Added: ".$itemWithSpaces." to the database");
	}
	else if(count($exploded)=="16")//Weapon table will execute here
	{//For weapon that has extra value
		$stmt2 = $conn->prepare("INSERT INTO itemStats (itemName,itemSlot,stabAttack,slashAttack,crushAttack,rangeAttack,magicAttack,stabDefence,slashDefence,crushDefence,rangeDefence,magicDefence,meleeStrength,rangeStrength,magicStrength,prayer,attackSpeed) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt2->bind_param('sssssssssssssssss',$itemWithUnderscore,$itemSlot,$exploded[1],$exploded[2],$exploded[3],$exploded[4],$exploded[5],$exploded[6],$exploded[7],$exploded[8],$exploded[9],$exploded[10],$exploded[11],$exploded[12],$exploded[13],$exploded[14],$exploded[15]);
		$stmt2->execute();
		echo("Added: ".$itemWithSpaces." to the database");
	}
	else if(count($exploded)=="13")//Ring execute here (does not have range/mage:strength)
	{
		$stmt2 = $conn->prepare("INSERT INTO itemStats (itemName,itemSlot,stabAttack,slashAttack,crushAttack,rangeAttack,magicAttack,stabDefence,slashDefence,crushDefence,rangeDefence,magicDefence,meleeStrength,rangeStrength,magicStrength,prayer) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,NULL,NULL,?)");
		$stmt2->bind_param('ssssssssssssss',$itemWithUnderscore,$itemSlot,$exploded[1],$exploded[2],$exploded[3],$exploded[4],$exploded[5],$exploded[6],$exploded[7],$exploded[8],$exploded[9],$exploded[10],$exploded[11],$exploded[12]);
		$stmt2->execute();
		echo("Added: ".$itemWithSpaces." to the database");
	}

}

//Useable slots include:Ammunition_slot_table,Body_slot_table,Cape_slot_table,Feet_slot_table,Hand_slot_table,Head_slot_table,Legs_slot_table,Neck_slot_table,Ring_slot_table,Shield_slot_table,Two-handed_slot_table,Weapon_slot_table

if( ($_POST['itemName']!="") && ($_POST['type']!="") ){
$itemName = $_POST['itemName'];
$itemType = $_POST['type'];

getItemStats($itemName,$itemType);

}

?>

