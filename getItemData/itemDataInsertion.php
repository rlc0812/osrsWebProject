<?php

include('../connect.inc');

$curl = curl_init('https://raw.githubusercontent.com/osrsbox/osrsbox-db/master/docs/items-json-slot/items-2h.json');
//$curl = curl_init('https://raw.githubusercontent.com/osrsbox/osrsbox-db/master/docs/items-complete.json');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FAILONERROR, true);

//Error Check
if (curl_error($curl)){
	$error_message = curl_error($curl);
}
else{
$curl_response = curl_exec($curl);
}
curl_close($curl);

if (isset($error_message)) {//Process the error
echo("Curl failed.");

}
if($curl_response == NULL){
return false;
}
$array= json_decode($curl_response, true);



$conn = connectToDb();

foreach($array as $item){
echo($item['id'].'/');
/*
	$stmt=$conn->prepare("INSERT INTO items VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	incomplete=?,
	members=?,
	tradeable=?,
	tradeableOnGE=?,
	stackable=?,
	noted=?,
	noteable=?,
	linkedIDItem=?,
	linkedIDNoted=?,
	linkedIDPlaceholder=?,
	placeholder=?,
	equipable=?,
	equipableByPlayer=?,
	equipableWeapon=?,
	cost=?,
	lowAlch=?,
	highAlch=?,
	weight=?,
	buyLimit=?,
	questItem=?,
	releaseDate=?,
	duplicate=?,
	examine=?,
	wikiName=?,
	wikiURL=?
	");
	$stmt->bind_param('isiiiiiiiiiiiiiiiiidiisisss',$item['id'],$item['name'],$item['incomplete'],$item['members'],$item['tradeable'],$item['tradeable_on_ge'],$item['stackable'],$item['noted'],$item['noteable'],$item['linked_id_item'],$item['linked_id_noted'],$item['linked_id_placeholder'],$item['placeholder'],$item['equipable'],$item['equipable_by_player'],$item['equipable_weapon'],$item['cost'],$item['lowalch'],$item['highalch'],$item['weight'],$item['buy_limit'],$item['quest_item'],$item['release_date'],$item['duplicate'],$item['examine'],$item['wiki_name'],$item['wiki_url']);
	$stmt->execute();
	*/
	/*
	if($item[equipable]=='true'){
		
		//need to check requirements if they exist before insertion
		
		$stmt=$conn->prepare("INSERT INTO equipment VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
		ON DUPLICATE KEY UPDATE
		stabAttack=?,
		slashAttack=?,
		crushAttack=?,
		magicAttack=?,
		rangeAttack=?,
		stabDefence=?,
		slashDefence=?,
		crushDefence=?,
		magicDefence=?,
		rangeDefence=?,
		meleeStrength=?,
		rangeStrength=?,
		magicStrength=?,
		prayer=?,
		itemSlot=?,
		requirementAttack=?,
		requirementStrength=?,
		requirementHitPoints=?,
		requirementRanged=?,
		requirementMagic=?,
		requirementDefence=?,
		requirementPrayer=?
		");
		$stmt->bind_param('isiiiiiiiiiiiiiisiiiiiii',$item['id'],$item['name'],$item['equipment']['attack_stab'],$item['equipment']['attack_slash'],$item['equipment']['attack_crush'],$item['equipment']['attack_magic'],$item['equipment']['attack_ranged'],$item['equipment']['defence_stab'],$item['equipment']['defence_slash'],item['equipment']['defence_crush'],$item['equipment']['defence_magic'],$item['equipment']['defence_ranged'],$item['equipment']['melee_strength'],$item['equipment']['ranged_strength'],$item['equipment']['magic_damage'],$item['equipment']['prayer'],$item['equipment']['slot'],$item['equipment']['requirements']['attack'],$item['equipment']['requirements']['strength'],$item['equipment']['requirements']['hitpoints'],$item['equipment']['requirements']['ranged'],$item['equipment']['requirements']['magic'],$item['equipment']['requirements']['defence'],$item['equipment']['requirements']['prayer']);
		$stmt->execute();*/
		/*
		if($item[equipable_weapon]=='true'){//Insert for a weapon
		
		//Need to check stances if they exist for insertion
		
			$stmt=$conn->prepare("INSERT INTO weapons VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
			ON DUPLICATE KEY UPDATE
			attackSpeed=?,
			weaponType=?,
			combatStyle1=?,
			attackType1=?,
			attackStyle1=?,
			experience1=?,
			boosts1=?,
			combatStyle2=?,
			attackType2=?,
			attackStyle2=?,
			experience2=?,
			boosts2=?,
			combatStyle3=?,
			attackType3=?,
			attackStyle3=?,
			experience3=?,
			boosts3=?,
			combatStyle4=?,
			attackType4=?,
			attackStyle4=?,
			experience4=?,
			boosts4=?
			");
			$stmt->bind_param('isisssssssssssssssssssss',$item['id'],$item['name'],$item['weapon']['attack_speed'],$item['weapon']['Weapon_type'],$item['weapon']['stances']['0']['combat_style'],$item['weapon']['stances']['0']['attack_type'],$item['weapon']['stances']['0']['attack_style'],$item['weapon']['stances']['0']['experience'],$item['weapon']['stances']['0']['boosts'],['stances']['1']['combat_style'],$item['weapon']['stances']['1']['attack_type'],$item['weapon']['stances']['1']['attack_style'],$item['weapon']['stances']['1']['experience'],$item['weapon']['stances']['1']['boosts'],['stances']['2']['combat_style'],$item['weapon']['stances']['2']['attack_type'],$item['weapon']['stances']['2']['attack_style'],$item['weapon']['stances']['2']['experience'],$item['weapon']['stances']['2']['boosts'],['stances']['3']['combat_style'],$item['weapon']['stances']['3']['attack_type'],$item['weapon']['stances']['3']['attack_style'],$item['weapon']['stances']['3']['experience'],$item['weapon']['stances']['3']['boosts']);
			$stmt->execute();
		}
	}*/
}
//$this->db->$conn->error_list;
//mysqli_close($conn);

?>