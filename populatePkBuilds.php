<?php
include('connect.inc');
$conn=connectToDb();
//PK BUILD INSERT STATEMENTS//

/*Template//
=array('','images/item_icons/','','','','','','','',
'A build that<br><br>
For details on:  
<img src="images/untradeable_icons/.png">, 
<br>See <a href="equipsPage.php">Useful Untradeable Equips</a> page.');
///////////*/
$pkBuildsArray = [];

$zerker=array('Berserker Pure','images/item_icons/berserker_helm.png','70-99','60/75','70-99','45','99','43/52/55','94-99',
'A build that emphasizes on questing your defence in order to complete <i>Recipe for Disaster</i> and earn </i>Barrows gloves</i> at a low level (NOTE: if you do not quest your defence you will not be able to maintain a low defence and receive barrows gloves).It is important to get 94 magic for use of vengeance (with completion of Lunar Diplomacy).<br><br>
The two main builds are 60 attack which maxes at 94 combat, and 75 attack which maxes at 99 combat. 60 attack allows use of dragon weaponry mainly <i>Dragon Scimitar</i> and <i>Dragon claws/Dragon Dagger</i> for special attack. While 75 attack allows use of <i>Ghrazi rapier</i> and the powerful special attack of the <i>Armadyl Godsword</i>.<br><br>
For details on:  
<img src="images/untradeable_icons/Barrows_gloves.png">Barrows gloves, 
<img src="images/untradeable_icons/Barrelchest_anchor.png">Barrelchest anchor, 
<img src="images/untradeable_icons/Fighter_hat.png">Fighter hat, 
<img src="images/untradeable_icons/Fighter_torso.png">Fighter torso, 
<img src="images/untradeable_icons/Void_knight_top.png">Void knight equipment, 
<img src="images/untradeable_icons/Void_ranger_helm.png">Void knight helmets, 
<img src="images/untradeable_icons/Fire_cape_animated.gif">Fire cape, 
<img src="images/untradeable_icons/Infernal_cape_animated.gif">Infernal cape, 
<img src="images/untradeable_icons/Avas_accumulator.png">Ava\'s accumulator, 
<img src="images/untradeable_icons/Avas_assembler.png">Ava\'s assembler, 
<img src="images/untradeable_icons/Rune_defender.png">Rune defender,
<img src="images/untradeable_icons/Book_of_law.png">Book of law
<img src="images/untradeable_icons/Berserker_ring_(i).png">Berserker ring (i).
<br>See <a href="equipsPage.php">Useful Untradeable Equips</a> page.');

$void=array('Void Pure','images/untradeable_icons/Void_ranger_helm.png','70-99','NA','NA','42','99','43/52','94-99',
'A build that emphasizes on questing your defence in order to complete Recipe for Disaster and earn </i>Barrows gloves</i> at a low level (NOTE: if you do not quest your defence you will not be able to maintain a low defence and receive barrows gloves). This build focuses on using ranged in combat and keeps defence at level 42 to allow for use of the "Range Void Knight Equipment" which provides a set bonus.<br><br>
The Void Pure uses a variety of ranged weapons in pvp combat including: <i>Dark bow</i>, <i>Rune knives</i>, <i>Heavy ballista</i>, <i>Dragon thrownaxe</i>. It is important to get 94 magic for use of <i>Vengeance</i> (with completion of <i>Lunar Diplomacy</i>).<br><br>
For details on:  
<img src="images/untradeable_icons/Barrows_gloves.png">Barrows gloves, 
<img src="images/untradeable_icons/Void_knight_top.png">Void knight equipment, 
<img src="images/untradeable_icons/Void_ranger_helm.png">Void knight helmets,
<img src="images/untradeable_icons/Avas_accumulator.png">Ava\'s accumulator,
<img src="images/untradeable_icons/Avas_assembler.png">Ava\'s assembler, 
<img src="images/untradeable_icons/Book_of_law.png">Book of law,
<img src="images/untradeable_icons/Archers_ring_(i).png">Archer\'s ring (i).
<br>See <a href="equipsPage.php">Useful Untradeable Equips</a> page.');

$rangeTank=array('Range Tank','images/item_icons/veracs_helm.png','80-99','NA','NA','70-99','90-99','74','94-99',
'A build that focuses on range attacks using a high defence level/armour along with rigour with completion of the Knights training ground(requires <i>King\'s Ransom</i>) to out dps opponents. Range tanks keep their melee stats low so that their combat remains range/magic based.
<br><br>The Range Tank uses a variety of ranged weapons in pvp combat including: <i>Dark bow</i>, <i>Rune knives</i>, <i>Heavy ballista</i>, <i>Dragon thrownaxe</i>. It is important to get 94 magic for use of <i>Vengeance</i> (with completion of <i>Lunar Diplomacy</i>). A range tank can also complete the Kandarin hard diary in order to receive a 10% increase on the trigger rate of enchanted bolts for crossbow attacks.<br><br>
For details on:  
<img src="images/untradeable_icons/Barrows_gloves.png">Barrows gloves, 
<img src="images/untradeable_icons/Avas_accumulator.png">Ava\'s accumulator,
<img src="images/untradeable_icons/Avas_assembler.png">Ava\'s assembler, 
<img src="images/untradeable_icons/Archers_ring_(i).png">Archer\'s ring (i),
<img src="images/untradeable_icons/Book_of_law.png">Book of law,
<img src="images/untradeable_icons/Crystal_shield.png">Crystal shield.
<br>See <a href="equipsPage.php">Useful Untradeable Equips</a> page.');

$piety=array('Piety Pure','images/item_icons/helm_of_neitiznot.png','75-99','60/75','80-99','70/75','NA','70','94-99',
'A build that focuses on using the prayer <i>Piety</i> with completion of the Knights training ground(requires <i>King\'s Ransom</i>) and melee attacks to maximize damage on an opponent. It is important to get 94 magic for use of <i>Vengeance</i>(with completion of <i>Lunar Diplomacy</i>).<br><br>
For 70 defence 60 attack which maxes at 102 combat/75 attack which maxes at 107 combat. While for 75 defence 60 attack which maxes at 103 combat/75 attack which maxes at 108 combat. 60 attack allows use of dragon weaponry mainly <i>Dragon Scimitar</i> and <i>Dragon claws/Dragon Dagger</i> for a special attack. While 75 attack allows use of <i>Ghrazi rapier</i> and the powerful special attack of the <i>Armadyl Godsword</i>.<br><br>
For details on:  
<img src="images/untradeable_icons/Barrows_gloves.png">Barrows gloves, 
<img src="images/untradeable_icons/Fighter_torso.png">Fighter torso,
<img src="images/untradeable_icons/Fire_cape_animated.gif">Fire cape, 
<img src="images/untradeable_icons/Infernal_cape_animated.gif">Infernal cape,
<img src="images/untradeable_icons/Dragon_defender.png">Dragon defender,
<img src="images/untradeable_icons/Avernic_defender.png">Avernic defender,
<img src="images/untradeable_icons/Berserker_ring_(i).png">Berserker ring (i).
<br>See <a href="equipsPage.php">Useful Untradeable Equips</a> page.');



$pure=array('1 Defence Pure','images/untradeable_icons/Zamorak_halo.png','50-99','50/60/75','50-99','1','60-99','13/25/43/52','58-99',
'A build that keeps defence as low as possible to make the combat of the account low while stillhaving strong combat levels. Health varies by user preference, ranged/magic can be trained without hitpoints through the use of a cannon and splashing/non combat magic spells. Attack level varies depending on what melee weapon the pure would like to use 50 attack allows for use of <i>granite hammer/granite maul</i>, 60 allows for dragon weaponry, while 75 offers <i>Ghrazi rapier and Armadyl godsword</i>. Strength also varies by preference high strength leads to bigger hits, but raises your combat bracket. Prayer varies depending on whether you want <i>Protect Item</i>, Overheads protection, or <i>Smite</i>. Magic varies also, 58 allows for <i>Ice Rush</i>, 60 for godspells(max hit 20), 78 for <i>Ice Blitz</i>, 80 for <i>Charge</i> to increase Godspells max hit to 30, and finally 94 for the strongest ice spell <i>Ice Barrage</i>.<br><br>
For details on:  
<img src="images/untradeable_icons/Saradomin_halo.png"><img src="images/untradeable_icons/Zamorak_halo.png"><img src="images/untradeable_icons/Guthix_halo.png">God halos, 
<img src="images/untradeable_icons/Decorative_range_top.png">Decorative range gear,
<img src="images/untradeable_icons/Decorative_magic_robe_top.png">Decorative mage gear,
<img src="images/untradeable_icons/Saradomin_cape.png"><img src="images/untradeable_icons/Zamorak_cape.png"><img src="images/untradeable_icons/Guthix_cape.png">God capes,
<img src="images/untradeable_icons/Imbued_saradomin_cape.png"><img src="images/untradeable_icons/Imbued_zamorak_cape.png"><img src="images/untradeable_icons/Imbued_guthix_cape.png">Imbued god capes,
<img src="images/untradeable_icons/Avas_accumulator.png">Ava\'s accumulator,
<img src="images/untradeable_icons/Fire_cape_animated.gif">Fire cape, 
<img src="images/untradeable_icons/Infernal_cape_animated.gif">Infernal cape,
<img src="images/untradeable_icons/Unholy_book.png">Unholy book,
<img src="images/untradeable_icons/Berserker_ring_(i).png">Berserker ring (i).
<br>See <a href="equipsPage.php">Useful Untradeable Equips</a> page.');

$obby=array('Obby Mauler','images/item_icons/obby_maul.png','30-99','1','60-99','1','40/50/60/70','13/25/43','N/A',
'A build that focuses on keeping its attack and defence levels at one while completely focusing on strength due to the requirements of the <i>Obsidian maul (Tzhaar-ket-om)</i> which requires only 60 strength to wield. Obby maulers use this weapon primarily as a finisher while they use other weapons without attack requirements that have higher dps to get their enemies to a low hp. These weapons include the <i>Bone dagger (p++)</i> which can be used to apply poison to a target, the <i>Slayer staff</i> which only requires 55 slayer, the <i>Red topaz machete</i>, and even the <i>Darklight</i>. This type of account can achieve a firecape without protection through the use of tick eating; however this is exceptionally difficult to do.<br><br>
For details on:  
<img src="images/untradeable_icons/Saradomin_halo.png"><img src="images/untradeable_icons/Zamorak_halo.png"><img src="images/untradeable_icons/Guthix_halo.png">God halos, 
<img src="images/untradeable_icons/Decorative_range_top.png">Decorative range gear,
<img src="images/untradeable_icons/Decorative_magic_robe_top.png">Decorative mage gear,
<img src="images/untradeable_icons/Saradomin_cape.png"><img src="images/untradeable_icons/Zamorak_cape.png"><img src="images/untradeable_icons/Guthix_cape.png">God capes,
<img src="images/untradeable_icons/Imbued_saradomin_cape.png"><img src="images/untradeable_icons/Imbued_zamorak_cape.png"><img src="images/untradeable_icons/Imbued_guthix_cape.png">Imbued god capes,
<img src="images/untradeable_icons/Avas_accumulator.png">Ava\'s accumulator,
<img src="images/untradeable_icons/Fire_cape_animated.gif">Fire cape, 
<img src="images/untradeable_icons/Unholy_book.png">Unholy book,
<img src="images/untradeable_icons/Berserker_ring_(i).png">Berserker ring (i).
<br>See <a href="equipsPage.php">Useful Untradeable Equips</a> page.');

array_push($pkBuildsArray,$zerker);
array_push($pkBuildsArray,$void);
array_push($pkBuildsArray,$rangeTank);
array_push($pkBuildsArray,$piety);
array_push($pkBuildsArray,$pure);
array_push($pkBuildsArray,$obby);

foreach($pkBuildsArray as $build){
//var_dump($build);
$conn=connectToDb();
$stmt=$conn->prepare("INSERT INTO pkBuilds (buildName,buildIcon,health,attack,strength,defence,ranged,prayer,mage,notes) VALUES(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param('ssssssssss',$build[0],$build[1],$build[2],$build[3],$build[4],$build[5],$build[6],$build[7],$build[8],$build[9]);
$stmt->execute();
}
?>
