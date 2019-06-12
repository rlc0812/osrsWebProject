<?php

//This file will receive array data for a list of whatever items you want to get stats for from the osrswiki (called from "getNeededItems.php")

function getItemStats($itemArray){
	include_once('../connect.inc');
	$conn = connectToDb();
	$baseitemUrl='http://oldschoolrunescape.wikia.com/wiki/';
	http://oldschoolrunescape.wikia.com/wiki/Head_slot_table?DPL_count=500&DPL_offset=500
	$itemUrl = NULL;
$slotArray = array("Ammunition_slot_table","Body_slot_table","Cape_slot_table","Feet_slot_table","Hand_slot_table","Head_slot_table","Legs_slot_table","Neck_slot_table","Ring_slot_table","Shield_slot_table","Two-handed_slot_table","Weapon_slot_table");

$itemSlot = array("Ammunition","Body","Cape","Feet","Hands","Head","Legs","Neck","Ring","Shield","Two_handed_weapon","Weapon","Head");
$curlResponseArray = [];
echo(sizeof($itemArray));
	foreach ($slotArray as $slotName)//Curl urls and store results
	{
		$itemUrl = ($baseitemUrl . $slotName);

		//Begin curling url
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
		else
		{
			array_push($curlResponseArray,$curl_response);
		}
	}

	$helmStats = file_get_contents("helmStats.txt");
	array_push($curlResponseArray,$helmStats);
	$z = 0;//Count item entered
	foreach($itemArray as $itemWithSpaces)
	{

		$i = 0;//Count what type of item it is
		foreach($curlResponseArray as $wikiResult)
		{
			$itemWithSpaces= ucfirst($itemWithSpaces);
			$itemWithUnderscore = str_replace(" ", "_", $itemWithSpaces);
			$itemWithUnderscore = str_replace("'", "%27", $itemWithUnderscore);
		
			$exploded = explode('<td><a href="/wiki/'.$itemWithUnderscore.'" title="'.$itemWithSpaces.'">'.$itemWithSpaces.'</a>',$wikiResult);
			if(is_array($exploded))
			{
				if((sizeof($exploded))<2)
					{
					$i++;
					continue;//Proceed to next slot table
				}
			}
			$exploded = explode('</td></tr>',$exploded[1]);
			$exploded = explode('</td><td style="text-align:',$exploded[0]);
			$x = 0;
			foreach($exploded as $int){
			$exploded[$x] = str_replace(PHP_EOL,"",$int);
			$exploded[$x] = str_replace("+","",$exploded[$x]);
			$exploded[$x] = str_replace(' right;"> ',"",$exploded[$x]);
			$exploded[$x] = str_replace(' right;">',"",$exploded[$x]);
			$exploded[$x] = str_replace(' center;">',"",$exploded[$x]);
			$exploded[$x] = str_replace(' ',"",$exploded[$x]);
			$x++;
			}
			$itemWithUnderscore = str_replace("%27","'", $itemWithUnderscore);
			$itemSlot = str_replace("_table","", $itemSlot);

			//Begin insertion statements
			if((count($exploded))=="15")
			{
				$stmt2 = $conn->prepare("INSERT INTO itemStats (itemName,itemSlot,stabAttack,slashAttack,crushAttack,magicAttack,rangeAttack,stabDefence,slashDefence,crushDefence,magicDefence,rangeDefence,meleeStrength,rangeStrength,magicStrength,prayer) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
				$stmt2->bind_param('ssssssssssssssss',$itemWithUnderscore,$itemSlot[$i],$exploded[1],$exploded[2],$exploded[3],$exploded[4],$exploded[5],$exploded[6],$exploded[7],$exploded[8],$exploded[9],$exploded[10],$exploded[11],$exploded[12],$exploded[13],$exploded[14]);
				$stmt2->execute();
				if(false===$stmt2)
				{
					die('execute() failed ' .$z. htmlspecialchars($stmt2->error));
				}
				else
				{
				echo("Added: ".$itemWithSpaces." to the database". "\r\n");
				 $z++;
				}
			}
			elseif((count($exploded))=="16")//Weapon table will execute here as it has attack speed 
			{
				$stmt2 = $conn->prepare("INSERT INTO itemStats (itemName,itemSlot,stabAttack,slashAttack,crushAttack,magicAttack,rangeAttack,stabDefence,slashDefence,crushDefence,magicDefence,rangeDefence,meleeStrength,rangeStrength,magicStrength,prayer,attackSpeed) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
				$stmt2->bind_param('sssssssssssssssss',$itemWithUnderscore,$itemSlot[$i],$exploded[1],$exploded[2],$exploded[3],$exploded[4],$exploded[5],$exploded[6],$exploded[7],$exploded[8],$exploded[9],$exploded[10],$exploded[11],$exploded[12],$exploded[13],$exploded[14],$exploded[15]);
				$test=$stmt2->execute();
				if(false===$test)
				{
					die('execute() failed weapon'.$z. htmlspecialchars($stmt2->error));
				}
				else
				{
				echo("Added: ".$itemWithSpaces." to the database". "\r\n");
				 $z++;
				}
			}
			elseif((count($exploded)=="13"))//Ring execute here (does not have range/mage:strength)
			{
				$stmt2 = $conn->prepare("INSERT INTO itemStats (itemName,itemSlot,stabAttack,slashAttack,crushAttack,magicAttack,rangeAttack,stabDefence,slashDefence,crushDefence,magicDefence,rangeDefence,meleeStrength,rangeStrength,magicStrength,prayer) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,NULL,NULL,?)");
				$stmt2->bind_param('ssssssssssssss',$itemWithUnderscore,$itemSlot[$i],$exploded[1],$exploded[2],$exploded[3],$exploded[4],$exploded[5],$exploded[6],$exploded[7],$exploded[8],$exploded[9],$exploded[10],$exploded[11],$exploded[12]);
				$test=$stmt2->execute();
				if(false===$test)
				{
					die('execute() failed ring'.$z. htmlspecialchars($stmt->error));
				}
				else
				{
				echo("Added: ".$itemWithSpaces." to the database". "\r\n");
				 $z++;
				}
			}
			$i++;
			
		}
	}
	echo("Total added:". $z);
}

?>

