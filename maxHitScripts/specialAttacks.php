<?php
	$specialAttack=array();

	//Dragon Weapons//
	$spec=array("specialName"=>"Puncture","energyCost"=>"25","description"=>"Two quick slashes with 25% increased accuracy and 15% increased damage","damageIncrease"=>"1.15");
	$specialAttack['Dragon dagger']=$spec;

	$spec=array("specialName"=>"Sever","energyCost"=>"55","description"=>"A slash with increased accuracy that, if successful, prevents the target from using protection prayers for five seconds.","damageIncrease"=>"1.00");
	$specialAttack['Dragon scimitar']=$spec;

	$spec=array("specialName"=>"Cleave","energyCost"=>"25","description"=>"A powerful attack that deals 15% more damage. ","damageIncrease"=>"1.15");
	$specialAttack['Dragon longsword']=$spec;

	$spec=array("specialName"=>"Shatter","energyCost"=>"25","description"=>"Increases damage by 50% and accuracy by 25% for one hit. ","damageIncrease"=>"1.50");
	$specialAttack['Dragon mace']=$spec;

	$spec=array("specialName"=>"Smash","energyCost"=>"50","description"=>"An attack that deals 50% additional damage and will lower the target's current Defence level by 30% on a hit other than 0 (stackable; relative to current level). ","damageIncrease"=>"1.50");
	$specialAttack['Dragon warhammer']=$spec;

	$spec=array("specialName"=>"Sweep","energyCost"=>"30","description"=>"Swipe all targets in front of you for 10% extra damage. For large monsters that occupy two or more spaces, like giants, the halberd will hit twice, although the second hit will have 25% decreased accuracy. 	Sweep.gif","damageIncrease"=>"1.10");
	$specialAttack['Dragon halberd']=$spec;

	$spec=array("specialName"=>"Shove","energyCost"=>"25","description"=>"Push your opponent back and stun them for three seconds. This attack deals no damage and doesn't work on creatures that occupy two or more spaces. ","damageIncrease"=>"0.00");
	$specialAttack['Dragon spear']=$spec;

	$spec=array("specialName"=>"Powerstab","energyCost"=>"60","description"=>"Hit up to 14 enemies surrounding you.","damageIncrease"=>"1.00");
	$specialAttack['Dragon 2h sword']=$spec;

	$spec=array("specialName"=>"Slice and Dice","energyCost"=>"50","description"=>"Hits 4 times in quick succession with great accuracy.","damageIncrease"=>"1.00");
	$specialAttack['Dragon claws']=$spec;

	$spec=array("specialName"=>"Wild Stab","energyCost"=>"40","description"=>"Hits the target with 25% increased accuracy and damage. If the target is using Protect from Melee, the special attack will ignore the prayer for one attack.","damageIncrease"=>"1.25");
	$specialAttack['Dragon sword']=$spec;

	$spec=array("specialName"=>"Unleash","energyCost"=>"100","description"=>"The next attack used after activation will have a 5% boost in accuracy and a 2.5% boost in damage for every 5% of special attack energy used. For example, a player with 100% special attack energy who performs the special attack will cause their next attack to have 100% increased accuracy and a damage boost of 50%","damageIncrease"=>"1.50");
	$specialAttack['Dragon hasta']=$spec;

	//Godswords//
	$spec=array("specialName"=>"The Judgment","energyCost"=>"50","description"=>"Inflicts 37.5% more damage and doubles the accuracy.","damageIncrease"=>"1.375");
	$specialAttack['Armadyl godsword']=$spec;

	$spec=array("specialName"=>"Warstrike","energyCost"=>"50","description"=>"Attack does 21% more damage, doubles the accuracy, and drains one of the target's Combat stats by the amount of damage dealt, until it reaches 0. If the stat drained reaches 0 before all of the damage could be accounted for, another stat will be drained by the amount remaining. Stats are drained in the following order: Defence, Strength, Prayer, Attack, Magic, Ranged.","damageIncrease"=>"1.21");
	$specialAttack['Bandos godsword']=$spec;

	$spec=array("specialName"=>"Healing Blade","energyCost"=>"50","description"=>"Increases damage dealt by 10% and doubles the accuracy. Attack restores the user's Hitpoints by 50% of the damage dealt (with a minimum of 10 Hitpoints) and Prayer by 25% of damage dealt (with a minimum of 5 Prayer points). The attack has no effect if it misses completely but will always take effect if the attack hits anything.","damageIncrease"=>"1.10");
	$specialAttack['Saradomin godsword']=$spec;

	$spec=array("specialName"=>"Ice Cleave","energyCost"=>"50","description"=>"Increases damage dealt by 10% and doubles the accuracy. If the special attack hits successfully, it freezes the target for 20 seconds.","damageIncrease"=>"1.10");
	$specialAttack['Zamorak godsword']=$spec;

	//Other Weapons//
	$spec=array("specialName"=>"Penance","energyCost"=>"50","description"=>"","damageIncrease"=>"1.00");
	$specialAttack['Abyssal bludgeon']=$spec;//Needs special case

	$spec=array("specialName"=>"Abyssal Puncture","energyCost"=>"50","description"=>"A double attack that deals 15% less damage with 25% more accuracy. If the first attack hits, so will the second attack. Otherwise, both attacks will miss. ","damageIncrease"=>"1.15");
	$specialAttack['Abyssal dagger']=$spec;//Needs special case

	$spec=array("specialName"=>"Binding Tentacle","energyCost"=>"50","description"=>"Binds an opponent for 5 seconds and increases opponent's chance of being poisoned.","damageIncrease"=>"1.00");
	$specialAttack['Abyssal tentacle']=$spec;

	$spec=array("specialName"=>"Energy Drain","energyCost"=>"50","description"=>"An attack that has 25% additional accuracy and, when used against another player, transfers 10% of the target's run energy to the user.","damageIncrease"=>"1.00");
	$specialAttack['Abyssal whip']=$spec;

	$spec=array("specialName"=>"Favor of the War God","energyCost"=>"100","description"=>"An attack that hits through Protect from Melee and drains the Prayer points of the opponent by 100% of the amount hit and recharges the user's prayer points by the same amount. This can raise your current Prayer points to above your maximum Prayer level, up to the amount of damage inflicted by the attack. The special attack will restore prayer even if used against a target that has immunity to conventional weaponry such as Turoths and Kurasks. ","damageIncrease"=>"1.00");
	$specialAttack['Ancient mace']=$spec;

	$spec=array("specialName"=>"Sunder","energyCost"=>"50","description"=>"An attack that doubles accuracy, increases max hit by 10%, and lowers the opponent's Attack, Defence, Ranged, or Magic level by 10% of the damage inflicted. ","damageIncrease"=>"1.10");
	$specialAttack['Barrelchest anchor']=$spec;

	$spec=array("specialName"=>"Backstab","energyCost"=>"75","description"=>"Lowers the Defence of the target equal to the amount of damage dealt. Has a guaranteed hit if you weren't the last one to attack the target.","damageIncrease"=>"1.00");
	$specialAttack['Bone dagger']=$spec;

	$spec=array("specialName"=>"Liquefy","energyCost"=>"75","description"=>"Doubles the chance of hitting, and adds 25% of the damage dealt to the user's Strength, Attack and Defence levels. Can only be used underwater.","damageIncrease"=>"1.00");
	$specialAttack['Brine sabre']=$spec;

	$spec=array("specialName"=>"Sweep","energyCost"=>"30","description"=>"Swipe all targets in front of you for 10% extra damage. For large monsters that occupy two or more spaces, like giants, the halberd will hit twice, although the second hit will have 25% decreased accuracy.","damageIncrease"=>"1.10");
	$specialAttack['Crystal halberd']=$spec;

	$spec=array("specialName"=>"Weaken","energyCost"=>"50","description"=>"Temporarily reduces the target's Attack, Strength, and Defence by 5%. Twice as effective on demons (reduces each stat by 10%).","damageIncrease"=>"1.00");
	$specialAttack['Darklight']=$spec;
	$specialAttack['Arclight']=$spec;

	$spec=array("specialName"=>"Hammer Blow","energyCost"=>"60","description"=>"An attack with 50% increased accuracy. Adds 5 damage to the attack; this extra 5 damage applies even if the player was supposed to deal zero damage.","damageIncrease"=>"1.00");
	$specialAttack['Granite hammer']=$spec;//Needs special case add 5

	$spec=array("specialName"=>"Quick Smash","energyCost"=>"60","description"=>"An extra attack done instantly with no other effects.","damageIncrease"=>"1.00");
	$specialAttack['Granite maul']=$spec;

	$spec=array("specialName"=>"Impale","energyCost"=>"25","description"=>"Attack with 10% more Attack and Strength, but with a slower speed. ","damageIncrease"=>"1.10");
	$specialAttack['Rune claws']=$spec;

	$spec=array("specialName"=>"Saradomin's Lightning","energyCost"=>"100","description"=>"Call upon Saradomin's power to inflict 1-16 extra Magic damage upon your opponent. Increases the melee hit by 10%. The special attack rolls against the opponent's magic defence bonus using your slash attack bonus making this special attack extremely accurate on melee armour.","damageIncrease"=>"1.10");
	$specialAttack['Saradomin sword']=$spec;

	$spec=array("specialName"=>"Saradomin's Lightning","energyCost"=>"65","description"=>"Magic-based attack that increases the user's max hit by 25%. The special attack rolls against the opponent's magic defence bonus using your slash attack bonus making this special attack extremely accurate on melee armour.","damageIncrease"=>"1.25");
	$specialAttack["Saradomin's blessed sword"]=$spec;

	//PVP Weapons//
	$spec=array("specialName"=>"Smash","energyCost"=>"35","description"=>"An attack that deals anywhere between 25% and 125% of the user's standard max hit and lowers the target's current Defence level by 30% on a hit other than 0 (stackable; relative to current level).","damageIncrease"=>"1.25");
	$specialAttack["Statius's warhammer"]=$spec;

	$spec=array("specialName"=>"Feint","energyCost"=>"25","description"=>"An attack that deals anywhere between 20% and 120% of the user's standard max hit; the accuracy of this special attack is rolled against 25% of the opponent's defence.","damageIncrease"=>"1.20");
	$specialAttack["Vesta's longsword"]=$spec;

	$spec=array("specialName"=>"Spear Wall","energyCost"=>"50","description"=>"An attack that damages up to 16 targets within 8 tiles surrounding the player. Outside of multicombat zones, only one target is damaged. In addition, the user becomes immune to melee attacks for 8 ticks (4.8 seconds).","damageIncrease"=>"1.00");
	$specialAttack["Vesta's spear"]=$spec;

if (isset($_POST['weapon'], $_POST['maxHit'])){

	$weapon = $_POST['weapon'];
	$maxHit = $_POST['maxHit'];
	$prayerMissing = $_POST['prayerMissing'];
	$specName = $specialAttack[$weapon]["specialName"];
	$enemyType = strtolower($_POST['enemyType']);
z
	if(array_key_exists($weapon,$specialAttack)){

		if($weapon=='Abyssal bludgeon'){//Special cases
			if((!(is_numeric($prayerMissing))) || ($prayerMissing < 0) || ($prayerMissing=='')){
				$prayerMissing=0;
			}		
			if($prayerMissing > 99){
				$prayerMissing=99;
			}
			echo 'Missing <div class="text-danger d-inline">'.$prayerMissing.'</div> prayer points.</br>';
			$maxHit=floor($maxHit*(1.00+(0.005*$prayerMissing)));
			displayHit($maxHit,$specName,$weapon);
		}
		elseif(($weapon=='Dragon dagger')||($weapon=='Dragon claws')||($weapon==='Dragon halberd')||($weapon==='Crystal halberd')){
			$maxHit=floor($maxHit*$specialAttack[$weapon]["damageIncrease"]);
			displayHit($maxHit,$specName,$weapon);

		}
		elseif($weapon=='Granite hammer'){
			$maxHit=floor($maxHit+5.00);
			displayHit($maxHit,$specName,$weapon);
		}
		else{
			$maxHit=floor($maxHit*$specialAttack[$weapon]["damageIncrease"]);
			displayHit($maxHit,$specName,$weapon);
		}

	}
	else{
		echo 'This weapon has no special attack';
	}
	
}

function displayHit($maxHit,$specName,$weapon){
	echo '<h3 id="currentSpec" class="d-inline">'.$specName.':</h3>';

	if(($weapon==='Dragon dagger')||($weapon==='Dragon halberd')||($weapon==='Crystal halberd')){
		echo' <img class="icon" src="images/Red_hitsplat.png">';
		if($maxHit<'10'){	
			echo '<div class="d-inline maxHitText1Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			echo' <img class="icon" src="images/Red_hitsplat.png">';
			echo '<div class="d-inline maxHitText1Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
		}
		else{
			echo '<div class="d-inline maxHitText2Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			echo' <img class="icon" src="images/Red_hitsplat.png">';
			echo '<div class="d-inline maxHitText2Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
		}
	}
	elseif($weapon==='Dragon claws'){
	echo'</br>';
			if($maxHit<10){
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText1Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
			else{
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText2Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
			$maxHit=floor($maxHit/2);
			if($maxHit<10){
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText1Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
			else{
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText2Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
			$maxHit=floor($maxHit/2);
			if($maxHit<10){
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText1Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
			else{
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText2Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
			$maxHit=$maxHit+1;
			if($maxHit<9){
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText1Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
			else{
				echo' <img class="icon" src="images/Red_hitsplat.png">';
				echo '<div class="d-inline maxHitText2Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
			}
	}
	else{
		echo' <img class="icon" src="images/Red_hitsplat.png">';
		if($maxHit<='10'){
			echo '<div class="d-inline maxHitText1Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
		}
		else{
			echo '<div class="d-inline maxHitText2Digit text-light ml-1" id="currentMaxHitSpec">'.$maxHit.'</div>';
		}
	}

}


?>
