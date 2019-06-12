<?php
function getArray($arrayName){
//Beginner
if($arrayName == "skillBeginner"){
    $task1 =array("task"=>"I need to cook Charlie a trout.","skill"=>"Cooking:15");
    $task2 =array("task"=>"I need to cook Charlie a pike.","skill"=>"Cooking:20");
    $task3 =array("task"=>"I need to fish Charlie a herring.","skill"=>"Fishing:10");
	$task4 =array("task"=>"I need to fish Charlie a trout.","skill"=>"Fishing:20");
	$task5 =array("task"=>"I need to mine Charlie a piece of iron ore from an iron vein.","skill"=>"Mining:15");
    $task6 =array("task"=>"I need to smith Charlie one iron dagger.","skill"=>"Smithing:15");
    $task7 =array("task"=>"I need to craft Charlie a leather body.","skill"=>"Crafting:14");
	$task8 =array("task"=>"I need to craft Charlie some leather chaps.","skill"=>"Crafting:18");
    $nested = [];
    for($i=1;$i<9;$i++){
        array_push($nested,${"task$i"});
    }
    return $nested;
}
//Easy
if($arrayName == "skillEasy"){
    $task1 =array("task"=>"Required to wield mithril pickaxe.","skill"=>"Attack:20");
    $task2 =array("task"=>"Required to wear studded body.","skill"=>"Defence:20");
    $task3 =array("task"=>"Required to wear coif, studded body and chaps.","skill"=>"Ranged:20");
    $nested = [];
    for($i=1;$i<4;$i++){
        array_push($nested,${"task$i"});
    }
    return $nested;
}
//Medium
if($arrayName == "skillMedium"){
    $task1 =array("task"=>"Required to wield adamant weaponry.","skill"=>"Attack:30");
    $task2 =array("task"=>"Required to wield adamant halberd.","skill"=>"Strength:15");
    $task3 =array("task"=>"Required to wear green or blue d'hide body.","skill"=>"Defence:40");
	$task4 =array("task"=>"Required to wear blue dragonhide armour.","skill"=>"Ranged:50");
	$task5 =array("task"=>"Required to wear Mystic robes.","skill"=>"Magic:40,Magic:66,(If ironman)");
    $task6 =array("task"=>"Required to enter the Barbarian Agility Arena.","skill"=>"Agility:35");
    $task7 =array("task"=>"Required to enter the Farming guild.","skill"=>"Farming:45");
    $nested = [];
    for($i=1;$i<8;$i++){
        array_push($nested,${"task$i"});
    }
    return $nested;
}
//Hard
if($arrayName == "skillHard"){
    $task1 =array("task"=>"Required to wield stoles and croziers.","skill"=>"Prayer:60");
    $task2 =array("task"=>"Required to wear blue dragonhide armour.","skill"=>"Ranged:50");
    $task3 =array("task"=>"Required to wear the mystic hat and wield the mystic fire staff.","skill"=>"Magic:40");
	$task4 =array("task"=>"Required to wield various rune weapons and the mystic fire staff.","skill"=>"Attack:40");
	$task5 =array("task"=>"Required to wield rune halberd.","skill"=>"Strength:20");
    $task6 =array("task"=>"Required to wield rune equipment and blue dragonhide body.","skill"=>"Defence:40");
    $task7 =array("task"=>"Required to access the Fishing Guild (can be boosted from 63 with an admiral pie).","skill"=>"Fishing:68");
	$task8 =array("task"=>"Required to get through the dense forest in Tirannwn (can be boosted from 51 with a summer pie).","skill"=>"Agility:56");
    $nested = [];
    for($i=1;$i<9;$i++){
        array_push($nested,${"task$i"});
    }
    return $nested;
}


//All Elite
	if($arrayName == "skillElite"){
		$task1 =array("task"=>"Required to wield a black salamander","skill"=>"Attack:70,Magic:70,Ranged:70");
		$task2 =array("task"=>"Required to equip granite shield.","skill"=>"Strength:50");
		$task3 =array("task"=>"	Required to activate Chivalry.","skill"=>"Defence:65");
		$task4 =array("task"=>"Required to wear black dragonhide armour and black salamander.","skill"=>"Ranged:70");
		$task5 =array("task"=>"Required to activate Chivalry and to equip a stole.","skill"=>"Prayer:60");
		$task6 =array("task"=>"Required to fish a shark for Sherlock.","skill"=>"Fishing:76");
		$task7 =array("task"=>"Required to runecraft double cosmic runes for Sherlock.","skill"=>"Runecraft:59");
		$task8 =array("task"=>"Required to mine lovakite ore to hand in a tier 2 Shayzien armour set for Sherlock.","skill"=>"Mining:65");
		$task9 =array("task"=>"Required to make a super defence potion for Sherlock.","skill"=>"Herblore:66");
		$task10 =array("task"=>"Required to light yew logs for Sherlock.","skill"=>"Firemaking:60");
		$task11 =array("task"=>"Required to cut a yew tree for Sherlock.","skill"=>"Woodcutting:60");
		$task12 =array("task"=>"Required to catch a Mottled eel for Sherlock.","skill"=>"Hunter:68,Fishing:73");
		$task13 =array("task"=>"Required to picklock King Lathas's chest for Sherlock.","skill"=>"Thieving:72");
		$task14 =array("task"=>"Required to craft a green dragonhide body for Sherlock.","skill"=>"Crafting:63");
		$task15 =array("task"=>"Required to smith a mithril 2h sword for Sherlock.","skill"=>"Smithing:64");
		$task16 =array("task"=>"Required to create a yew longbow for Sherlock.","skill"=>"Fletching:70");
		$task17 =array("task"=>"Required to kill a Dust devil for Sherlock.","skill"=>"Slayer:65");
		$task18 =array("task"=>"Required to plant a Watermelon Seed for Sherlock.","skill"=>"Farming:47");
		$task19 =array("task"=>"Required to access the Seers' Village Agility Course.","skill"=>"Agility:60");
		$task20 =array("task"=>"Required to access Warriors' Guild.","skill"=>"Attack/Strength:130,or,Attack:99,or,Strength:99");
		$nested = [];
		for($i=1;$i<21;$i++){
			array_push($nested,${"task$i"});
		}
		return $nested;
	}
//Elite Sherlock
	if($arrayName == "eliteSherlock"){
		$task1 =array("task"=>"Wield a dragon scimitar.", "quest"=>"Monkey Madness I", "skill"=>"Attack:60,(Cannot be boosted)", "item"=>"Dragon scimitar");
		$task2 =array("task"=>"Cast level-5 enchant.", "quest"=>"None", "skill"=>"Magic:68", "item"=>"15 water and earth runes, 1 Cosmic rune, any unenchanted dragonstone jewellery");
		$task3 =array("task"=>"Craft a nature rune.", "quest"=>"None", "skill"=>"Runecraft:44", "item"=>"Nature talisman/nature tiara (not needed if using Abyss), pure essence");
		$task4 =array("task"=>"Catch a mottled eel with aerial fishing in Lake Molch.", "quest"=>"None", "skill"=>"Fishing:73,Hunter:68", "item"=>"Fish chunks or King worms");
		$task5 =array("task"=>"Score a goal in skullball.", "quest"=>"Priest in Peril", "skill"=>"Agility:25", "item"=>"Ring of charos");
		$task6 =array("task"=>"Complete a lap at the Ape Atoll Agility Course", "quest"=>"Started: Monkey madness I", "skill"=>"Agility:48", "item"=>"Ninja monkey greegree");
		$task7 =array("task"=>"Create a super defence potion.", "quest"=>"Druidic Ritual", "skill"=>"Herblore:66", "item"=>"Cadantine potion (unf), White berries");
		$task8 =array("task"=>"Steal from a chest in King Lathas' castle in East Ardougne.", "quest"=>"None", "skill"=>"Thieving:72", "item"=>"None (The chests are on the middle floor, behind a door that needs to be picklocked)");
		$task9 =array("task"=>"Craft a green d'hide body.", "quest"=>"None", "skill"=>"Crafting:63", "item"=>"Needle, Thread, 3 Green dragon leather");
		$task10 =array("task"=>"String a yew longbow.", "quest"=>"None", "skill"=>"Fletching:70", "item"=>"Knife, Yew logs, Bow string");
		$task11 =array("task"=>"Slay a dust devil.", "quest"=>"None", "skill"=>"Slayer:65", "item"=>"A weapon, facemask/slayer helmet");
		$task12 =array("task"=>"Catch a black warlock.", "quest"=>"None", "skill"=>"Hunter:45", "item"=>"Butterfly net, butterfly jar");
        $task13 =array("task"=>"Catch a red chinchompa.", "quest"=>"Eagle's Peak", "skill"=>"Hunter:63", "item"=>"Box trap");
		$task14 =array("task"=>"Mine a piece of mithril ore.", "quest"=>"None", "skill"=>"Mining:55", "item"=>"A pickaxe");
		$task15 =array("task"=>"Smith a mithril 2h sword.", "quest"=>"None", "skill"=>"Smithing:64", "item"=>"Hammer, 3 mithril bars");
		$task16 =array("task"=>"Catch a raw shark.", "quest"=>"None", "skill"=>"Fishing:76", "item"=>"Harpoon (must not be caught barehanded)");
		$task17 =array("task"=>"Chop a yew tree.", "quest"=>"None", "skill"=>"Woodcutting:60", "item"=>"An axe");
		$task18 =array("task"=>"Fix a magical lamp in Dorgesh-Kaan.", "quest"=>"Death to the Dorgeshuun", "skill"=>"Firemaking:52", "item"=>"Light orb");
		$task19 =array("task"=>"Burn a yew log.", "quest"=>"None", "skill"=>"Firemaking:60", "item"=>"Tinderbox, Yew logs");
		$task20 =array("task"=>"Cook a swordfish.", "quest"=>"None", "skill"=>"Cooking:45", "item"=>"Raw swordfish");
		$task21 =array("task"=>"Craft multiple cosmic runes from a single essence.", "quest"=>"Lost City", "skill"=>"Runecraft:59", "item"=>"Cosmic talisman/cosmic tiara (not needed if using Abyss), pure essence");
        $task22 =array("task"=>"Plant a watermelon seed.", "quest"=>"None", "skill"=>"Farming:47", "item"=>"Rake, Seed dibber, 3 watermelon seeds");
        $task23 =array("task"=>"Activate the Chivalry prayer.", "quest"=>"King's Ransom (Camelot training room)", "skill"=>"Prayer:60,(Cannot be boosted),,Defence:65,(Cannot be boosted)", "item"=>"None");
        $task24 =array("task"=>"Hand in a boxed set of Shayzien supply armour at tier 2 or above.", "quest"=>"40% Lovakengj favour", "skill"=>"Smithing:63,Mining:65", "item"=>"Shayzien supply set (2). Hand it to the tier 2 armourer.
        Warning: If you hand in an un-boxed set, the armourer will take the armour but the clue will not be registered as complete. You must put the armour in a Shayzien supply crate first.");
		$nested = [];
		for($i=1;$i<25;$i++){
			array_push($nested,${"task$i"});
		}
		return $nested;
	}
//All master
	if($arrayName == "skillMaster"){
		$task1 =array("task"=>"Required to wield Godswords and Arclight.","skill"=>"Attack:75");
		$task2 =array("task"=>"Required to equip Torag's hammers and Dharok's greataxe (if you will use that as your barrows set).","skill"=>"Strength:70");
		$task3 =array("task"=>"Required to access Warriors' Guild and wield dragon defender.","skill"=>"Attack/Strength:130,or,Attack:99,or,Strength:99");
		$task4 =array("task"=>"Required to wear Barrows armour.","skill"=>"Defence:70");
		$task5 =array("task"=>"Required to complete a lap of the Rellekka Agility Course with full graceful outfit.","skill"=>"Agility:80");
		$task6 =array("task"=>"Required to dissect a sacred eel.","skill"=>"Cooking:72");
		$task7 =array("task"=>"Required to craft a light orb.","skill"=>"Crafting:87");
		$task8 =array("task"=>"Required to plant spirit saplings and to enter the high tier of the Farming Guild.","skill"=>"Farming:85");
		$task9 =array("task"=>"Required to light redwood logs.","skill"=>"Firemaking:90");
		$task10 =array("task"=>"Required to fish a sacred eel.","skill"=>"Fishing:87");
		$task11 =array("task"=>"Required to fletch rune darts.","skill"=>"Fletching:81");
		$task12 =array("task"=>"Required to make anti-venom.","skill"=>"Herblore:87");
		$task13 =array("task"=>"Required to cast Fishing Guild Teleport and Reanimate Abyssal Creature.","skill"=>"Magic:85");
		$task14 =array("task"=>"Required to mine runite ore with full Prospector kit.","skill"=>"Mining:85");
		$task15 =array("task"=>"Required to wear black dragonhide armour and Karil's equipment(if you will use that as your barrows set).","skill"=>"Ranged:70");
		$task16 =array("task"=>"Required to runecraft blood runes.","skill"=>"Runecraft:77");
		$task17 =array("task"=>"Required to smith a rune med helm.","skill"=>"Smithing:88");
		$task18 =array("task"=>"Required to kill a reanimated abyssal.","skill"=>"Slayer:85");
		$task19 =array("task"=>"Required to pickpocket an elf.","skill"=>"Thieving:85");
		$task20 =array("task"=>"Required to cut a redwood tree with full lumberjack outfit.","skill"=>"Woodcutting:90");
		$task21 =array("task"=>"Required to fish an anglerfish with full angler outfit.","skill"=>"Fishing:82");
		
		$nested = [];
		for($i=1;$i<22;$i++){
			array_push($nested,${"task$i"});
		}
		return $nested;
	}
//master Sherlock
if($arrayName == "masterSherlock"){
    $task1 =array("task"=>"Equip an abyssal whip in front of the abyssal demons of the Slayer Tower.", "quest"=>"Priest in Peril", "skill"=>"Attack:70", "item"=>"Abyssal whip (frozen and volcanic work, but abyssal tentacle does not)");
	$task2 =array("task"=>"Smith a runite med helm.", "quest"=>"None", "skill"=>"Smithing:83", "item"=>"Hammer, Runite bar");
	$task3 =array("task"=>"Teleport to a spirit tree you planted yourself.", "quest"=>"Tree Gnome Village", "skill"=>"Farming:83", "item"=>"Spirit sapling, Spade, Trowel, Spade");
    $task4 =array("task"=>"Create a Barrows teleport tablet.", "quest"=>"100% Arceuus favour, being on the Arceuus spellbook", "skill"=>"Magic:83", "item"=>"Dark essence block, 2 soul runes, 2 law runes, 1 blood rune");
	$task5 =array("task"=>"Slay a Nechryael", "quest"=>"None", "skill"=>"Slayer:80", "item"=>"None");
    $task6 =array("task"=>"Kill the spiritual, magic and godly whilst representing their own god.", "quest"=>"Troll Stronghold", "skill"=>"Slayer:83", "item"=>"Equipment to kill a spiritual mage, and a god item aligned with that mage.");
    $task7 =array("task"=>"Create an unstrung dragonstone amulet at a furnace.", "quest"=>"None", "skill"=>"Crafting:80", "item"=>"Gold bar, Dragonstone, Amulet mould");
    $task8 =array("task"=>"Burn a magic log.", "quest"=>"None", "skill"=>"Firemaking:75", "item"=>"	Tinderbox, Magic logs");
    $task9 =array("task"=>"Burn a redwood log.", "quest"=>"None", "skill"=>"Firemaking:90", "item"=>"Tinderbox, Redwood logs");
    $task10 =array("task"=>"Complete a lap of the Rellekka rooftop agility course whilst sporting the finest amount of grace.", "quest"=>"None", "skill"=>"Agility:80", "item"=>"Full graceful outfit");
    $task11 =array("task"=>"Mix an anti-venom potion.", "quest"=>"None", "skill"=>"Herblore:87", "item"=>"Antidote++(1-4), 5-20 zulrah's scales");
    $task12 =array("task"=>"Mine a piece of runite ore whilst sporting the finest mining gear.", "quest"=>"None", "skill"=>"Mining:85", "item"=>"A pickaxe, prospector kit (the Varrock armour 4 can be used to substitute a prospector jacket)");
    $task13 =array("task"=>"Steal a gem from the Ardougne market.", "quest"=>"None", "skill"=>"Thieving:75", "item"=>"None");
    $task14 =array("task"=>"Pickpocket an elf.", "quest"=>"Started: Mournings End Part I", "skill"=>"Thieving:85", "item"=>"None");
    $task15 =array("task"=>"Bind a blood rune at the blood altar.", "quest"=>"100% Arceuus favour", "skill"=>"Runecraft:77", "item"=>"Dark essence fragments");
    $task16 =array("task"=>"Create a ranging mix potion.", "quest"=>"None", "skill"=>"Completion of the herblore section of Barbarian training", "item"=>"Ranging potion (2), caviar");
    $task17 =array("task"=>"Fletch a rune dart.", "quest"=>"Partial Completion: The Tourist Trap", "skill"=>"Fletching:81", "item"=>"Rune dart tip, Feather");
    $task18 =array("task"=>"Cremate a set of fiyr remains.", "quest"=>"Shades of Mort'ton", "skill"=>"Firemaking:80", "item"=>"Magic pyre logs, Tinderbox, Fiyr remains");
    $task19 =array("task"=>"Dissect a sacred eel.", "quest"=>"Partial Completion: Regicide", "skill"=>"Cooking:72,Fishing:87", "item"=>"Knife, sacred eel, fishing rod, bait");
    $task20 =array("task"=>"Kill a lizardman shaman.", "quest"=>"100% Shayzien favour", "skill"=>"Combat:Decent", "item"=>"	Combat equipment");
    $task21 =array("task"=>"Chop a redwood log whilst sporting the finest lumberjack gear.", "quest"=>"In Aid of the Myreque,75% Hosidius favour", "skill"=>"Woodcutting:90", "item"=>"An axe, lumberjack outfit");
    $task22 =array("task"=>"Craft a light orb in the Dorgesh-Kaan bank.", "quest"=>"Death of the Dorgeshuun", "skill"=>"Crafting:87", "item"=>"Cave goblin wire, and an Empty light orb or a Glassblowing pipe and molten glass.
	Adding wire to the empty orb completes the challenge.");
    $task23 =array("task"=>"Kill a reanimated abyssal.", "quest"=>"None", "skill"=>"Slayer:85", "item"=>"Ensouled abyssal head, 4 soul runes, 1 blood rune, 4 nature runes");
    $task24 =array("task"=>"Kill a Fiyr shade inside Mort'tons shade catacombs.", "quest"=>"Shades of Mort'ton", "skill"=>"Firemaking:65", "item"=>"65 firemaking is required to light a yew pyre log in combination with Asyn Shade remains for a silver key.");
    $nested = [];
    for($i=1;$i<25;$i++){
        array_push($nested,${"task$i"});
    }
    return $nested;
}
if($arrayName == "falo"){
	$task1=array("task"=>"A blood red weapon, a strong curved sword, found on the island of primate lords.","skill"=>"<img src='images/item_icons/Dragon_scimitar.png'>Dragon scimitar (Dragon scimitar (or) does not work)");
	$task2=array("task"=>"A book that preaches of some great figure, lending strength, might, and vigour.","skill"=>"<img src='images/untradeable_icons/Unholy_book.png'>
	<img src='images/untradeable_icons/Holy_book.png'><img src='images/untradeable_icons/Book_of_balance.png'><img src='images/untradeable_icons/Book_of_darkness.png'>
	<img src='images/untradeable_icons/Book_of_law.png'><img src='images/untradeable_icons/Book_of_war.png'>
	God book (must be completed)");
	$task3=array("task"=>"A bow of elven craft was made, it shimmers bright, but will soon fade.","skill"=>"<img src='images/untradeable_icons/Crystal_bow.png'>Crystal bow (doesn't have to be fully charged)");
	$task4=array("task"=>"A fiery axe of great inferno, when you use it, you'll wonder where the logs go.","skill"=>"<img src='images/untradeable_icons/Infernal_axe.png'>Infernal axe");
	$task5=array("task"=>"A mark used to increase one's grace, found atop a seer's place.","skill"=>"<img src='images/untradeable_icons/Mark_of_grace.png'>Mark of grace");
	$task6=array("task"=>"A molten beast with fiery breath, you acquire these with its death.","skill"=>"<img src='images/item_icons/Lava_dragon_bones.png'>Lava dragon bones");
	$task7=array("task"=>"A shiny helmet of flight, to obtain this with melee, struggle you might.","skill"=>"<img src='images/item_icons/Armadyl_helmet.png'>Armadyl helmet");
	$task8=array("task"=>"A sword held in the other hand, red its colour, Cyclops strength you must withstand.","skill"=>"<img src='images/untradeable_icons/Dragon_defender.png'>Dragon defender");
	$task9=array("task"=>"A token used to kill mythical beasts, in hope of a blade or just for an xp feast.","skill"=>"<img src='images/untradeable_icons/Warrior_guild_token_5.png'>Warrior guild token");
	$task10=array("task"=>"Green is my favorite, mature ale I do love, this takes your herblore above.","skill"=>"<img src='images/item_icons/Greenmans_ale(m).png'>Greenman's ale(m)");
	$task11=array("task"=>"It can hold down a boat or crush a goat, this object, you see, is quite heavy.","skill"=>"<img src='images/untradeable_icons/Barrelchest_anchor.png'>Barrelchest anchor (broken anchor does not work)");
	$task12=array("task"=>"It comes from the ground, underneath the snowy plain. Trolls aplenty, with what looks like a mane.","skill"=>"<img src='images/item_icons/Basalt.png'>Basalt");
	$task13=array("task"=>"No attack to wield, only strength is required, made of obsidian but with no room for a shield.","skill"=>"<img src='images/item_icons/Tzhaar-ket-om.png'>Tzhaar-ket-om");
	$task14=array("task"=>"Penance healers runners and more, obtaining this body often gives much deplore.","skill"=>"<img src='images/untradeable_icons/Fighter_torso.png'>Fighter torso");
	$task15=array("task"=>"Strangely found in a chest, many believe these gloves are the best.","skill"=>"<img src='images/untradeable_icons/Barrows_gloves.png'>Barrows gloves");
	$task16=array("task"=>"These gloves of white won't help you fight, but aid in cooking, they just might.","skill"=>"<img src='images/untradeable_icons/Cooking_gauntlets.png'>Cooking gauntlets");
	$task17=array("task"=>"They come from some time ago, from a land unto the east. Fossilised they have become, this small and gentle beast.","skill"=>"<img src='images/item_icons/Numulite_25.png'>Numulite");
	$task18=array("task"=>"To slay a dragon you must first do, before this chest piece can be put on you.","skill"=>"<img src='images/item_icons/Rune_platebody.png'>Rune platebody");
	$task19=array("task"=>"Vampyres are agile opponents, damaged best with a weapon of many components.","skill"=>"<img src='images/untradeable_icons/Rod_of_ivandis.png'><img src='images/untradeable_icons/Ivandis_flail.png'>Rod of ivandis or Ivandis flail");
    $nested = [];
    for($i=1;$i<20;$i++){
        array_push($nested,${"task$i"});
    }
    return $nested;
}
	/*
	if($arrayName == ""){
		$task1 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task2 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task3 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task4 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task5 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task6 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task7 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task8 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task9 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task10 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task11 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		$task12 =array("task"=>"", "quest"=>"", "skill"=>"", "item"=>"");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		return $nested;



	if($arrayName == ""){
		$task1 =array("task"=>"","skill"=>"");
		$task2 =array("task"=>"","skill"=>"");
		$task3 =array("task"=>"","skill"=>"");
		$task4 =array("task"=>"","skill"=>"");
		$task5 =array("task"=>"","skill"=>"");
		$task6 =array("task"=>"","skill"=>"");
		$task7 =array("task"=>"","skill"=>"");
		$task8 =array("task"=>"","skill"=>"");
		$task9 =array("task"=>"","skill"=>"");
		$task10 =array("task"=>"","skill"=>"");
		$task11 =array("task"=>"","skill"=>"");
		$task12 =array("task"=>"","skill"=>"");
		$task13 =array("task"=>"","skill"=>"");
		$task14 =array("task"=>"","skill"=>"");
		$task15 =array("task"=>"","skill"=>"");
		$task16 =array("task"=>"","skill"=>"");
		$task17 =array("task"=>"","skill"=>"");
		$task18 =array("task"=>"","skill"=>"");
		$task19 =array("task"=>"","skill"=>"");
		$task20 =array("task"=>"","skill"=>"");
		$task21 =array("task"=>"","skill"=>"");
		
		$nested = [];
		for($i=1;$i<22;$i++){
			array_push($nested,${"task$i"});
		}
		return $nested;
	}
	}*/
	}
?>
