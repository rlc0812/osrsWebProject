<?php
include('insertItemsArray.php');
//Gets items for the "Equips Page"
$curl = curl_init('http://parmnet.com/runescape/equipsPage.php');//URL will change based on domain of equipsPage.php
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FAILONERROR, true);

	if (curl_error($curl))
	{
		$error_message = curl_error($curl);
	}
	else
	{
		$curl_response = curl_exec($curl);
	}
	curl_close($curl);

	if($curl_response == NULL)
	{
		echo("no response ");
	}

	$itemList = [];//Empty array for the items to be pushed
	$exploded = explode(');">',$curl_response);
	echo("Number of untradable equips:".sizeof($exploded));

	for($i=1;$i <= ((sizeof($exploded))-1);$i+=1)//Use index 2/4/6/8 etc..
	{
		$item = explode('</td>',$exploded[$i]);
		array_push($itemList,$item[0]);
	}

//Gets items for the "Achievement diary Page"
$curl = curl_init('http://parmnet.com/runescape/achievementDiary.php');//URL will change based on domain of equipsPage.php
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FAILONERROR, true);

	if (curl_error($curl))
	{
		$error_message = curl_error($curl);
	}
	else
	{
		$curl_response = curl_exec($curl);
	}
	curl_close($curl);

	if($curl_response == NULL)
	{
		echo("no response ");
	}

	$itemList2 = [];//Empty array for the items to be pushed
	$exploded = explode(');">',$curl_response);
	echo("Number of untradable equips:".sizeof($exploded));
	for($i=1;$i <= ((sizeof($exploded))-1);$i+=1)//Use index 2/4/6/8 etc..
	{
		$item = explode('</td>',$exploded[$i]);
		array_push($itemList2,$item[0]);
	}
	
	////////////////////////////////////////
	include_once('../connect.inc');
	$conn = connectToDb();
	$stmt=$conn->prepare("SELECT name from exchange");
	$stmt->execute();
	//$result=$stmt->get_result();
	$stmt->bind_result($name);
	
	$itemArray=[];
	while ($stmt->fetch()) 
	{
		$name=str_replace(" (u)","",$name);
		$name=str_replace(" (uncharged)","",$name);
		array_push($itemArray,$name);
	}
	$untradeable = array("Abyssal tentacle","Saradomin's blessed sword","Magic shortbow (i)");
	
	//getItemStats($itemList);//Send array to be curled against wiki
	//getItemStats($itemList2);
	//getItemStats($itemArray);
	//getItemStats($untradeable);
	//var_dump($itemList);
	var_dump($itemList2);
	//var_dump($itemArray);
	//var_dump($untradeable);
?>
