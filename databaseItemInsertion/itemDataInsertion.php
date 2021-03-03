<?php

include('../connect.inc');


function checkIfExists($key,array $array){
	if (!(array_key_exists($key,$array))){
		//echo 'No '.$key.' requirement.|';
		return NULL;
	}
	else{
		//echo $key.' requirement.|';
		return $array[$key];
	}
}

$url = 'https://raw.githubusercontent.com/osrsbox/osrsbox-db/master/docs/items-complete.json';

$result=file_get_contents($url);
set_time_limit(0);
ini_set('memory_limit', '512M');

//Error Check
/*if (curl_error($curl)){
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
}*/
$array= json_decode($result, true);


//var_dump($array);

$conn = connectToDb();
//Prepared statements for insertion
	$stmt=$conn->prepare("INSERT INTO items VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	name=VALUES(name),
	members=VALUES(members),
	tradeable=VALUES(tradeable),
	tradeableOnGE=VALUES(tradeableOnGE),
	stackable=VALUES(stackable),
	noted=VALUES(noted),
	noteable=VALUES(noteable),
	linkedIDItem=VALUES(linkedIDItem),
	linkedIDNoted=VALUES(linkedIDNoted),
	linkedIDPlaceholder=VALUES(linkedIDPlaceholder),
	placeholder=VALUES(placeholder),
	equipable=VALUES(equipable),
	equipableByPlayer=VALUES(equipableByPlayer),
	equipableWeapon=VALUES(equipableWeapon),
	cost=VALUES(cost),
	lowAlch=VALUES(lowAlch),
	highAlch=VALUES(highAlch),
	weight=VALUES(weight),
	buyLimit=VALUES(buyLimit),
	questItem=VALUES(questItem),
	releaseDate=VALUES(releaseDate),
	duplicate=VALUES(duplicate),
	examine=VALUES(examine),
	icon=VALUES(icon),
	wikiName=VALUES(wikiName),
	wikiURL=VALUES(wikiURL)
	");
	if(false===$stmt)
	{
		die('prepare() failed '.htmlspecialchars($conn->error));
	}

	$stmt2=$conn->prepare("INSERT INTO equipment VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	name=VALUES(name),
	stabAttack=VALUES(stabAttack),
	slashAttack=VALUES(slashAttack),
	crushAttack=VALUES(crushAttack),
	magicAttack=VALUES(magicAttack),
	rangeAttack=VALUES(rangeAttack),
	stabDefence=VALUES(stabDefence),
	slashDefence=VALUES(slashDefence),
	crushDefence=VALUES(crushDefence),
	magicDefence=VALUES(magicDefence),
	rangeDefence=VALUES(rangeDefence),
	meleeStrength=VALUES(meleeStrength),
	rangeStrength=VALUES(rangeStrength),
	magicStrength=VALUES(magicStrength),
	prayer=VALUES(prayer),
	itemSlot=VALUES(itemSlot),
	requirementAttack=VALUES(requirementAttack),
	requirementStrength=VALUES(requirementStrength),
	requirementHitPoints=VALUES(requirementHitPoints),
	requirementRanged=VALUES(requirementRanged),
	requirementMagic=VALUES(requirementMagic),
	requirementDefence=VALUES(requirementDefence),
	requirementPrayer=VALUES(requirementPrayer);
	");
	if(false===$stmt2)
	{
		die('prepare() failed '.htmlspecialchars($conn->error));
	}

	$stmt3=$conn->prepare("INSERT INTO weapons VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
	ON DUPLICATE KEY UPDATE
	name=VALUES(name),
	attackSpeed=VALUES(attackSpeed),
	weaponType=VALUES(weaponType),
	combatStyle1=VALUES(combatStyle1),
	attackType1=VALUES(attackType1),
	attackStyle1=VALUES(attackStyle1),
	experience1=VALUES(experience1),
	boosts1=VALUES(boosts1),
	combatStyle2=VALUES(combatStyle2),
	attackType2=VALUES(attackType2),
	attackStyle2=VALUES(attackStyle2),
	experience2=VALUES(experience2),
	boosts2=VALUES(boosts2),
	combatStyle3=VALUES(combatStyle3),
	attackType3=VALUES(attackType3),
	attackStyle3=VALUES(attackStyle3),
	experience3=VALUES(experience3),
	boosts3=VALUES(boosts3),
	combatStyle4=VALUES(combatStyle4),
	attackType4=VALUES(attackType4),
	attackStyle4=VALUES(attackStyle4),
	experience4=VALUES(experience4),
	boosts4=VALUES(boosts4),
	combatStyle5=VALUES(combatStyle5),
	attackType5=VALUES(attackType5),
	attackStyle5=VALUES(attackStyle5),
	experience5=VALUES(experience5),
	boosts5=VALUES(boosts5)
	");
	if(false===$stmt3)
	{
		die('prepare() failed '.htmlspecialchars($conn->error));
	}

foreach($array as $item){
	$item['icon']=(base64_decode($item['icon']));

	$rc = $stmt->bind_param('isiiiiiiiiiiiiiiiidiisissss',$item['id'],$item['name'],$item['members'],$item['tradeable'],$item['tradeable_on_ge'],$item['stackable'],$item['noted'],$item['noteable'],$item['linked_id_item'],$item['linked_id_noted'],$item['linked_id_placeholder'],$item['placeholder'],$item['equipable'],$item['equipable_by_player'],$item['equipable_weapon'],$item['cost'],$item['lowalch'],$item['highalch'],$item['weight'],$item['buy_limit'],$item['quest_item'],$item['release_date'],$item['duplicate'],$item['examine'],$item['icon'],$item['wiki_name'],$item['wiki_url']);
	if(false===$rc)
	{
		die('bind_param() failed '.htmlspecialchars($stmt->error));
	}

	if($stmt->execute()){
	//Worked
	} 
	else {
		die('insert() failed '.htmlspecialchars($stmt->error));
	}
	if($item['equipable']==true){
		if($item['name']=='Soul cape'){
			var_dump($item);
		}
		//need to check requirements if they exist before insertion
		if(!($item['equipment']['requirements']===NULL)){
			$requirementAttack=checkIfExists('attack',$item['equipment']['requirements']);	
			$requirementStrength=checkIfExists('strength',$item['equipment']['requirements']);	
			$requirementHitPoints=checkIfExists('hitpoints',$item['equipment']['requirements']);	
			$requirementRanged=checkIfExists('ranged',$item['equipment']['requirements']);	
			$requirementMagic=checkIfExists('magic',$item['equipment']['requirements']);	
			$requirementDefence=checkIfExists('defence',$item['equipment']['requirements']);
			$requirementPrayer=checkIfExists('prayer',$item['equipment']['requirements']);	
		}
		else{
			$requirementAttack=NULL;	
			$requirementStrength=NULL;	
			$requirementHitPoints=NULL;	
			$requirementRanged=NULL;	
			$requirementMagic=NULL;	
			$requirementDefence=NULL;
			$requirementPrayer=NULL;	
		}
		
		$rc2 = $stmt2->bind_param('isiiiiiiiiiiiiiisiiiiiii',$item['id'],$item['name'],$item['equipment']['attack_stab'],$item['equipment']['attack_slash'],$item['equipment']['attack_crush'],$item['equipment']['attack_magic'],$item['equipment']['attack_ranged'],$item['equipment']['defence_stab'],$item['equipment']['defence_slash'],$item['equipment']['defence_crush'],$item['equipment']['defence_magic'],$item['equipment']['defence_ranged'],$item['equipment']['melee_strength'],$item['equipment']['ranged_strength'],$item['equipment']['magic_damage'],$item['equipment']['prayer'],$item['equipment']['slot'],$requirementAttack,$requirementStrength,$requirementHitPoints,$requirementRanged,$requirementMagic,$requirementDefence,$requirementPrayer);
		
		if(false===$rc2)
		{
			die('bind_param() failed '.htmlspecialchars($stmt2->error));
		}

		if($stmt2->execute()){
		//Worked
		} 
		else {
			die('insert() failed '.htmlspecialchars($stmt2->error));
		}

		
		
		if($item['equipable_weapon']==true){//Insert for a weapon
		//Need to check stances if they exist for insertion
		
		if(!(is_null($item['weapon']['stances']))){
			if(checkIfExists('4',$item['weapon']['stances'])===NULL){
				$item['weapon']['stances']['4']['combat_style']=NULL;
				$item['weapon']['stances']['4']['attack_type']=NULL;
				$item['weapon']['stances']['4']['attack_style']=NULL;
				$item['weapon']['stances']['4']['experience']=NULL;
				$item['weapon']['stances']['4']['boosts']=NULL;
				if(checkIfExists('3',$item['weapon']['stances'])===NULL){
					$item['weapon']['stances']['3']['combat_style']=NULL;
					$item['weapon']['stances']['3']['attack_type']=NULL;
					$item['weapon']['stances']['3']['attack_style']=NULL;
					$item['weapon']['stances']['3']['experience']=NULL;
					$item['weapon']['stances']['3']['boosts']=NULL;
					if(checkIfExists('2',$item['weapon']['stances'])===NULL){
						$item['weapon']['stances']['2']['combat_style']=NULL;
						$item['weapon']['stances']['2']['attack_type']=NULL;
						$item['weapon']['stances']['2']['attack_style']=NULL;
						$item['weapon']['stances']['2']['experience']=NULL;
						$item['weapon']['stances']['2']['boosts']=NULL;
						if(checkIfExists('1',$item['weapon']['stances'])===NULL){
							$item['weapon']['stances']['1']['combat_style']=NULL;
							$item['weapon']['stances']['1']['attack_type']=NULL;
							$item['weapon']['stances']['1']['attack_style']=NULL;
							$item['weapon']['stances']['1']['experience']=NULL;
							$item['weapon']['stances']['1']['boosts']=NULL;
							if(checkIfExists('0',$item['weapon']['stances'])===NULL){
								$item['weapon']['stances']['0']['combat_style']=NULL;
								$item['weapon']['stances']['0']['attack_type']=NULL;
								$item['weapon']['stances']['0']['attack_style']=NULL;
								$item['weapon']['stances']['0']['experience']=NULL;
								$item['weapon']['stances']['0']['boosts']=NULL;
							}	
						}	
					}				
				}
			}
		}
		else{
				$item['weapon']['stances']['4']['combat_style']=NULL;
				$item['weapon']['stances']['4']['attack_type']=NULL;
				$item['weapon']['stances']['4']['attack_style']=NULL;
				$item['weapon']['stances']['4']['experience']=NULL;
				$item['weapon']['stances']['4']['boosts']=NULL;
					$item['weapon']['stances']['3']['combat_style']=NULL;
					$item['weapon']['stances']['3']['attack_type']=NULL;
					$item['weapon']['stances']['3']['attack_style']=NULL;
					$item['weapon']['stances']['3']['experience']=NULL;
					$item['weapon']['stances']['3']['boosts']=NULL;
						$item['weapon']['stances']['2']['combat_style']=NULL;
						$item['weapon']['stances']['2']['attack_type']=NULL;
						$item['weapon']['stances']['2']['attack_style']=NULL;
						$item['weapon']['stances']['2']['experience']=NULL;
						$item['weapon']['stances']['2']['boosts']=NULL;
							$item['weapon']['stances']['1']['combat_style']=NULL;
							$item['weapon']['stances']['1']['attack_type']=NULL;
							$item['weapon']['stances']['1']['attack_style']=NULL;
							$item['weapon']['stances']['1']['experience']=NULL;
							$item['weapon']['stances']['1']['boosts']=NULL;
								$item['weapon']['stances']['0']['combat_style']=NULL;
								$item['weapon']['stances']['0']['attack_type']=NULL;
								$item['weapon']['stances']['0']['attack_style']=NULL;
								$item['weapon']['stances']['0']['experience']=NULL;
								$item['weapon']['stances']['0']['boosts']=NULL;
		}
			$rc3 = $stmt3->bind_param('isissssssssssssssssssssssssss',
			$item['id'],$item['name'],$item['weapon']['attack_speed'],$item['weapon']['weapon_type'],
			$item['weapon']['stances']['0']['combat_style'],
			$item['weapon']['stances']['0']['attack_type'],
			$item['weapon']['stances']['0']['attack_style'],
			$item['weapon']['stances']['0']['experience'],
			$item['weapon']['stances']['0']['boosts'],
			$item['weapon']['stances']['1']['combat_style'],
			$item['weapon']['stances']['1']['attack_type'],
			$item['weapon']['stances']['1']['attack_style'],
			$item['weapon']['stances']['1']['experience'],
			$item['weapon']['stances']['1']['boosts'],
			$item['weapon']['stances']['2']['combat_style'],
			$item['weapon']['stances']['2']['attack_type'],
			$item['weapon']['stances']['2']['attack_style'],
			$item['weapon']['stances']['2']['experience'],
			$item['weapon']['stances']['2']['boosts'],
			$item['weapon']['stances']['3']['combat_style'],
			$item['weapon']['stances']['3']['attack_type'],
			$item['weapon']['stances']['3']['attack_style'],
			$item['weapon']['stances']['3']['experience'],
			$item['weapon']['stances']['3']['boosts'],
			$item['weapon']['stances']['4']['combat_style'],
			$item['weapon']['stances']['4']['attack_type'],
			$item['weapon']['stances']['4']['attack_style'],
			$item['weapon']['stances']['4']['experience'],
			$item['weapon']['stances']['4']['boosts']);
			if(false===$rc3)
			{
				die('bind_param() failed '.htmlspecialchars($stmt3->error));
			}

			if($stmt3->execute()){
			//Worked
			} 
			else {
				die('insert() failed '.htmlspecialchars($stmt3->error));
			}
		}
	}
}
mysqli_close($conn);

?>

