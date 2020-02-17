<?php

function getArray($arrayName){

//Easy Ardougne
	if($arrayName == "ardyEasy"){
		$task1 =array("task"=>"Get Wizard Cromperty to teleport you to the rune essence mine.","quest"=>"Rune Mysteries", "skill"=>"None","item"=>"None. He can be found in the basement of the Wizard Tower south of Draynor village.");

		$task2 =array("task"=>"Steal a cake from the East Ardougne market stalls.", "quest"=>"None", "skill"=>"Thieving:5", "item"=>"None");

		$task3 =array("task"=>"Sell a silk to the silk trader in East Ardougne for 60 coins.", "quest"=>"None", "skill"=>"None", "item"=>"None. He will not purchase it from you if you steal from the stall prior to trying to sell to him. You will have to attempt to sell it for 120 coins then 60 coins to sell it to him for this amount.");

		$task4 =array("task"=>"Use the altar in East Ardougne's church located West of the town center.", "quest"=>"None", "skill"=>"None", "item"=>"None");

		$task5 =array("task"=>"Go out on the fishing trawler", "quest"=>"None", "skill"=>"Fishing:15", "item"=>"None. You will only need to start to finish this task.");

		$task6 =array("task"=>"Enter the Combat Training Camp which is located North of West Ardougne", "quest"=>"Biohazard", "skill"=>"None", "item"=>"None");

		$task7 =array("task"=>"Have Tindel Marchant identify a rusty sword for you.", "quest"=>"None", "skill"=>"None", "item"=>"Rusty sword (obtained from pickpocketing HAM members, killing Kraken, HAM guards, or Crazy archeologist), 100 coins.");

		$task8 =array("task"=>"Use the Ardougne lever to teleport into the wilderness", "quest"=>"None", "skill"=>"None", "item"=>"None. Is located directory East of West Ardougne, or west of the castle. Teleports you to 51 wild so do not bring anything you are afraid to lose.");

		$task9 =array("task"=>"View the Hunter Emporium shop in Yanille.", "quest"=>"None", "skill"=>"None", "item"=>"None");

		$task10 =array("task"=>"Check what pets you currently have ensured with Probita.", "quest"=>"None", "skill"=>"None", "item"=>"None. Probita is located near the general store in East Ardougne, players must select the 'Check' option to be able complete the task.");

		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
<h5>The reward can be claimed from Two-pints. She is located at the Flying Horse Inn in Ardougne.</h5>
    <ul class="pt-2">
	<li><b>Ardougne cloak 1</b><img src="images/untradeable_icons/Ardougne_cloak_1.png"/></li>
    <ul>
	<li>Unlimited teleports to the Ardougne Monastery</li>
    </ul>
    <li>1 Antique lamp worth 2,500 experience in any skill above 30</li>
    <li>Double death runes (200) when trading in cats to civilians</li>
    <li>10% increased chance to successfully steal from stalls in Ardougne</li>
    <li>Some drops will be noted at the Tower of Life</li>
</ul>
	';

		return $nested;
	}

//Medium Ardougne
	
	if($arrayName == "ardyMedium"){
		$task1 =array("task"=>"Enter the unicorn pen in the Ardougne Zoo using the fairy ring 'BIS'.", "quest"=>"Started Fairytale II- Cure a Queen", "skill"=>"None", "item"=>"None. Must get up to the point in the quest where fairy rings are unlocked.");
		$task2 =array("task"=>"Grapple over the south wall of Yanille.", "quest"=>"None", "skill"=>"Strength:38,Ranged:21,Agility:39", "item"=>"A <i>Mith grapple</i> and any <i>crossbow</i>.");
		$task3 =array("task"=>"Harvest strawberries from the Ardougne farming patch.", "quest"=>"None", "skill"=>"Farming:31", "item"=>"3 <i>Strawberry seeds</i>, <i>Rake</i>, <i>Spade</i>, <i>Seed dibber</i>, <i>Watering can</i>, <i>Basket of apples</i>(if you want to protect the patch).");
		$task4 =array("task"=>"Cast the spell <i>Ardougne Teleport</i>", "quest"=>"Plague City", "skill"=>"Magic:51", "item"=>"2 <i>Law rune</i>,2 <i>Water rune</i>");
		$task5 =array("task"=>"Use the hot air balloon to travel to Castle Wars.", "quest"=>"Enlightened Journey", "skill"=>"Firemaking:50", "item"=>"<i>Yew log</i>(10 <i>Yew logs</i> if route is not unlocked yet).");
		$task6 =array("task"=>"Claim buckets of sand from Bert in Yanille.", "quest"=>"The Hand in the Sand", "skill"=>"Crafting:49", "item"=>"None");
		$task7 =array("task"=>"Catch any fish on the Fishing Platform", "quest"=>"Started: Sea Slug", "skill"=>"None", "item"=>"<i>Fishing rod</i> and <i>Fishing bait</i> or <i>Small fishing net.</i>");
		$task8 =array("task"=>"Pickpocket the master farmer in East Ardougne.", "quest"=>"None", "skill"=>"Thieving:38", "item"=>"None. Can be found North of East Ardougne by the farming shop.");
		$task9 =array("task"=>"Collection some <i>cave nightshade</i> from the Skavid caves south east of Castle Wars.", "quest"=>"Partial completion: Watchtower", "skill"=>"None", "item"=>"A light source, <i>Skavid map</i>, the nightshade spawns in the most northern cave that is south of the ogre island.");
		$task10 =array("task"=>"Kill a swordchick in the Tower of Life", "quest"=>"Tower of Life", "skill"=>"None", "item"=>"A weapon, 1 <i>Raw chicken</i>, 1 <i>Raw swordfish</i>. Must use the Symbol of life to spawn the monster. It is located in the room southwest of the entrance on the eastern wall.");
		$task11 =array("task"=>"Equip an <i>Iban's upgraded staff</i> or upgrade an <i>Iban's staff</i>.", "quest"=>"Underground Pass", "skill"=>"None", "item"=>"200,000 <i>coins</i>, or the <i>Iban's upgraded staff</i>. 50 attack is required to equip the staff, but not to upgrade it. The staff can be upgraded by the Dark mage directly east of the entrance to the underground pass on the western side of West Ardougne.");
		$task12 =array("task"=>"Visit the island east of the Necromancer Tower", "quest"=>"Started: Fairytale II - Cure a Queen", "skill"=>"None", "item"=>"None. Can be done using fairyring code 'AIR'.");

		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<h5>The reward can be claimed from Two-pints. She is located at the Flying Horse Inn in Ardougne.</h5>
		<ul class="pt-2">
		   <li><b>Ardougne cloak 2</b><img src="images/untradeable_icons/Ardougne_cloak_2.png"/></li>
		<ul>
		     <li>Three daily teleports to Ardougne farm patch</li>
		</ul>

		    <li>1 Antique lamp worth 7,500 experience in any skill above 40 </li>
		    <li>100 free noted pure essence every day from Wizard Cromperty</li>
		    <li>Further noted drops from the Tower of Life</li>
		    <li>10% increased chance to pickpocket in Ardougne (even if the cloak is not equipped or in inventory</li> 
		    <li>Ability to toggle the Ring of life teleport to Ardougne </li>
		    <li>Receive additional runes when crafting essence at the Ourania Altar</li> 
		</ul>
		';
		return $nested;
	}

//Hard Ardougne
	
	if($arrayName == "ardyHard"){
		$task1 =array("task"=>"Recharge jewellery at the totem in the Legend's Guild", "quest"=>"Legend's Quest", "skill"=>"None", "item"=>"An uncharged <i>Skills necklace</i> or <i>Combat bracelet</i>");
		$task2 =array("task"=>"Enter the Magic Guild", "quest"=>"None", "skill"=>"Magic:66", "item"=>"None");
		$task3 =array("task"=>"Attempt to steal from King Lathas' chest.", "quest"=>"None", "skill"=>"Thieving:72", "item"=>"<i>Lockpick</i>");
		$task4 =array("task"=>"Have a monkey minder place you in the monkey cage of the East Ardougne zoo. (Must wear a Karamjan monkey greegree and talk to the Monkey Minder).", "quest"=>"Partial completion: Monkey Madness", "skill"=>"None", "item"=>"Karamjan <i>Monkey greegree</i>");
		$task5 =array("task"=>"Teleport to the Watchtower", "quest"=>"Watchtower", "skill"=>"Magic:58", "item"=>"2 <i>Law rune</i>,2 <i>Earth rune</i>");
		$task6 =array("task"=>"Catch a Red Salamander", "quest"=>"None", "skill"=>"Hunter:59", "item"=>"<i>Rope</i>, <i>Small fishing net</i>");
		$task7 =array("task"=>"Check the health of a palm tree at the tree patch near Tree Gnome Village.", "quest"=>"None", "skill"=>"Farming:68", "item"=>"1 <i>Palm tree seed or <i>Palm Sapling (15 </i>Papaya fruit</i> to protect the patch)");
		$task8 =array("task"=>"Pick some <i>Poison ivy berries</i> from the patch south of East Ardougne by the monastery.", "quest"=>"None", "skill"=>"Farming:70", "item"=>"<i>Poison ivy seed</i>");
		$task9 =array("task"=>"Smith a Mithril platebody near Ardougne.", "quest"=>"None", "skill"=>"Smithing:68", "item"=>"5 <i>Mithril bars</i>, <i>hammer</i> (Can be smithed in Port Khazard, Yanille, and West Ardougne)");
		$task10 =array("task"=>"Enter your player owned house from Yanille.", "quest"=>"None", "skill"=>"Construction:50", "item"=>"25,000 <i>coins</i> if your house is not already located in Yanille");
		$task11 =array("task"=>"Smith a <i>Dragon sq shield</i> in West Ardougne.", "quest"=>"None", "skill"=>"Smithing:60", "item"=>"<i>Shield right half</i>, <i>Shield left half</i>, <i>Hammer</i>");
		$task12 =array("task"=>"Craft some <i>Death runes</i> at the Death Altar", "quest"=>"Mourning's Ends Part II", "skill"=>"Runecraft:65", "item"=>"<i>Pure essence</i> and <i>Death talisman</i> or <i>Death tiara</i> or <i>Runecraft cape</i>");

		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<h5>The reward can be claimed from Two-pints. She is located at the Flying Horse Inn in Ardougne.</h5>
    		<ul class="pt-2">
		    <li><b>Ardougne cloak 3</b><img src="images/untradeable_icons/Ardougne_cloak_3.png"/></li>
   		<ul>
		    <li>Five daily teleports to Ardougne farm patch</li>
  		</ul>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50 </li>
		    <li>150 free noted pure essence every day from Wizard Cromperty</li>
		    <li>Ability to toggle Watchtower Teleport to the centre of Yanille</li>
		    <li>Even more noted drops from the Tower of Life</li> 
		    <li>10% increased chance of succeeding when pickpocketing around Gielinor (even if the cloak is not equipped or in inventory)</li>
		</ul>
		';
		return $nested;
	}

//Elite Ardougne
	
	if($arrayName == "ardyElite"){
		$task1 =array("task"=>"Catch a <i>Manta ray</i> in the Fishing Trawler and cook it in Port Khazard.", "quest"=>"None", "skill"=>"Fishing:81,Cooking:91", "item"=>"The player must successfully cook the <i>Manta ray</i> burning them will not count towards the task. Cooking gauntlets can be used to increase the odds of successfully cooking them. The fishing cannot be boosted, but the cooking can be.");
		$task2 =array("task"=>"Attempt to picklock the door to the basement of the Yanille agility dungeon (the player must have their hands free to do so).", "quest"=>"None", "skill"=>"Thieving:82", "item"=>"<i>Lockpick</i>");
		$task3 =array("task"=>"Pickpocket a hero", "quest"=>"None", "skill"=>"Thieving:80", "item"=>"None");
		$task4 =array("task"=>"Make a rune crossbow yourself from scratch within Witchaven or Yanille", "quest"=>"None", "skill"=>"Crafting:10,Smithing:91,Fletching:69", "item"=>"<i>Yew logs</i>, <i>Sinew</i>, <i>Runite bar</i>, <i>Hammer</i>, <i>Knife</i></br>Steps:</br>1. Smith the <i>Runite limbs</i> in Yanille.</br>2. Fletch a <i>Yew stock</i> in Yanille.</br>3. Use the <i>Yew Stock</i> with the <i>Runite limbs</i>.</br>4. Craft a <i>Crossbow string</i> in Witchaven (Note: cannot use tree roots).</br>5. Use the <i>Crossbow string</i> with the <i>Runite crossbow (u).</i>");
		$task5 =array("task"=>"Equip a <i>Salve amulet(i)</i> or imbue a <i>Salve amulet</i> at Nightmare Zone.", "quest"=>"Haunted mine and several other quests for Nightmare Zone.", "skill"=>"None", "item"=>"<i>Salve amulet</i> or <i>Salve amulet (e)<i>, 800,000 Nightmare Zone points");
		$task6 =array("task"=>"Pick some Torsol from the herb patch north of East Ardougne.", "quest"=>"None", "skill"=>"Farming:85", "item"=>"<i>Torstol seed</i> (<i>Ultracompost</i> recommended).");
		$task7 =array("task"=>"Complete a lap of Ardougne's rooftop agility course.", "quest"=>"None", "skill"=>"Agility:90", "item"=>"None");
		$task8 =array("task"=>"Cast Ice Barrage on another player within Castle Wars.", "quest"=>"Desert Treasure", "skill"=>"Magic:94", "item"=>"");

		$nested = [];
		for($i=1;$i<9;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<h5>The reward can be claimed from Two-pints. She is located at the Flying Horse Inn in Ardougne.</h5>
    		<ul class="pt-2">
		    <li><b>Ardougne cloak 4</b><img src="images/untradeable_icons/Ardougne_cloak_4.png"/></li>
   		<ul>
		    <li>Unlimited teleports to Ardougne farm patch</li>
  		</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70 </li>
		    <li>250 free noted pure essence every day from Wizard Cromperty</li>
		    <li>50% more fish from Fishing Trawler</li>
		    <li>25% more marks of grace from the Ardougne Agility Course</li> 
		    <li>Bert will automatically deliver 84 buckets of sand to your bank each day (unless you are an Ultimate Ironman).</li>
		</ul>
		';
		return $nested;
	}

//Varrock Easy
	

	if($arrayName == "varrockEasy"){
		$task1 =array("task"=>"Browse Thessalia's store.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task2 =array("task"=>"Have Aubury teleport you to the essence mine. ", "quest"=>"Rune Mysteries", "skill"=>"None", "item"=>"None");
		$task3 =array("task"=>" Make a normal plank at the Sawmill. ", "quest"=>"None", "skill"=>"Mining:15", "item"=>"Any pickaxe");
		$task4 =array("task"=>"Make a normal plank at the Sawmill. ", "quest"=>"None", "skill"=>"None", "item"=>"100 <i>Coins</i> and 1 <i>Logs</i>");
		$task5 =array("task"=>"Enter the second level of the Stronghold of Security. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task6 =array("task"=>"Jump over the fence south of Varrock. ", "quest"=>"None", "skill"=>"Agility:13", "item"=>"None");
		$task7 =array("task"=>"Chop down a dying tree in the Lumber Yard. ", "quest"=>"None", "skill"=>"None", "item"=>"Any axe");
		$task8 =array("task"=>"Buy a newspaper. ", "quest"=>"None", "skill"=>"None", "item"=>"50 <i>Coins</i>");
		$task9 =array("task"=>"Give a dog a bone! ", "quest"=>"None", "skill"=>"None", "item"=>"Any <i>Bones</i>");
		$task10 =array("task"=>"Spin a bowl on the pottery wheel and fire it in the oven in Barbarian Village. ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Soft clay</i>");
		$task11 =array("task"=>"Speak to Haig Halen after obtaining at least 50 Kudos. ", "quest"=>"Quests that give kudos", "skill"=>"Skills for quests that give kudos", "item"=>"None");
		$task12 =array("task"=>"Craft some earth runes. ", "quest"=>"None", "skill"=>"Runecraft:9", "item"=>"<i>Earth talisman</i> or <i>Earth tiara</i> and 1 <i>rune/pure essence</i>, or use the Abyss.");
		$task13 =array("task"=>"Catch some trout in the River Lum at Barbarian Village. ", "quest"=>"None", "skill"=>"Fishing:20", "item"=>"<i>Fly fishing rod and some <i>Feathers</i>");
		$task14 =array("task"=>"Steal from the tea stall in Varrock. ", "quest"=>"None", "skill"=>"Thieving:5", "item"=>"None");

		$nested = [];
		for($i=1;$i<15;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<h5>The reward can be claimed from Toby. He  is located just south east of the centre of Varrock.</h5>
    		<ul class="pt-2">
		    <li><b>Varrock armour 1</b><img src="images/untradeable_icons/Varrock_armour_1.png"/></li>
   		<ul>
		    <li>While worn: 10% chance of mining 2 ores at once up to coal (also works for clay with or without Bracelet of clay) </li>
		    <li>While worn: 10% chance of smelting 2 bars at once up to steel when using the Edgeville furnace</li>
  		</ul>
		    <li>1 Antique lamp worth 2,500 experience in any skill above 30 </li>
		    <li>15 battlestaves from Zaff every day for 7,000 coins each </li>
		    <li>Skull sceptre will now hold up to 7 charges. </li> 
		</ul>
		';
		return $nested;
	}

//Varrock Medium
	
	if($arrayName == "varrockMedium"){
		$task1 =array("task"=>"Have the Apothecary in Varrock make you a Strength potion. ", "quest"=>"None ", "skill"=>"None", "item"=>"<i>Limpwurt root</i>, <i>Red spiders' eggs</i>, and 5 <i>coins</i>. ");
		$task2 =array("task"=>"Enter the Champions' Guild. ", "quest"=>"32 Quest points", "skill"=>"None", "item"=>"None");
		$task3 =array("task"=>"Select a colour for your kitten.", "quest"=>"Partial: Garden of Tranquility, Gertrude's Cat", "skill"=>"None", "item"=>"<i>Ring of charos (a)</i>, 100 <i>coins</i> (Note: Players cannot select a kitten if they already have a kitten or cat that is not overgrown)");
		$task4 =array("task"=>"Use the Spirit tree in the north-eastern corner of Grand Exchange. ", "quest"=>"Tree Gnome Village", "skill"=>"None", "item"=>"None");
		$task5 =array("task"=>"Perform the 4 emotes from the Stronghold of Security. ", "quest"=>"None", "skill"=>"None", "item"=>"None. Access to the Jagex Authenticator is also required.");
		$task6 =array("task"=>"Enter the Tolna dungeon after completing A Soul's Bane. ", "quest"=>"A Soul's Bane", "skill"=>"None", "item"=>"None");
		$task7 =array("task"=>"Teleport to the digsite using a Digsite pendant. ", "quest"=>"The Dig Site", "skill"=>"None", "item"=>"<i>Digsite pendant</i>,Making a Digsite Pendant will also require a Clean Necklace to be found while cleaning Dig Site Specimens in the Varrock Museum.");
		$task8 =array("task"=>"Cast the teleport to Varrock spell. ", "quest"=>"None", "skill"=>"Magic:25", "item"=>"1 <i>Law rune</i>,1<i>Fire rune</i>,3<i>Air rune</i>");
		$task9 =array("task"=>"Get a Slayer task from Vannaka. ", "quest"=>"None", "skill"=>"Combat:40", "item"=>"None");
		$task10 =array("task"=>"Make 20 mahogany planks in one go. ", "quest"=>"None", "skill"=>"None", "item"=>"20 <i>Mahogany logs</i> and 30,000 <i>Coins</i>. It has to be done in one trip at the lumberyard.");
		$task11 =array("task"=>"Pick a white tree fruit. ", "quest"=>"Garden of Tranquility", "skill"=>"Farming:25", "item"=>"None");
		$task12 =array("task"=>"Use the balloon to travel from Varrock. ", "quest"=>"Enlightened Journey", "skill"=>"Firemaking:40", "item"=>"10 <i>Willow logs</i> to unlock the Varrock balloon, and 1 normal logs to use the balloon to travel from Varrock. ");
		$task13 =array("task"=>"Complete a lap of the Varrock Agility Course. ", "quest"=>"None", "skill"=>"Agility:30", "item"=>"None");

		$nested = [];
		for($i=1;$i<14;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<h5>The reward can be claimed from Two-pints. She is located at the Flying Horse Inn in Ardougne.</h5>
    		<ul class="pt-2">
		    <li><b>Varrock armour 2</b><img src="images/untradeable_icons/Varrock_armour_2.png"/></li>
   		<ul>
		    <li>While worn: 10% chance of mining 2 ores at once up to mithril (also works for clay with or without Bracelet of clay) </li>
		    <li>While worn: 10% chance of smelting 2 bars at once up to mithril when using the Edgeville furnace</li>
  		</ul>
		    <li>Ability to switch the Varrock Teleport destination to the Grand Exchange by right clicking the spell icon in the Spellbook interface </li>
		    <li>1 Antique lamp worth 7,500 experience in any skill above 40 </li>
		    <li>30 battlestaves from Zaff every day for 7,000 coins each </li>
		    <li>Skull sceptre will now hold up to 9 charges. </li> 
		</ul>
		';
		return $nested;
	}

//Varrock Hard
	
	if($arrayName == "varrockHard"){
		$task1 =array("task"=>"Trade furs with the Fancy Dress Seller for a Spottier cape and equip it. ", "quest"=>"None", "skill"=>"Hunter:66", "item"=>"2 <i>Dashing kebbit fur</i>, 800 <i>coins</i>");
		$task2 =array("task"=>"Speak to Orlando Smith when you have achieved 153 Kudos. ", "quest"=>"Various quests that give kudos", "skill"=>"None", "item"=>"None");
		$task3 =array("task"=>"Make a Waka canoe near Edgeville. ", "quest"=>"None", "skill"=>"Woodcutting:57", "item"=>"Any axe");
		$task4 =array("task"=>"Teleport to Paddewwa. ", "quest"=>"Desert Treasure", "skill"=>"Magic:54", "item"=>"2 <i>Law rune</i>, 1 <i>Fire rune</i>,<i>Air rune</i>(Must use spell on Ancient Magicks spellbook)");
		$task5 =array("task"=>"Teleport to Barbarian Village with a Skull sceptre. ", "quest"=>"None ", "skill"=>"None", "item"=>"<i>Skull sceptre</i>");
		$task6 =array("task"=>"Chop some yew logs in Varrock and burn them at the top of the Varrock church. ", "quest"=>"None", "skill"=>"Woodcutting:60,Firemaking:60", "item"=>"Any axe, <i>Tinderbox</i>. Barbarian firemaking does not work. Players must chop the yew tree next to the Varrock church, behind Varrock Palace. ");
		$task7 =array("task"=>"Have the Varrock estate agent decorate your house with Fancy Stone. ", "quest"=>"None", "skill"=>"Construction:50", "item"=>"25,000 <i>Coins</i> (30,000 if the player's house is already decorated with Fancy Stone) ");
		$task8 =array("task"=>"Collect at least 2 <i>Yew roots</i> from the tree patch in Varrock Palace. (If boosting, make sure to boost when digging up the yew tree, not when planting!) ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Yew sapling</i>, (10 cactus spines recommended), any axe, <i>Spade</i>");
		$task9 =array("task"=>"Pray at the altar in Varrock Palace with Smite active. (1st floor, use the staircase in the kitchen.) ", "quest"=>"None", "skill"=>"Prayer:52", "item"=>"None");
		$task10 =array("task"=>"Squeeze through the obstacle pipe in Edgeville Dungeon. ", "quest"=>"None", "skill"=>"Agility:51", "item"=>"None");

		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
	<h5>The reward can be claimed from Two-pints. She is located at the Flying Horse Inn in Ardougne.</h5>
    		<ul class="pt-2">
		    <li><b>Varrock armour 3</b><img src="images/untradeable_icons/Varrock_armour_3.png"/></li>
   		<ul>
		    <li>While worn: 10% chance of mining 2 ores at once up to adamant (also works for clay with or without Bracelet of clay) </li>
		    <li>While worn: 10% chance of smelting 2 bars at once up to adamant when using the Edgeville furnace</li>
		</ul>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50 </li>
		    <li>60 battlestaves from Zaff every day for 7,000 coins each </li>
		    <li>Access to the Cooks\' Guild bank. </li>
		    <li>Skull sceptre will now hold up to 12 charges. </li> 
		</ul>
		';
		return $nested;
	}
//Varrock Elite
	
	if($arrayName == "varrockElite"){
		$task1 =array("task"=>"Create a Super combat potion in Varrock West Bank. ", "quest"=>"None", "skill"=>"Herblore:90", "item"=>"<i>Super attack (4)</i>, <i>Super strength (4)</i>, <i>Super defence (4)</i>, <i>Torstol</i>");
		$task2 =array("task"=>"Use Lunar magic to make 20 mahogany planks in the Varrock Lumber Yard (Plank Make).", "quest"=>"Dream Mentor", "skill"=>"Magic:86", "item"=>"20 <i>Nature runes</i>, 40 <i>Astral runes</i>, 300 <i>Earth runes</i>, 21000 <i>Coins</i>, 20 <i>Mahogany logs</i>");
		$task3 =array("task"=>"Bake a summer pie in the Cooking Guild. ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Raw summer pie<i>, <i>Chef's hat</i> or <i>Cooking cape</i>. Can be boosted.");
		$task4 =array("task"=>"Smith and fletch ten <i>Rune darts</i> within Varrock. ", "quest"=>"The Tourist Trap", "skill"=>"Smithing:89,Fletching:81", "item"=>"1 <i>Runite bar</i>, 10 <i>Feathers</i>, <i>Hammer</i>");
		$task5 =array("task"=>"Craft 100 or more <i>Earth runes</i> simultaneously. ", "quest"=>"Rune Mysteries", "skill"=>"Runecraft:78", "item"=>"25 <i>Rune essence</i> or <i>Pure essence</i>");


		$nested = [];
		for($i=1;$i<6;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
	<h5>The reward can be claimed from Two-pints. She is located at the Flying Horse Inn in Ardougne.</h5>
    		<ul class="pt-2">
		    <li><b>Varrock armour 4</b><img src="images/untradeable_icons/Varrock_armour_4.png"/></li>
   		<ul>
		    <li>While worn: 10% chance of mining 2 ores at once up to amethyst (also works for clay with or without Bracelet of clay) </li>
		    <li>While worn: 10% chance of smelting 2 bars at once up to runite when using the Edgeville furnace</li>
		</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70 </li>
		    <li>120 battlestaves from Zaff every day for 7,000 coins each </li>
		</ul>
		';
		return $nested;
	}

//Desert easy
	if($arrayName == "desertEasy"){
		$task1 =array("task"=>"Catch a golden warbler. ", "quest"=>"None", "skill"=>"Hunter:5", "item"=>"<i>Bird snare</i>");
		$task2 =array("task"=>"Mine five clay in the north-eastern desert. ", "quest"=>"None", "skill"=>"Mining:5", "item"=>"Any pickaxe. Necklace of Passage takes you right there. ");
		$task3 =array("task"=>"Enter the Kalphite Hive. ", "quest"=>"None", "skill"=>"None", "item"=>"Rope"); 
		$task4 =array("task"=>"Enter the Desert with a set of desert robes equipped. ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Desert shirt</i>, <i>Desert robe</i>, <i>Desert boots</i> ");
		$task5 =array("task"=>"Kill a vulture.", "quest"=>"None", "skill"=>"None ", "item"=>"Ranged weapon and ammo or runes suggested.");
		$task6 =array("task"=>"Have the Nardah herbalist clean a herb for you. ", "quest"=>"None", "skill"=>"None ", "item"=>"Any grimy herb, 200 <i>Coins<i> (Grimy jungle herbs will not work.)");
		$task7 =array("task"=>"Collect 5 potato cacti from the Kalphite Lair. ", "quest"=>"None", "skill"=>"None ", "item"=>"2 <i>Ropes</i> ");
		$task8 =array("task"=>"Sell some artifacts to Simon Templeton. ", "quest"=>"None", "skill"=>"None ", "item"=>"Any Pyramid Plunder artifact (e.g. <i>Stone scarab</i>)");
		$task9 =array("task"=>"Open the sarcophagus in the first room of Pyramid Plunder. ", "quest"=>"Started: Icthlarin's Little Helper", "skill"=>"Thieving:21", "item"=>"A <i>Pharaoh's sceptre</i> can be used to enter Pyramid Plunder without the need to start Icthlarin's Little Helper. ");
		$task10 =array("task"=>"Cut a desert cactus open to fill a waterskin. ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Knife</i>, empty <i>Waterskin</i>");
		$task11 =array("task"=>"Travel from the Shantay Pass to Pollnivneach by magic carpet. ", "quest"=>"None", "skill"=>"None", "item"=>"200 <i>Coins</i> (and <i>Shantay pass</i> unless already in Desert) ");
		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Desert amulet 1</b><img src="images/untradeable_icons/Desert_amulet_1.png"/></li>
		    <li>1 Antique lamp worth 2,500 experience in any skill above 30.</li>
		    <li>Pharaoh\'s sceptre will hold up to 4 charges.</li>
		    <li>Simon Templeton will purchase artifacts as bank notes.</li>
		    <li>Desert goat horn will be dropped in noted form.</li> 
		</ul>
		';
		return $nested;
	}
	//Desert medium
	if($arrayName == "desertMedium"){
		$task1 =array("task"=>"Climb to the summit of the Agility Pyramid. ", "quest"=>"None", "skill"=>"Agility:30", "item"=>"<i>Waterskins</i> and <i>Desert robes</i> recommended. You must speak to Simon Templeton at the base before you climb the pyramid for the task to count.");
		$task2 =array("task"=>"Slay a desert lizard. ", "quest"=>"None", "skill"=>"Slayer:22", "item"=>"<i>Ice cooler</i>Waterskins and Desert robes recommended. You must speak to Simon Templeton at the base before you climb the pyramid for the task to count. ");
		$task3 =array("task"=>"Catch an orange salamander. ", "quest"=>"None", "skill"=>"Hunter:47", "item"=>"At least 1 <i>Rope</i> and <i>Small fishing net</i>");
		$task4 =array("task"=>"Steal a <i>Phoenix feather</i> from the Desert phoenix. ", "quest"=>"None", "skill"=>"Thieving:25", "item"=>"None. BEWARE: You may already have a Phoenix quill pen in your bank from The Golem quest, which won't allow you to get another feather. ");
		$task5 =array("task"=>"Travel to Uzer via magic carpet. ", "quest"=>"The Golem", "skill"=>"None", "item"=>"200 <i>Coins</i>");
		$task6 =array("task"=>"Travel to the desert via the Eagle transport system. ", "quest"=>"Eagles' Peak", "skill"=>"None", "item"=>"Rope");
		$task7 =array("task"=>"Pray at the Elidinis Statuette in Nardah. ", "quest"=>"Spirits of the Elid", "skill"=>"None", "item"=>"None");
		$task8 =array("task"=>"Create a <i>Combat potion</i> in the desert. ", "quest"=>"None", "skill"=>"Herblore:36", "item"=>"<i>Harralander potion (unf)</i>, <i>Goat horn dust</i> (must be made in the desert and not within city limits) ");
		$task9 =array("task"=>"Teleport to Enakhra's Temple with the <i>Camulet</i>. ", "quest"=>"Enakhra's Lament", "skill"=>"None", "item"=>"<i>Camulet</i>");
		$task10 =array("task"=>"Visit the genie. ", "quest"=>"Spirits of the Elid", "skill"=>"None", "item"=>"<i>Rope</i>, light source (crevice west of Nardah)");
		$task11 =array("task"=>"Teleport to Pollnivneach with a redirected teleport to <i>House tablet</i>. You must enter your house!", "quest"=>"None", "skill"=>"Construction:20", "item"=>"<i>Scroll of redirection</i>, <i>House tablet</i>");
		$task12 =array("task"=>"Chop some <i>Teak logs</i> near Uzer.", "quest"=>"None", "skill"=>"Woodcutting:35", "item"=>"Any axe");
		
		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
		<li><b>Desert amulet 2</b><img src="images/untradeable_icons/Desert_amulet_2.png"/></li>
			<ul>
			    <li>Free teleport to Nardah once per day.</li>
			</ul>
		    <li>All easy diary rewards.</li>
		    <li>1 Antique lamp worth 7,500 experience in any skill above 40.</li>
		    <li>Pharaoh\'s sceptre holds up to 5 charges.</li>
		</ul>
		';
		return $nested;
	}
	//Desert Hard
	if($arrayName == "desertHard"){
		$task1 =array("task"=>"Knock out and pickpocket a Menaphite Thug. ", "quest"=>"The Feud", "skill"=>"Thieving:65", "item"=>"Any blackjack");
		$task2 =array("task"=>"Mine some <i>Granite</i>. ", "quest"=>"None", "skill"=>"Mining:45", "item"=>"Any pickaxe");
		$task3 =array("task"=>"Refill your waterskins in the Desert using Lunar spells. ", "quest"=>"Dream Mentor", "skill"=>"Magic:68", "item"=>"1 <i>Astral rune</i>, 1 <i>Fire rune</i>, 3 <i>Water rune</i>");
		$task4 =array("task"=>"Kill the Kalphite Queen. (Must deal enough damage to get the drop) ", "quest"=>"None", "skill"=>"Combat:High recommended", "item"=>"Good weapons and armour");
		$task5 =array("task"=>"Complete a lap of the Pollnivneach Agility Course. ", "quest"=>"None", "skill"=>"Agility:70", "item"=>"None");
		$task6 =array("task"=>"Slay a Dust devil with a Slayer helmet equipped. (The ones in the Catacombs of Kourend do NOT count.) ", "quest"=>"Started: Desert Treasure", "skill"=>"Slayer:65,Defence:10,Crafting:55","item"=>"<i>Slayer helmet</i>, weapons and armour");
		$task7 =array("task"=>"Activate Ancient Magicks. (does not count if you do it in a POH)", "quest"=>"Desert Treasure", "skill"=>"None", "item"=>"None");
		$task8 =array("task"=>"Defeat a locust rider with Keris. (Scarab mage works too) ", "quest"=>"Contact!", "skill"=>"Attack:50", "item"=>"<i>Keris</i>, Light source, armour recommended");
		$task9 =array("task"=>"Burn some yew logs on the Nardah Mayor's balcony. ", "quest"=>"None", "skill"=>"Firemaking:60", "item"=>"1 <i>Yew Log</i>, <i>Tinderbox</i>");
		$task10 =array("task"=>"Create a Mithril platebody in Nardah. ", "quest"=>"None", "skill"=>"Smithing:68", "item"=>"5 <i>Mithril bars</i>, <i>Hammer</i>");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Desert amulet 3</b><img src="images/untradeable_icons/Desert_amulet_3.png"/></li>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50.</li>
		    <li>All carpet rides are free.</li>
		    <li>Option to toggle the Camulet teleport location to the cavern entrance.</li>
			<li>Pharaoh\'s sceptre holds up to 6 charges.</li> 
			<li>Zahur will create unfinished potions at a cost of 200 coins each—works with notes.</li>
			<li>Ability to use the Al Karid Palace window shortcut with 70 agility.</li>
		</ul>
		';
		return $nested;
	}
	//Desert Elite
	if($arrayName == "desertElite"){
		$task1 =array("task"=>"Bake a wild pie at the Nardah clay oven. ", "quest"=>"None", "skill"=>"Cooking:85", "item"=>"<i>Raw wild pie</i>");
		$task2 =array("task"=>"Cast Ice Barrage against a foe in the Desert. (Must be away from any city) ", "quest"=>"Desert Treasure", "skill"=>"Magic:94", "item"=>"2 <i>Blood rune</i>, 4 <i>Death rune</i>, 6 <i>Water rune</i>");
		$task3 =array("task"=>"Fletch some <i>Dragon darts</i> at the Bedabin Camp. ", "quest"=>"The Tourist Trap", "skill"=>"Fletching:95", "item"=>"At least 1 <i>Dragon dart tip</i> and 1 <i>Feather</i>. You MUST be standing in one of the tents for this to work. ");
		$task4 =array("task"=>" Speak to the <i>Kq head</i> in your POH.", "quest"=>"Priest in Peril", "skill"=>"Construction:78", "item"=>"<i>Kq head</i> (must be stuffed by the Taxidermist), 50000 <i>Coins</i>, 2 <i>Mahogany plank</i>, 2 <i>Gold leaf</i.");
		$task5 =array("task"=>"Steal from the Grand Gold Chest in the final room of Pyramid Plunder", "quest"=>"Started: Icthlarin's Little Helper", "skill"=>"Thieving:91,No boosts", "item"=>"A <i>Pharaoh's sceptre</i> can be used to enter Pyramid Plunder without starting Icthlarin's Little Helper. Thieving cannot be boosted");
		$task6 =array("task"=>"Restore at least 85 Prayer points when praying at the altar in Sophanem. ", "quest"=>"Started: Icthlarin's Little Helper", "skill"=>"Prayer:85", "item"=>"None. Cannot be boosted");

		
		$nested = [];
		for($i=1;$i<7;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Desert amulet 4</b><img src="images/untradeable_icons/Desert_amulet_4.png"/></li>
			<ul>
			    <li>100% protection against desert heat when worn.</li>
			    <li>Unlimited teleports to Nardah and the Kalphite Cave.</li>
			</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70.</li>
		    <li>Free access to the Shantay Pass gate without the need of tickets.</li>
		    <li>Pharaoh\'s sceptre holds up to 8 charges.</li>
			<li>Access to a squeeze-through shortcut in the Kalphite Lair that takes you directly from the beginning of the maze-type path of the lair, to the tunnel entrance above the KQ Chamber (86 Agility requirement).</li> 
			<li>Permanent ropes at both the Kalphite Lair and the Kalphite Queen tunnel entrances. (Note: Both ropes need to be placed the first time you enter these tunnels after completing the Diary).</li>
		</ul>
		';
		return $nested;
	}

//Falador Easy
	if($arrayName == "faladorEasy"){
		$task1 =array("task"=>"Find out what your family crest is from Sir Renitee.", "quest"=>"None", "skill"=>"Construction:16", "item"=>"None, must thank him to complete the task");
		$task2 =array("task"=>"Climb over the western Falador wall", "quest"=>"None", "skill"=>"Agility:5", "item"=>"None");
		$task3 =array("task"=>"Browse Sarah's Farming Shop. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task4 =array("task"=>"Get a haircut from the Falador hairdresser.", "quest"=>"None", "skill"=>"None", "item"=>"1,000 <i>Coins<i> (2,000 <i>Coins<i> if female)");
		$task5 =array("task"=>"Fill a <i>Bucket</i> from the pump north of Falador West Bank. ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Bucket</i>");
		$task6 =array("task"=>"Kill a duck in Falador Park.", "quest"=>"None", "skill"=>"None", "item"=>"Any Ranged weapon, or wait until the duck approaches the edge. ");
		$task7 =array("task"=>"Make a <i>Mind tiara</i>.", "quest"=>"Rune Mysteries", "skill"=>"None", "item"=>"<i>Tiara</i>, <i>Mind talisman</i>");
		$task8 =array("task"=>"Take the boat to Entrana. ", "quest"=>"None", "skill"=>"None", "item"=>"Have no weapons or armour equipped or in your inventory. ");
		$task9 =array("task"=>"Repair a broken strut in the Motherlode Mine. ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Hammer</i>, any pickaxe");
		$task10 =array("task"=>"Claim a security book from the Security Guard upstairs at Port Sarim jail. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task10 =array("task"=>"Smith some Blurite limbs on Doric's anvil. ", "quest"=>"The Knight's Sword, Doric's Quest", "skill"=>"Smithing:10,Mining:13", "item"=>"None");

		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Falador shield 1</b><img src="images/untradeable_icons/Falador_shield_1.png"/></li>
			<ul>
			    <li>25% Prayer restore once per day</li>
			</ul>
		    <li>1 Antique lamp worth 2,500 experience in any skill above 30</li>
		    <li>Shortcut to the Chaos Temple from Burthorpe</li>
		</ul>
		';
		return $nested;
	}

//Falador Medium
	if($arrayName == "faladorMedium"){
		$task1 =array("task"=>"Light a <i>Bullseye lantern</i> at the Chemist's in Rimmington. ", "quest"=>"None", "skill"=>"Firemaking:49", "item"=>"<i>Tinderbox</i>, <i>Bullseye lantern</i> (Must be a normal <i>Bullseye lantern</i>)");
		$task2 =array("task"=>"Telegrab some Wine of zamorak at the Chaos Temple by the Wilderness", "quest"=>"None.", "skill"=>"Magic:33", "item"=>"1 <i>Law rune</i>, 1 <i>Air rune</i>");
		$task3 =array("task"=>"Unlock the crystal chest in Taverley. ", "quest"=>"None", "skill"=>"None", "item"=>"<i>Crystal key</i>");
		$task4 =array("task"=>"Place a <i>Scarecrow</i> in the Falador farm flower patch. ", "quest"=>"None", "skill"=>"23:Farming", "item"=>"<i>Bronze spear</i>, <i>Watermelon</i>(Requires 47 farming for ironman), <i>Hay sack</i> (You can fill an empty sack with hay in the nearby chicken coop) ");
		$task5 =array("task"=>"Kill a Mogre at Mudskipper Point.", "quest"=>"Skippy and the Mogres", "skill"=>"Slayer:32", "item"=>"<i>Fishing explosive</i>");
		$task6 =array("task"=>"Visit the Port Sarim Rat Pits. ", "quest"=>"3/4ths done: Ratcatchers(must start last section)", "skill"=>"None", "item"=>"None");
		$task7 =array("task"=>"Grapple up and then jump off the north Falador wall.", "quest"=>"None", "skill"=>"Agility:11,Strength:37,Ranged:19", "item"=>"<i>Mith grapple</i>(For ironman accounts requires 59 smithing and fletching), any crossbow that you can wield ");
		$task8 =array("task"=>"Pickpocket a Falador guard. ", "quest"=>"None", "skill"=>"Thieving:40", "item"=>"None");
		$task9 =array("task"=>"Pray at the Altar of Guthix in Taverley whilst wearing full Initiate armour.", "quest"=>"Recruitment Drive", "skill"=>"Prayer:10,Defence:20", "item"=>"<i>Inititate armour</i>");
		$task10 =array("task"=>"Mine some <i>Gold ore</i> at the Crafting Guild.", "quest"=>"None", "skill"=>"Crafting:40,Mining:40", "item"=>"Any pickaxe, <i>Brown apron</i> or <i>Crafting cape</i>");
		$task11 =array("task"=>"Squeeze through the crevice in the Dwarven Mines.", "quest"=>"None", "skill"=>"Agility:42", "item"=>"None");
		$task12 =array("task"=>"Chop and burn some <i>Willow logs</i> in Taverley (can cut and burn willows just south along water). ", "quest"=>"None", "skill"=>"Woodcutting:30,Firemaking:30", "item"=>"Any woodcutting axe, <i>Tinderbox</i>");
		$task13 =array("task"=>"Craft a basket on the Falador farm loom. ", "quest"=>"None", "skill"=>"Crafting:36,<br>Ironman,Farming:30", "item"=>"6 <i>Willow branches</i>");		
		$task14 =array("task"=>"Teleport to Falador. ", "quest"=>"None", "skill"=>"Magic:37", "item"=>"1 <i>Law rune</i>, 1 <i>Water rune</i>, 3 <i>Air rune</i>");
		
		$nested = [];
		for($i=1;$i<15;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Falador shield 2</b><img src="images/untradeable_icons/Falador_shield_2.png"/></li>
			<ul>
			    <li>50% Prayer restore once per day</li>
			</ul>
		    <li>1 Antique lamp worth 7,500 experience in any skill above 40</li>
		    <li>10% more experience from the Falador farming patch (The shield does not need to be equipped to gain this extra experience)</li>
		    <li>Access to a shortcut in the Motherlode Mine (requires 54 Agility)</li>
		    <li>10% higher chance of receiving a clue scroll from a guard in Falador</li> 
		</ul>
		';
		return $nested;
	}

//Falador Hard
	if($arrayName == "faladorHard"){
		$task1 =array("task"=>"Craft 140 mind runes simultaneously. ", "quest"=>"None ", "skill"=>"Runecraft:56", "item"=>"28 <i>Rune essence</i>, <i>Mind tiara</i> or access to the Abyss");
		$task2 =array("task"=>"Change your family crest to the Saradomin symbol.", "quest"=>"None ", "skill"=>"Prayer:70", "item"=>"5,000 <i>Coins</i> (10,000 <i>Coins</i> if your family crest is already the Saradomin symbol—talk to Sir Renitee in the White Knights' Castle.) ");
		$task3 =array("task"=>"Kill the Giant Mole beneath Falador Park. ", "quest"=>"None ", "skill"=>"None", "item"=>"Decent weapons and armour, light source, and a <i>Spade</i>");
		$task4 =array("task"=>"Kill a Skeletal Wyvern in the Asgarnia Ice Dungeon. ", "quest"=>"None ", "skill"=>"Slayer:72", "item"=>"Decent weapons and armour, <i>Elemental shield<i>, <i>Mind shield<i>, or a <i>Dragonfire shield<i> highly recommended");
		$task5 =array("task"=>"Complete a lap of the Falador Rooftop Agility Course. ", "quest"=>"None ", "skill"=>"Agility:50", "item"=>"None ");
		$task6 =array("task"=>"Enter the Mining Guild wearing full Prospector. ", "quest"=>"None ", "skill"=>"Mining:60", "item"=>"All pieces of the <i>Prospector kit</i> (Varrock armour 4 does not work)");
		$task7 =array("task"=>"Kill the blue dragon under the Heroes' Guild. ", "quest"=>"Heroes' Quest", "skill"=>"None ", "item"=>"Decent weapons and armour, <i>Anti-dragon shield</i> or <i>Dragonfire shield</i> recommended ");
		$task8 =array("task"=>"Crack a wall safe within Rogues' Den. ", "quest"=>"None ", "skill"=>"Thieving:50", "item"=>"None, you only need to crack any of the wall safes in the main area (where the bank is)");
		$task9 =array("task"=>"Recharge your Prayer in Port Sarim church while wearing full Proselyte.", "quest"=>"The Slug Menace", "skill"=>"Defence:30", "item"=>"<i>Proselyte armour</i>");
		$task10 =array("task"=>"Enter the Warriors' Guild.", "quest"=>"None ", "skill"=>"Attack:99,or,Strength:99,or,Attack/Strength:130", "item"=>"None ");
		$task11 =array("task"=>"Equip a <i>Dwarven helmet</i> within the Dwarven Mines. ", "quest"=>"Grim Tales", "skill"=>"Defence:50", "item"=>"<i>Dwarven helmet</i>");

		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Falador shield 3</b><img src="images/untradeable_icons/Falador_shield_3.png"/></li>
			<ul>
				<li>100% Prayer restore once per day</li>
				<li>Mole locator on the shield, which automatically locates the Giant Mole upon entering its lair</li>
			</ul>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50</li>
		    <li>Access to a bank chest at the Crafting Guild</li>
		    <li>The Giant Mole will drop noted mole skins and mole claws.</li>
		    <li>Shortcut to the Fountain of Heroes</li> 
		</ul>
		';
		return $nested;
	}

//Falador Elite
	if($arrayName == "faladorElite"){
		$task1 =array("task"=>"Craft 252 <i>Air runes</i> simultaneously. ", "quest"=>"None", "skill"=>"Runecraft:88", "item"=>"Air tiara and 28 <i>Rune essence</i> or <i>Pure essence</i>");
		$task2 =array("task"=>"Purchase a <i>White 2h sword</i> from Sir Vyvin. ", "quest"=>"Wanted!", "skill"=>"None ", "item"=>"1,920 <i>Coins</i>, must have killed 1300 Black Knights");
		$task3 =array("task"=>"Find at least 3 <i>Magic roots</i> at once when digging up your magic tree in Falador. ", "quest"=>"None ", "skill"=>"Farming:91,Woodcutting:75", "item"=>"<i>Magic seed</i>, <i>Spade</i>, any Woodcutting axe");
		$task4 =array("task"=>"Perform a <i>Cape of Accomplishment</i> or <i>Quest point cape emote</i> at the top of White Knights' Castle. ", "quest"=>"None, or completed all quests", "skill"=>"Any99:99,or,269 Quest points", "item"=>"<i>Cape of Accomplishment</i> or <i>Quest point cape</i> (Cabbage cape or max cape will not work) ");
		$task5 =array("task"=>"Jump over the strange floor in Taverley Dungeon. ", "quest"=>"None ", "skill"=>"Agility:80", "item"=>"None ");
		$task6 =array("task"=>"Mix a <i>Saradomin brew</i> in Falador East Bank.", "quest"=>"None ", "skill"=>"Herblore:81", "item"=>"<i>Toadflax potion (unf)</i>, <i>Crushed nest</i>");
		
		$nested = [];
		for($i=1;$i<7;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Falador shield 4</b><img src="images/untradeable_icons/Falador_shield_4.png"/></li>
			<ul>
			    <li>100% Prayer restore twice per day</li>
			</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70</li>
		    <li>Tree patch in Falador will never get diseased.</li>
		    <li>Slightly increased chance at receiving higher level ores when cleaning pay-dirt</li>
		</ul>
		';
		return $nested;
	}

//Fremennik Easy
	if($arrayName == "fremennikEasy"){
		$task1 =array("task"=>"Catch a cerulean twitch. ", "quest"=>"None", "skill"=>"Hunter:11", "item"=>"<i>Bird snare</i>");
		$task2 =array("task"=>"Change your boots at Yrsa's Shoe Store. ", "quest"=>"The Fremennik Trials", "skill"=>"None", "item"=>"500 <i>Coins</i>");
		$task3 =array("task"=>"Kill 5 Rock Crabs", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task4 =array("task"=>"Craft a <i>Tiara</i> from scratch in Rellekka.", "quest"=>"The Fremennik Trials", "skill"=>"Crafting:23,Mining:20,Smithing:20", "item"=>"<i>Tiara mould</i>, any pickaxe—mine the silver ore from the Rellekka mine located on the east side of Rellekka, a few steps north east of the agility shortcut");
		$task5 =array("task"=>"Browse the Stonemason's shop (located south-east of the bank and tavern in West Keldagrim) ", "quest"=>"Started: The Giant Dwarf", "skill"=>"None", "item"=>"None");
		$task6 =array("task"=>"Collect 5 snape grass on Waterbirth Island.", "quest"=>"Optional: The Fremennik Trials", "skill"=>"None", "item"=>"1,000 <i>Coins</i> if The Fremennik Trials is not completed.");
		$task7 =array("task"=>"Steal from the Keldagrim crafting or baker's stall. ", "quest"=>"Started: The Giant Dwarf", "skill"=>"Thieving:5", "item"=>"None");
		$task8 =array("task"=>"Fill a bucket with water at the Rellekka well.", "quest"=>"None", "skill"=>"None", "item"=>"<i>Bucket</i>");
		$task9 =array("task"=>"Enter the Troll Stronghold.", "quest"=>"Troll Stronghold, Death Plateau", "skill"=>"None", "item"=>"<i>Climbing boots</i>");
		$task10 =array("task"=>"Chop and burn some oak logs in the Fremennik Province.", "quest"=>"None", "skill"=>"Woodcutting:15,Firemaking:15", "item"=>"Any axe, <i>Tinderbox</i>");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Fremennik sea boots 1</b><img src="images/untradeable_icons/Fremennik_sea_boots_1.png"/></li>
			<ul>
			    <li>One free teleport to Rellekka every day</li>
			</ul>
		    <li>1 Antique lamp worth 2,500 experience in any skill above 30</li>
		    <li>Peer the Seer will act as a bank deposit box.</li>
		    <li>Fossegrimen will give your enchanted lyre an extra charge when making a sacrifice.</li>
		</ul>
		';
		return $nested;
	}
//Fremennik Medium
	if($arrayName == "fremennikMedium"){
		$task1 =array("task"=>"Slay a brine rat.", "quest"=>"Started: Olaf's Quest", "skill"=>"Slayer:47", "item"=>"Any weapon, <i>Spade</i>, food. (It is not required to finish the quest to gain access to the Brine Rat Cavern.) ");
		$task2 =array("task"=>"Travel to the Snowy Hunter Area via Eagle. ", "quest"=>"Eagles' Peak", "skill"=>"None", "item"=>"<i>Rope</i>");
		$task3 =array("task"=>"Mine some coal in Rellekka. ", "quest"=>"The Fremennik Trials", "skill"=>"Mining:30", "item"=>"Any pickaxe");
		$task4 =array("task"=>"Steal from the Rellekka fish stalls", "quest"=>"The Fremennik Trials", "skill"=>"Thieving:42", "item"=>"None");
		$task5 =array("task"=>"Travel to Miscellania by fairy ring. ", "quest"=>"The Fremennik Trials, Started: Fairytale II - Cure a Queen", "skill"=>"None", "item"=>"<i>Dramen staff</i> or <i>Lunar staff</i> (Fairy ring code: CIP)");
		$task6 =array("task"=>"Catch a Snowy knight. ", "quest"=>"None", "skill"=>"Hunter:35", "item"=>"<i.Butterfly net</i> and <i>Butterfly jar</i>");
		$task7 =array("task"=>"7. Pick up your pet rock from your POH menagerie. ", "quest"=>"The Fremennik Trials", "skill"=>"Construction:37", "item"=>"<i>Pet rock</i>");
		$task8 =array("task"=>"Visit the Lighthouse from Waterbirth Island.", "quest"=>"Horror from the Deep, Started: The Fremennik Trials ", "skill"=>"None", "item"=>"A pet rock or another player is required in order to open the doors in the Waterbirth Island Dungeon. 1,000 coins to travel to Waterbirth Island if you have not completed The Fremennik Trials. Is located past the ladder to DKS.");
		$task9 =array("task"=>"Mine some gold at the Arzinian Mine. ", "quest"=>"Near full completion: Between a Rock...", "skill"=>"Mining:40", "item"=>"Any pickaxe, <i>Gold helmet</i>, 2 gold coins or a <i>Ring of charos (a)</i>");
		
		$nested = [];
		for($i=1;$i<10;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Fremennik sea boots 2</b><img src="images/untradeable_icons/Fremennik_sea_boots_2.png"/></li>
		    <li>1 Antique lamp worth 7,500 experience in any skill above 40</li>
		    <li>Shortcut jump from Miscellania dock to Etceteria</li>
		    <li>Improved rate of gaining approval on Miscellania</li>
		</ul>
		';
		return $nested;
	}
//Fremennik Hard
	if($arrayName == "fremennikHard"){
		$task1 =array("task"=>"Teleport to Trollheim. ", "quest"=>"Eadgar's Ruse", "skill"=>"Magic:61", "item"=>"2 <i>Law rune</i>, 2 <i>Fire rune</i>");
		$task2 =array("task"=>"Catch a Sabre-toothed kyatt. ", "quest"=>"None", "skill"=>"Hunter:55", "item"=>"<i>Teasing stick</i>, <i>Log</i>s, <i>Axe</i>, <i>Knife</i> (Note: you can use a hunter potion to boost from 52 to 55) ");
		$task3 =array("task"=>"Mix a <i>Super defence potion</i> in the Fremennik Province. ", "quest"=>"None", "skill"=>"Herblore:66", "item"=>"<i>Vial of water</i>, <i>Cadantine</i>, <i>White berries</i>(<i>Cadantine potion (unf)</i> with <i>White berries</i> also works) ");
		$task4 =array("task"=>"Steal from the Keldagrim Gem Stall. ", "quest"=>"Started: The Giant Dwarf", "skill"=>"Thieving:75", "item"=>"None");
		$task5 =array("task"=>"Craft a Fremennik shield on Neitiznot. ", "quest"=>"The Fremennik Isles", "skill"=>"Woodcutting:56", "item"=>"Any axe, 2 arctic pine logs, hammer, 1 rope, 1 bronze nail. ");
		$task6 =array("task"=>"Mine 5 adamantite ores on Jatizso. ", "quest"=>"The Fremennik Isles", "skill"=>"Mining:70", "item"=>"Any pickaxe. A dragon pickaxe is recommended to get a temporary boost from 67 to 70.");
		$task7 =array("task"=>"Obtain 100% support from your kingdom subjects. ", "quest"=>"Throne of Miscellania", "skill"=>"None", "item"=>"Rake, pickaxe, axe, harpoon and/or lobster cage, depending on how you plan to gain support (it is recommended to use a rake or axe for fastest favour).");
		$task8 =array("task"=>"Teleport to Waterbirth Island. ", "quest"=>"Lunar Diplomacy", "skill"=>"Magic:72", "item"=>"1 Law rune, 2 Astral runes, 1 Water rune");
		$task9 =array("task"=>"Obtain the Blast Furnace Foreman's permission to use the Blast Furnace for free.", "quest"=>"Started: The Giant Dwarf", "skill"=>"Smithing:60", "item"=>"None. CANNOT be boosted");
		
		$nested = [];
		for($i=1;$i<10;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Fremennik sea boots 3</b><img src="images/untradeable_icons/Fremennik_sea_boots_3.png"/></li>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50</li>
		    <li>Ability to change Enchanted Lyre teleport destination to Waterbirth Island</li>
		    <li>Aviansies in the God Wars Dungeon will now drop adamantite bars in noted form.</li>
			<li>Shortcut to roof of the Troll Stronghold — Requires 73 Agility</li> 
			<li>Stony basalt will now teleport you directly to the roof of the Troll Stronghold — Requires 73 Agility</li>
			<li>Access to 2 new Lunar Spells:</li>
			<ul>
				<li>Tan Leather — Requires 78 Magic, costs 1 Nature rune 2 Astral runes 5 Fire runes. Tans up to 5 hides per spell.</li>
				<li>Recharge Dragonstone — Requires 89 Magic , costs 1 Soul rune 1 Astral rune 4 Water runes. Recharges all items in inventory per spell.</li>
			</ul>
		</ul>
		';
		return $nested;
	}

//Fremennik Elite
	if($arrayName == "fremennikElite"){
		$task1 =array("task"=>"Kill each of the Dagannoth Kings. ", "quest"=>"None", "skill"=>"Combat:High recommended", "item"=>"Combat equipment to kill all three Dagannoth Kings. Must deal most damage to them in order for the kills to count.");
		$task2 =array("task"=>"Craft 56 astral runes at once.", "quest"=>"Lunar Diplomacy", "skill"=>"Runecraft:82", "item"=>"28 Pure essence");
		$task3 =array("task"=>"Create a dragonstone amulet in the Neitiznot furnace. ", "quest"=>"Started The Fremennik Isles", "skill"=>"Crafting:80", "item"=>"Dragonstone, gold bar, amulet mould");
		$task4 =array("task"=>"Complete a lap of the Rellekka Agility Course. ", "quest"=>"None", "skill"=>"Agility:80", "item"=>"None");
		$task5 =array("task"=>"Kill each of the God Wars Dungeon generals. ", "quest"=>"Troll Stronghold", "skill"=>"Agility:70,Strength:70,Hitpoints:70,Ranged:70", "item"=>"Combat equipment to kill the God Wars Dungeon generals, high combat strongly recommended. Boosts cannot be used. You must deal the most damage to the boss in order for the kill to count. ");
		$task6 =array("task"=>"Slay a Spiritual mage within the God Wars Dungeon", "quest"=>"Troll Stronghold", "skill"=>"Slayer:83", "item"=>"Combat equipment");
		
		$nested = [];
		for($i=1;$i<7;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Fremennik sea boots 4</b><img src="images/untradeable_icons/Fremennik_sea_boots_4.png"/></li>
			<ul>
			    <li>Unlimited free teleports to Rellekka</li>
			</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70</li>
		    <li>Dagannoth bones will be dropped in noted form</li>
		    <li>Ability to change Enchanted Lyre teleport location to Jatizso or Neitiznot</li>
			<li>Even faster approval gain in Miscellania</li>
			<li>You will no longer need a Seal of passage to interact with anyone on Lunar Isle.</li>
		</ul>
		';
		return $nested;
	}
//Kandarin Easy
	if($arrayName == "kandarinEasy"){
		$task1 =array("task"=>"Catch a mackerel at Catherby.", "quest"=>"None", "skill"=>"Fishing:16", "item"=>"Big fishing net (Can be purchased for 20 Coins in Catherby)");
		$task2 =array("task"=>"Buy a candle from the candle maker in Catherby. ", "quest"=>"None", "skill"=>"None", "item"=>"3 Coins");
		$task3 =array("task"=>"Collect 5 flax from the Seers' Village flax field. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task4 =array("task"=>"Play the Church organ in the Seer's Village church. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task5 =array("task"=>"Plant jute seeds in the farming patch north of McGrubor's Wood. ", "quest"=>"None", "skill"=>"Farming:13", "item"=>"3 jute seeds, rake and a seed dibber");
		$task6 =array("task"=>"Have Galahad make you a cup of tea. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task7 =array("task"=>"Defeat one of each elemental in the Elemental workshop (Earth elementals in rock form do not count)", "quest"=>"Started: Elemental Workshop I", "skill"=>"None", "item"=>"Battered key, weapon");
		$task8 =array("task"=>" Get a pet fish from Harry in Catherby. (Must talk to Harry with the items in your inventory).", "quest"=>"None", "skill"=>"None", "item"=>"Fishbowl filled with water, Seaweed and 10 Coins");
		$task9 =array("task"=>"Buy a stew from the Seers' Village pub. ", "quest"=>"None", "skill"=>"None", "item"=>"20 Coins");
		$task10 =array("task"=>"Speak to Sherlock between the Sorcerer's Tower and Keep Le Faye. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task11 =array("task"=>"Cross the Coal Trucks log balance. ", "quest"=>"None", "skill"=>"Agility:20", "item"=>"None (Tip: Take a pickaxe to mine coal for a medium diary task.) ");

		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
 		    <li><b>Kandarin headgear 1</b><img src="images/untradeable_icons/Kandarin_headgear_1.png"/></li>
			<ul>
			    <li>Functions as a light source.</li>
			    <li>While worn, normal trees anywhere give double logs when chopped down (no additional experience).</li>
			</ul>
		    <li>The Flax keeper will exchange 30 noted flax daily for 30 noted bow strings.</li>
		    <li>Coal trucks hold 140 coal.</li>
		    <li>5% more marks of grace on Seers\' Village Agility Course.</li>
		    <li>Easy lamp (2,500 experience in any skill over level 30).</li> 
		</ul>
		';
		return $nested;
	}
//Kandarin Medium
	if($arrayName == "kandarinMedium"){
		$task1 =array("task"=>"Complete a lap of the Barbarian agility course.", "quest"=>"Alfred Grimhand's Barcrawl", "skill"=>"Agility:35", "item"=>"None (Tip: Games necklace teleports you to the entrance.) ");
		$task2 =array("task"=>"Create a Superantipoison potion from scratch in the Seers/Catherby area.", "quest"=>"None", "skill"=>"Herblore:48", "item"=>"Vial of water, Irit leaf, Unicorn horn dust");
		$task3 =array("task"=>"Enter the Ranging Guild. ", "quest"=>"None", "skill"=>"Ranged:40", "item"=>"None (Tip: Combat bracelet teleports you to the entrance.) ");
		$task4 =array("task"=>"Use the grapple shortcut to get from the water obelisk to Catherby shore.", "quest"=>"None", "skill"=>"Agility:36,Strength:22,Ranged:39", "item"=>"Mith grapple, Rope, any crossbow, dusty key or 70 Agility. Recommended: Anti-dragon shield and antipoison. Also, a mithril bolt to attach the grapple and rope to. (Tip: Take an unpowered orb and runes for Charge Water Orb for a hard diary task.) ");
		$task5 =array("task"=>"Catch and cook a Bass in Catherby. ", "quest"=>"None", "skill"=>"Fishing:46,Cooking:43", "item"=>"Big fishing net (or 20 coins to buy one at the Catherby Fishing Shop) ");
		$task6 =array("task"=>"Teleport to Camelot", "quest"=>"None", "skill"=>"Magic:45", "item"=>"1 Law rune, 5 Air runes");
		$task7 =array("task"=>"String a maple shortbow in Seers' Village bank. ", "quest"=>"None", "skill"=>"Fletching:50", "item"=>"Maple shortbow (u), Bow string");
		$task8 =array("task"=>"Pick some limpwurt root from the farming patch in Catherby. ", "quest"=>"None", "skill"=>"Farming:26", "item"=>"Limpwurt seed, rake, seed dibber it is strongly recommended that you take supercompost or ultracompost as your limpwurt plant can die easily ");
		$task9 =array("task"=>"Create a Mind helmet.", "quest"=>"Elemental Workshop II", "skill"=>"None", "item"=>"Mind bar,Hammer, Beaten book, Battered key");
		$task10 =array("task"=>"Kill a fire giant in the Waterfall Dungeon.", "quest"=>"Partial Completion: Waterfall Quest", "skill"=>"None", "item"=>"Glarial's amulet (if Waterfall Quest isn't completed), Rope, combat equipment");
		$task11 =array("task"=>"Complete a wave of Barbarian Assault. ", "quest"=>"None", "skill"=>"Combat:High recommended", "item"=>"Combat equipment");
		$task12 =array("task"=>"Steal from the chest in Hemenster.", "quest"=>"None", "skill"=>"Thieving:47", "item"=>"Lockpick—the chest is located in the building between the rassnge and the anvil. ");
		$task13 =array("task"=>"Travel to McGrubor's Wood by Fairy ring.", "quest"=>"Started: Fairytale II - Cure a Queen", "skill"=>"None", "item"=>"Dramen or Lunar staff (Fairy Ring 'ALS')");
		$task14 =array("task"=>"Mine some coal near the coal trucks. ", "quest"=>"None", "skill"=>"Mining:30", "item"=>"Any pickaxe");
		
		$nested = [];
		for($i=1;$i<15;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Kandarin headgear 2</b><img src="images/untradeable_icons/Kandarin_headgear_2.png"/></li>
		    <li>10% extra experience when cutting maple trees in Seers\' Village (stacks with the Lumberjack outfit).</li>
		    <li>33% faster spinning at the Seers\' Village Spinning wheel.</li>
		    <li>The Flax keeper will exchange 60 noted flax daily for 60 noted bow strings.</li>
			<li>Coal trucks hold 280 coal.</li> 
			<li>10% more marks of grace from Seers\' Village Agility Course.</li>
		    <li>5% higher yield from the Catherby herb patch.</li>
		    <li>Medium lamp (7,500 experience in any skill over level 40).</li>
		</ul>
		';
		return $nested;
	}
//Kandarin Hard
	if($arrayName == "kandarinHard"){
		$task1 =array("task"=>"Catch a leaping sturgeon.", "quest"=>"Barbarian Training - Fishing", "skill"=>"Fishing:70, ", "item"=>"Barbarian rod, Fishing bait or Feathers (Fishing level is boostable");
		$task2 =array("task"=>"Complete a lap of the Seers' Village Agility Course. ", "quest"=>"None", "skill"=>"Agility:60", "item"=>"None");
		$task3 =array("task"=>"Create a yew longbow from scratch around Seers' Village. ", "quest"=>"None", "skill"=>"Fletching:70:(Boostable),Woodcutting:60:(Boostable)", "item"=>"Any woodcutting axe, Bow string, Knife (Can be obtained south of Seers' bank) ");
		$task4 =array("task"=>"Enter the Seers' Village courthouse with Piety turned on.", "quest"=>"King's Ransom, Knight Waves Training Grounds", "skill"=>"Prayer:70,Defence:70, (Cannot be boosted)", "item"=>"None");
		$task5 =array("task"=>"Charge a water orb. ", "quest"=>"None", "skill"=>"Magic:56", "item"=>"3 Cosmic runes 30 Water runes, Unpowered orb, Dusty key or at least 70 Agility icon for shortcut ");
		$task6 =array("task"=>"Burn some maple logs with a bow in Seers' Village. ", "quest"=>"Barbarian Firemaking", "skill"=>"Firemaking:65", "item"=>"Maple logs, any bow (except Ogre bow, Crystal bow, Twisted bow, Dark bow, Craw's bow or Cursed goblin bow)");
		$task7 =array("task"=>"Kill a shadow hound in the Shadow Dungeon. ", "quest"=>"Started: Desert Treasure", "skill"=>"None", "item"=>"Ring of visibility");
		$task8 =array("task"=>"Kill a Mithril dragon.", "quest"=>"Barbarian Firemaking", "skill"=>"Combat:High recommended,Prayer:43 (recommended) ", "item"=>"Combat equipment, Anti-dragon shield");
		$task9 =array("task"=>"Purchase and equip a granite body from Barbarian Assault. ", "quest"=>"None", "skill"=>"Strength:50,Defence:50", "item"=>"Combat equipment to pass through Waves 1-10 and 95,000 Coins");
		$task10 =array("task"=>"Have the Seers estate agent decorate your house with Fancy Stone. ", "quest"=>"None", "skill"=>"Construction:50", "item"=>"25,000 coins (30,000 if your house is already decorated with Fancy Stone) You must finish the dialogue with the estate agent, or the task will not count!");
		$task11 =array("task"=>"Smith an adamant spear at Otto's Grotto. ", "quest"=>"Barbarian Smithing (with Tai Bwo Wannai Trio as a prerequisite)", "skill"=>"Smithing:75:(boostable)", "item"=>"Yew logs, Adamantite bar, Hammer");

		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Kandarin headgear 3</b><img src="images/untradeable_icons/Kandarin_headgear_3.png"/></li>
			<ul>
			    <li>One free teleport to Sherlock per day.</li>
			</ul>
		    <li>Thormac will now enchant Battlestaves for 30,000 coins (rather than 40,000).</li>
		    <li>The Flax keeper will exchange 120 noted flax daily for 120 noted bow strings.</li>
		    <li>Coal trucks hold 308 coal.</li>
			<li>Ability to toggle Camelot Teleport to just outside the Seers\' Village bank.</li> 
			<li>15% more marks of grace from Seers\' Village Agility Course.</li>
		    <li>10% more reward points from Barbarian Assault.</li>
		    <li>10% more likely that your enchanted bolts special effect will activate (works in PvP).</li>
			<li>10% higher yield from the Catherby herb patch.</li> 
			<li>Hard lamp (15,000 experience in any skill over level 50).</li> 
		</ul>
		';
		return $nested;
	}
//Kandarin Elite
	if($arrayName == "kandarinElite"){
		$task1 =array("task"=>"Read the blackboard at Barbarian Assault after reaching level 5 in every role. ", "quest"=>"None", "skill"=>"Combat:High recommended", "item"=>"None");
		$task2 =array("task"=>"Pick some dwarf weed from the herb patch at Catherby. ", "quest"=>"None", "skill"=>"Farming:79", "item"=>"Dwarf weed seed, Seed dibber, Spade, Rake, Ultracompost (recommended)");
		$task3 =array("task"=>"Fish and cook 5 sharks in Catherby (at the range next to the bank) using the Cooking gauntlets. ", "quest"=>"Family Crest", "skill"=>"Fishing:76:(Boostable),Cooking:80:(Boostable)", "item"=>"Harpoon, Cooking gauntlets");
		$task4 =array("task"=>"Mix a Stamina mix on top of the Seers' Village bank. ", "quest"=>"Barbarian Herblore Training", "skill"=>"Herblore:86,Agility:60", "item"=>"Stamina potion (2-dose), Caviar");
		$task5 =array("task"=>"Smith a rune hasta at Otto's Grotto. ", "quest"=>"Barbarian Smithing Training", "skill"=>"Smithing:90", "item"=>"Runite bar, Magic logs, Hammer");
		$task6 =array("task"=>"Construct a pyre ship from magic logs.", "quest"=>"Barbarian Firemaking Training", "skill"=>"Firemaking:85,Crafting:85", "item"=>"Magic logs, Chewed bones, Tinderbox, and any woodcutting axe");
		$task7 =array("task"=>"Teleport to Catherby. ", "quest"=>"Lunar Diplomacy", "skill"=>"Magic:87", "item"=>"3 Law runes 3 Astral runes 10 Water runes");
		
		$nested = [];
		for($i=1;$i<8;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Kandarin headgear 4</b><img src="images/untradeable_icons/Kandarin_headgear_4.png"/></li>
			<ul>
			    <li>Unlimited teleports to Sherlock</li>
			</ul>
		    <li>Thormac will now enchant Battlestaves for 20,000 coins (rather than 30,000).</li>
		    <li>The Flax keeper will exchange 250 noted flax daily for 250 noted bow strings.</li>
		    <li>The first 200 coal placed in the coal trucks every day are transported to your bank.</li>
			<li>50% discount from Otto when making Zamorakian spears into hastae.</li> 
			<li>15% higher yield from the Catherby herb patch.</li>
		    <li>Elite lamp (50,000 experience in any skill over level 70).</li> 
		</ul>
		';
		return $nested;
	}
//Karamja Easy
	if($arrayName == "karamjaEasy"){
		$task1 =array("task"=>"Pick 5 bananas from the plantation located east of the volcano.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task2 =array("task"=>"Use the rope swing to travel to the Moss Giant Island north-west of Karamja. ", "quest"=>"None", "skill"=>"Agility:10", "item"=>"None");
		$task3 =array("task"=>"Mine some gold from the rocks on the north-west peninsula of Karamja. ", "quest"=>"None", "skill"=>"Mining:40", "item"=>"Any pickaxe");
		$task4 =array("task"=>"Travel to Port Sarim via the dock, east of Musa Point.", "quest"=>"None", "skill"=>"None", "item"=>"30 coins or Ring of charos (a) (30 more to get back)");
		$task5 =array("task"=>"Travel to Ardougne via the port near Brimhaven. ", "quest"=>"None", "skill"=>"None", "item"=>"30 coins or Ring of charos (a) (30 more to get back");
		$task6 =array("task"=>"Explore Cairn Isle to the west of Karamja. ", "quest"=>"None", "skill"=>"Agility:15", "item"=>"Dramen Staff - if you use the local Fairy Ring code 'ckr'");
		$task7 =array("task"=>"Use the fishing spots north of the banana plantation. ", "quest"=>"None", "skill"=>"None", "item"=>"A Harpoon, Lobster pot, Small fishing net, Fishing rod with Bait, or Barbarian fishing");
		$task8 =array("task"=>"Collect 5 seaweed from anywhere on Karamja. ", "quest"=>"None", "skill"=>"None", "item"=>"Some seaweed can be found near Jiminua's shop. You can just drop and pick up the same seaweed five times; it will still count. ");
		$task9 =array("task"=>"Attempt the TzHaar Fight Pits or Fight Cave. ", "quest"=>"None", "skill"=>"None", "item"=>"None. Quickest way to complete this is to just enter and leave the Fight Caves.");
		$task10 =array("task"=>"Kill a jogre in the Pothole Dungeon.", "quest"=>"None", "skill"=>"None", "item"=>"A weapon");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
 		    <li><b>Karamja gloves 1</b><img src="images/untradeable_icons/Karamja_gloves_1.png"/></li>
			<ul>
			    <li>Boat trips between Port Sarim and Musa Point and between Ardougne and Brimhaven reduced from 30 coins to 15 while worn.</li>
			    <li>Lower trading stick prices in Tai Bwo Wannai shops while worn.</li>
			    <li>Better deals in shops on Karamja when worn (shops buy items from you for more gold/tokkul, and sell items to you for less gold/tokkul)</li>
			</ul>
		    <li>1 Antique lamp worth 1,000 experience in any skill</li>
		</ul>
		';
		return $nested;
	}
//Karamja Medium
	if($arrayName == "karamjaMedium"){
		$task1 =array("task"=>"Claim a ticket from the Agility arena in Brimhaven. ", "quest"=>"None", "skill"=>"Agility:30", "item"=>"200 Coins");
		$task2 =array("task"=>"Discover hidden wall in the dungeon below the volcano.", "quest"=>"Partial completion: Dragon Slayer", "skill"=>"None", "item"=>"None");
		$task3 =array("task"=>"Visit the Isle of Crandor via the dungeon below the volcano. ", "quest"=>"Partial completion: Dragon Slayer", "skill"=>"None", "item"=>"None");
		$task4 =array("task"=>"Use Vigroy and Hajedy's cart service. ", "quest"=>"Shilo Village", "skill"=>"None", "item"=>"200 Coins");
		$task5 =array("task"=>"Earn 100% favour in the Tai Bwo Wannai Cleanup minigame.", "quest"=>"Jungle Potion", "skill"=>"Woodcutting:10", "item"=>"Tai Bwo Wannai Cleanup items (Machete, Antipoison, Magic defensive armour, food)");
		$task6 =array("task"=>"Cook a Spider on stick.", "quest"=>"None", "skill"=>"Cooking:16", "item"=>"Spider carcass, Skewer sticks (made from using a Machete on Thatching spars) or an Arrow shaft");
		$task7 =array("task"=>"Charter the Lady of the Waves from south of Cairn Isle to Port Khazard. ", "quest"=>"Shilo Village", "skill"=>"None", "item"=>"25-50 Coins (The number of coins needed is random)");
		$task8 =array("task"=>"Cut a log from a teak tree.", "quest"=>"Jungle Potion", "skill"=>"Woodcutting:35", "item"=>"100 trading sticks (to enter Hardwood Grove), any Woodcutting axe OR any Machete, any woodcutting axe (to enter Kharazi Jungle)");
		$task9 =array("task"=>"Cut a log from a mahogany tree.", "quest"=>"Jungle Potion", "skill"=>"", "item"=>"100 trading sticks (to enter Hardwood Grove), any Woodcutting axe OR any Machete, any Woodcutting axe (to enter Kharazi Jungle) ");
		$task10 =array("task"=>"Catch a karambwan.", "quest"=>"Partial Completion: Tai Bwo Wannai Trio", "skill"=>"Fishing:65:(Boostable)", "item"=>"Karambwan vessel, Raw karambwanji, Small fishing net");
		$task11 =array("task"=>"Exchange gems with Safta Doc in the house with an anvil in the northern part of Tai Bwo Wannai (must be in cleanup mode) for a machete.", "quest"=>"Jungle Potion", "skill"=>"None", "item"=>"Gout tuber, one of the following sets: 3 cut/uncut Opal, Jade, or Red Topaz, and 300 trading sticks");
		$task12 =array("task"=>"Use the gnome glider to travel to Karamja. ", "quest"=>"The Grand Tree", "skill"=>"None", "item"=>"None");
		$task13 =array("task"=>"Grow a healthy fruit tree in the patch near Brimhaven. ", "quest"=>"None", "skill"=>"Farming:27", "item"=>"Any fruit tree seed (or its sapling version), Spade, Rake");
		$task14 =array("task"=>"Trap a Horned Graahk.", "quest"=>"None", "skill"=>"Hunter:41", "item"=>"Teasing stick, Knife, Logs");
		$task15 =array("task"=>"Chop the vines to gain deeper access to Brimhaven Dungeon.", "quest"=>"None", "skill"=>"Woodcutting:10", "item"=>"Any woodcutting axe, 875 Coins");
		$task16 =array("task"=>"Cross the lava using the stepping stones within Brimhaven Dungeon. ", "quest"=>"None", "skill"=>"Agility:12", "item"=>"Any woodcutting axe, 875 Coins");
		$task17 =array("task"=>"Climb the stairs within Brimhaven Dungeon. ", "quest"=>"None", "skill"=>"Woodcutting:10", "item"=>"Any woodcutting axe, 875 coins (Warning: Beware of level 92 greater demons at the top of the stairs.) ");
		$task18 =array("task"=>"Charter a ship from the Shipyard in the far east of Karamja.", "quest"=>"The Grand Tree", "skill"=>"None", "item"=>"200 Coins if travelling to Brimhaven (100 Coins, while wearing Ring of charos) ");
		$task19 =array("task"=>"Mine a red topaz from a gem rock (either from Shilo Village or Tai Bwo Wannai Cleanup).", "quest"=>"Shilo Village or Jungle Potion", "skill"=>"Mining:40", "item"=>"Any pickaxe");
		
		$nested = [];
		for($i=1;$i<20;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Karamja gloves 2</b><img src="images/untradeable_icons/Karamja_gloves_2.png"/></li>
			<ul>
			    <li>10% additional Agility experience from obstacles in the Brimhaven Agility Arena while worn</li>
			    <li>Increased Agility experience from cashing in Agility tickets while worn</li>
			</ul>
		    <li>1 Antique lamp worth 5,000 experience in any skill above 30</li>
		</ul>
		';
		return $nested;
	}
//Karamja Hard
	if($arrayName == "karamjaHard"){
		$task1 =array("task"=>"Become the champion of the Fight Pit. ", "quest"=>"None", "skill"=>"None", "item"=>"None. Can be done with only one other person.");
		$task2 =array("task"=>"Kill a Ket-Zek in the Fight Caves. ", "quest"=>"None", "skill"=>"Prayer:High Recommended", "item"=>"None");
		$task3 =array("task"=>"Eat an oomlie wrap.", "quest"=>"None", "skill"=>"None", "item"=>"Oomlie wraps are made by using a Palm leaf on Raw oomlie");
		$task4 =array("task"=>"Craft some Nature runes.", "quest"=>"Rune Mysteries", "skill"=>"Runecraft:44", "item"=>"Pure essence, Nature talisman (or access to the Abyss) ");
		$task5 =array("task"=>"Cook a raw karambwan thoroughly.", "quest"=>"Tai Bwo Wannai Trio", "skill"=>"Cooking:30", "item"=>"Talk to Tinsay to learn to cook a karambwan thorougly. (he can be found in the southernmost hut in Tai Bwo Wannai)");
		$task6 =array("task"=>"Kill a Deathwing in the dungeon under the Kharazi Jungle. ", "quest"=>"Legends' Quest", "skill"=>"Woodcutting:15,Strength:50,Agility:50,Thieving:50,Mining:52", "item"=>"Any woodcutting axe, Machete, any pickaxe, Lockpick");
		$task7 =array("task"=>"Use the crossbow shortcut south of the volcano. ", "quest"=>"None", "skill"=>"Agility:53,Ranged:42,Strength:21", "item"=>"
	Any crossbow, Mith grapple");
		$task8 =array("task"=>"Collect 5 palm leaves. ", "quest"=>"Legends' Quest", "skill"=>"Woodcutting:15", "item"=>"Any Woodcutting axe, Machete (Tip: You can drop and pick up one palm leaf five times.) ");
		$task9 =array("task"=>"Be assigned a Slayer task by Duradel in Shilo Village.", "quest"=>"Shilo Village", "skill"=>"Combat:100,Slayer:50", "item"=>"None");
		$task10 =array("task"=>"Kill a metal dragon in Brimhaven Dungeon. ", "quest"=>"None", "skill"=>"Agility:12,Woodcutting:34", "item"=>"875 Coins, any Woodcutting axe, Anti-dragon shield and Antifire potion to negate all damage ");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Karamja gloves 3</b><img src="images/untradeable_icons/Karamja_gloves_3.png"/></li>
			<ul>
			    <li>Unlimited teleports to the underground portion of the Shilo Village mine</li>
			</ul>
		    <li>1 Antique lamp worth 10,000 experience in any skill above 40</li>
		    <li>Access to the underground portion of the Shilo Village mine</li>
		</ul>
		';
		return $nested;
	}
//Karamja Elite
	if($arrayName == "karamjaElite"){
		$task1 =array("task"=>"Craft 56 nature runes at once.", "quest"=>"None", "skill"=>"Runecraft:91", "item"=>"Nature tiara and 28 Pure essence");
		$task2 =array("task"=>"Equip a fire cape or infernal cape in Mor Ul Rek. ", "quest"=>"None", "skill"=>"None", "item"=>"Fire cape or Infernal cape");
		$task3 =array("task"=>"Check the health of a palm tree in Brimhaven.", "quest"=>"None", "skill"=>"Farming:68", "item"=>"1 Palm tree seed (or 1 Palm sapling), 15 Papaya fruits (recommended to protect), Spade");
		$task4 =array("task"=>"Create an Anti-venom potion whilst standing in the Horseshoe mine. ", "quest"=>"None", "skill"=>"Herblore:87", "item"=>"1 Antidote++, 5-20 Zulrah's scales (5 per dose) ");
		$task5 =array("task"=>"Check the health of your Calquat tree patch.", "quest"=>"None", "skill"=>"Farming:72", "item"=>"1 Calquat tree seed (or 1 Calquat sapling), 8 Poison ivy berries (recommended to protect) ");
		
		$nested = [];
		for($i=1;$i<6;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
	   		<li><b>Karamja gloves 4</b><img src="images/untradeable_icons/Karamja_gloves_4.png"/></li>
			<ul>
			    <li>10% chance at receiving double tickets in the Brimhaven Agility Arena (the gloves do not need to be worn)</li>
			    <li>Unlimited teleports to Duradel</li>
			</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70</li>
		    <li>One free resurrection per day, in the fight caves.</li>
		    <li>Double Tokkul from the Fight Caves and Inferno</li>
			<li>Shortcut across Shilo Village river</li> 
			<li>Noted red dragonhide from Brimhaven Dungeon</li>
		    <li>Shortcut to red dragons</li>
		    <li>Free access to Shilo Village furnace</li>
			<li>Free access to the Hardwood Grove</li> 
			<li>Metal dragons found in Brimhaven dungeon drop noted bars (can be toggled on/off with the right-click Toggle option on Pirate Jackie the Fruit).</li> 
		</ul>
		';
		return $nested;
	}

//Lumbridge Easy
	if($arrayName == "lumbridgeEasy"){
		$task1 =array("task"=>"Complete a lap of the Draynor Village Agility Course.", "quest"=>"None", "skill"=>"Agility:10", "item"=>"None");
		$task2 =array("task"=>"Slay a cave bug in the Lumbridge Swamp Caves.", "quest"=>"None", "skill"=>"Slayer:7", "item"=>"Light source, weapon, and rope (if you have never entered the area through the surface of Lumbridge Swamp before) ");
		$task3 =array("task"=>"Have Sedridor teleport you to the Rune essence mine.", "quest"=>"Rune Mysteries", "skill"=>"None", "item"=>"None");
		$task4 =array("task"=>"Craft some water runes.", "quest"=>"Rune Mysteries", "skill"=>"Runecraft:5", "item"=>"Rune or Pure essence and Water talisman, Water tiara, or access to the Abyss");
		$task5 =array("task"=>"Learn your age from Hans in Lumbridge.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task6 =array("task"=>"Pickpocket a man or woman in Lumbridge.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task7 =array("task"=>"Chop and burn some Oak logs in Lumbridge.", "quest"=>"None", "skill"=>"Woodcutting:15,Firemaking:15", "item"=>"Any Woodcutting axe, Tinderbox");
		$task8 =array("task"=>"Kill a zombie in the Draynor Sewers. ", "quest"=>"None", "skill"=>"None", "item"=>"Any weapon. Make sure you see the notification before leaving the sewer, the death animation must complete before you get the achievement. ");
		$task9 =array("task"=>"Catch some anchovies in Al-Kharid.", "quest"=>"None", "skill"=>"Fishing:15", "item"=>"Small fishing net");
		$task10 =array("task"=>"Bake some bread on the Lumbridge castle kitchen range. ", "quest"=>"Cook's Assistant", "skill"=>"None", "item"=>"Any pickaxe");
		$task11 =array("task"=>"Mine some iron ore at the Al-Kharid mine. ", "quest"=>"None", "skill"=>"Mining:15", "item"=>"Any pickaxe");
		$task12 =array("task"=>"Enter the H.A.M. Hideout.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		
		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
 		    <li><b>Explorer\'s ring 1</b><img src="images/untradeable_icons/Explorer\'s_ring_1.png"/></li>
			<ul>
			    <li>30 casts of Low Level Alchemy per day without runes (does not provide experience, unless used in the Alchemist\'s Playground in the Mage Training Arena)</li>
			    <li>50% run energy replenish twice a day</li>
			</ul>
		    <li>1 Antique lamp worth 2,500 experience in any skill above 30</li>
		</ul>
		';
		return $nested;
	}
//Lumbridge Medium
	if($arrayName == "lumbridgeMedium"){
		$task1 =array("task"=>"Complete a lap of the Al Kharid Agility Course.", "quest"=>"None", "skill"=>"Agility:20", "item"=>"None");
		$task2 =array("task"=>"Grapple across the River Lum.", "quest"=>"None", "skill"=>"Agility:8,Strength:19,Ranged:37", "item"=>"Any crossbow, Mith grapple (59 smithing and fletching required for ironmen, or access to Ancient cavern, skeleton warlord rare drop)");
		$task3 =array("task"=>"Purchase an upgraded device from Ava. ", "quest"=>"Animal Magnetism", "skill"=>"Ranged:50", "item"=>"75 Steel arrows, and 999 Coins or Ava's attractor");
		$task4 =array("task"=>"Travel to the Wizards' Tower by Fairy ring.", "quest"=>"Started: Fairytale II - Cure a Queen", "skill"=>"None", "item"=>"Dramen staff or Lunar staff Fairy Ring code 'DIS'");
		$task5 =array("task"=>"Cast the Lumbridge Teleport spell. ", "quest"=>"None", "skill"=>"Magic:31", "item"=>"1 Law rune, 1 Earth rune, 3 Air runes");
		$task6 =array("task"=>"Catch some salmon in Lumbridge", "quest"=>"None", "skill"=>"Fishing:30", "item"=>"Fly fishing rod, Feathers");
		$task7 =array("task"=>"Craft a coif in the Lumbridge cow pen (eastern cows).", "quest"=>"None", "skill"=>"Crafting:38", "item"=>"Leather, needle, thread");
		$task8 =array("task"=>"Chop some willow logs in Draynor Village.", "quest"=>"None", "skill"=>"Woodcutting:30", "item"=>"Any axe");
		$task9 =array("task"=>"Pickpocket Martin the Master Gardener. ", "quest"=>"None", "skill"=>"Thieving:38", "item"=>"None");
		$task10 =array("task"=>"Get a Slayer task from Chaeldar.", "quest"=>"Lost City", "skill"=>"Combat:70", "item"=>"Dramen staff or Lunar staff");
		$task11 =array("task"=>"Catch an essence or eclectic impling in Puro-Puro.", "quest"=>"Lost City", "skill"=>"Hunter:42", "item"=>"Dramen staff or Lunar staff, Butterfly net, Impling jar ");
		$task12 =array("task"=>"Craft some lava runes at the fire altar in Al Kharid.", "quest"=>"Rune Mysteries", "skill"=>"Runecraft:23", "item"=>"Fire talisman or Fire tiara, Earth talisman, Earth runes, and Pure essence.");
		
		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Explorer\'s ring 2</b><img src="images/untradeable_icons/Explorer\'s_ring_2.png"/></li>
			<ul>
			    <li>50% run energy replenish 3 times a day</li>
			    <li>3 daily teleports to cabbage patch near Falador farm</li>
			</ul>
		    <li>1 Antique lamp worth 7,500 experience in any skill above 40</li>
		    <li>Access to Draynor Village wall shortcut</li>
		</ul>
		';
		return $nested;
	}
//Lumbridge Hard
	if($arrayName == "lumbridgeHard"){
		$task1 =array("task"=>"Cast Bones to Peaches in Al Kharid Palace.", "quest"=>"None", "skill"=>"Magic:60", "item"=>"Bones, 2 Nature runes, 4 Earth runes, 4 Water runes");
		$task2 =array("task"=>"Squeeze past the jutting wall on your way to the cosmic altar.", "quest"=>"Lost City", "skill"=>"Agility:46", "item"=>"Dramen staff or Lunar staff");
		$task3 =array("task"=>"Craft 56 Cosmic runes simultaneously.", "quest"=>"Lost City", "skill"=>"Runecraft:59", "item"=>"28 Pure essence and Cosmic tiara or access to the Abyss");
		$task4 =array("task"=>"Travel from Lumbridge to Edgeville on a waka canoe. ", "quest"=>"None", "skill"=>"Woodcutting:57", "item"=>"Any Woodcutting axe");
		$task5 =array("task"=>"Collect at least 100 Tears of Guthix in one visit.", "quest"=>"Tears of Guthix", "skill"=>"None", "item"=>"None. Games necklace for quick teleportation and having many quest points (around 175+) are highly recommended.");
		$task6 =array("task"=>"Take the train from Dorgesh-Kaan to Keldagrim.", "quest"=>"Another Slice of H.A.M.", "skill"=>"None", "item"=>"Train is located on the second level of the Dorgesh-Kaan city, south-west corner.");
		$task7 =array("task"=>"Purchase some Barrows gloves from the Culinaromancer's Chest.", "quest"=>"Full Completion: Recipe for Disaster", "skill"=>"Requirements of quests required", "item"=>"130,000 Coins");
		$task8 =array("task"=>"Pick some belladonna from the farming patch at Draynor Manor.", "quest"=>"None", "skill"=>"Farming:63", "item"=>"Belladonna seed, Seed dibber, Spade, Rake, any gloves. (Note: it will take 320 min to grow.) ");
		$task9 =array("task"=>"Light your mining helmet in the Lumbridge Castle basement.", "quest"=>"None", "skill"=>"Firemaking:65", "item"=>"Tinderbox, Mining helmet");
		$task10 =array("task"=>"Recharge your prayer at Clan Wars with Smite activated.", "quest"=>"None", "skill"=>"Prayer:52 (Cannot be boosted)", "item"=>"None");
		$task11 =array("task"=>"Craft, string and enchant an amulet of power in Lumbridge (not upstairs in castle).", "quest"=>"None", "skill"=>"Crafting:70,Magic:57", "item"=>"Gold bar, Cut diamond, Amulet mould, Ball of wool, 1 Cosmic rune, 10 Earth runes");
		
		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Explorer\'s ring 3</b><img src="images/untradeable_icons/Explorer\'s_ring_3.png"/></li>
			<ul>
			    <li>50% run energy replenish 4 times a day</li>
			    <li>Unlimited teleports to cabbage patch near Falador farm</li>
			</ul>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50</li>
		    <li>Access to a shortcut from Lumbridge Swamp to the desert</li>
		    <li>10% increased experience from Tears of Guthix</li>
		</ul>
		';
		return $nested;
	}
//Lumbridge Elite
	if($arrayName == "lumbridgeElite"){
		$task1 =array("task"=>"Steal from a Dorgesh-Kaan rich chest.", "quest"=>"Death to the Dorgeshuun", "skill"=>"Thieving:78", "item"=>"Lockpick");
		$task2 =array("task"=>"Pickpocket Movario on the Dorgesh-Kaan Agility Course.", "quest"=>"Death to the Dorgeshuun", "skill"=>"Agility:70,Ranged:70,Strength:70", "item"=>"Any crossbow, Mith grapple, a light source");
		$task3 =array("task"=>"Chop some magic logs at the Mage Training Arena.", "quest"=>"None", "skill"=>"Woodcutting:75", "item"=>"Any Woodcutting Axe");
		$task4 =array("task"=>"Smith an adamant platebody down Draynor Sewer.", "quest"=>"None", "skill"=>"Smithing:88", "item"=>"5 Adamantite bars, Hammer");
		$task5 =array("task"=>"Craft 140 or more Water runes at once. ", "quest"=>"Rune Mysteries", "skill"=>"Runecraft:76", "item"=>"28 Rune essence or Pure essence and water tiara");
		$task6 =array("task"=>"Perform the Quest point cape emote in the Wise Old Man's house.", "quest"=>"All requests", "skill"=>"All required for quests", "item"=>"Quest point cape");
		
		$nested = [];
		for($i=1;$i<7;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Explorer\'s ring 4</b><img src="images/untradeable_icons/Explorer\'s_ring_4.png"/></li>
			<ul>
			    <li>100% run energy replenish 3 times a day</li>
			    <li>30 casts of High Level Alchemy per day (does not provide experience, unless used in the Alchemist\'s Playground in the Mage Training Arena)</li>
			</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70</li>
		    <li>6th slot to block Slayer tasks with</li>
		    <li>20% discount on items in the Culinaromancer\'s Chest</li>
		    <li>Ability to use Fairy rings without the need of a Dramen or Lunar staff</li> 
		</ul>
		';
		return $nested;
	}

//Morytania Easy
	if($arrayName == "morytaniaEasy"){
		$task1 =array("task"=>"Craft any Snelm from scratch in Morytania. ", "quest"=>"None", "skill"=>"Crafting:15", "item"=>"Chisel, Snail shell (Blamish Shells works too)");
		$task2 =array("task"=>"Cook a thin snail on the Port Phasmatys range.", "quest"=>"None", "skill"=>"Cooking:12", "item"=>"Thin snail, (2 ecto-tokens and a Ghostspeak amulet to enter Port Phasmatys if Ghosts Ahoy is not completed)");
		$task3 =array("task"=>"Get a Slayer assignment from Mazchna.", "quest"=>"None", "skill"=>"Combat:High recommended, ", "item"=>"None");
		$task4 =array("task"=>"Kill a banshee in the Slayer Tower.", "quest"=>"None", "skill"=>"Slayer:15", "item"=>"None (Earmuffs or a Slayer helmet are highly recommended)");
		$task5 =array("task"=>"Have Sbott tan something for you.", "quest"=>"None", "skill"=>"None", "item"=>"Any tannable hide, 2-45 Coins");
		$task6 =array("task"=>"Enter Mort Myre Swamp. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task7 =array("task"=>"Kill a ghoul. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task8 =array("task"=>"Place a Scarecrow in the Morytania Flower (patch). ", "quest"=>"None", "skill"=>"Farming:23", "item"=>"Scarecrow (use an empty sack on a hay bale or a haystack to make a hay sack, then combine it with a Bronze spear and then a Watermelon, 47 farming for ironman to get Watermelon).");
		$task9 =array("task"=>"Offer some Bonemeal at the Ectofuntus.", "quest"=>"None", "skill"=>"None", "item"=>"Bonemeal and a Bucket of slime");
		$task10 =array("task"=>"Kill a Werewolf in its human form using the Wolfbane dagger. ", "quest"=>"Priest in Peril", "skill"=>"None", "item"=>"Wolfbane dagger");
		$task11 =array("task"=>"Restore your prayer points at the Nature Grotto.", "quest"=>"Nature Spirit", "skill"=>"None", "item"=>"None");
		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
 		    <li><b>Morytania legs 1</b><img src="images/untradeable_icons/Morytania_legs_1.png"/></li>
		    <li>1 Antique lamp worth 2,500 experience in any skill above 30</li>
		    <li>50% chance of a ghast ignoring you rather than attacking</li>
		    <li>2 daily teleports to the Slime Pit beneath the Ectofuntus</li>
			<li>2.5% more Slayer experience in the Slayer Tower while on a slayer assignment</li> 
		</ul>
		';
		return $nested;
	}
//Morytania Medium
	if($arrayName == "morytaniaMedium"){
		$task1 =array("task"=>"Catch a swamp lizard.", "quest"=>"None", "skill"=>"Hunter:29", "item"=>"At least 1 rope and small fishing net");
		$task2 =array("task"=>"Complete a lap of the Canifis Rooftop Agility Course.", "quest"=>"None", "skill"=>"Agility:40", "item"=>"None");
		$task3 =array("task"=>"Obtain some bark from a hollow tree.", "quest"=>"None", "skill"=>"Woodcutting:45", "item"=>"Any Woodcutting axe Fairy ring code 'ALQ') ");
		$task4 =array("task"=>"Travel to Dragontooth Island.", "quest"=>"None", "skill"=>"None", "item"=>"25 Ecto-tokens (10 with a Ring of charos), Ghostspeak amulet");
		$task5 =array("task"=>"Kill a terror dog.", "quest"=>"Lair of Tarn Razorlor (miniquest)", "skill"=>"Slayer:40", "item"=>"Weapon and armour. A Slayer ring can teleport you nearby.");
		$task6 =array("task"=>"Complete a game of Trouble Brewing.", "quest"=>"Cabin Fever", "skill"=>"Crafting:40", "item"=>"Another player on the opposing team is required to start this game. Merely participating in a game is enough; winning is not required.");
		$task7 =array("task"=>"Board the Swampy boat at the Hollows.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task8 =array("task"=>"Make a batch of cannonballs at the Port Phasmatys furnace.", "quest"=>"Dwarf Cannon, partial completion of Ghosts Ahoy", "skill"=>"Smithing:35", "item"=>"Steel bar and Ammo mould");
		$task9 =array("task"=>"Kill a fever spider on Braindeath Island.", "quest"=>"Rum Deal", "skill"=>"Slayer:42", "item"=>"None (Slayer gloves recommended)");
		$task10 =array("task"=>"Use an ectophial to return to Port Phasmatys.", "quest"=>"Ghosts Ahoy", "skill"=>"None", "item"=>"Ectophial");
		$task11 =array("task"=>"Mix a Guthix balance potion while in Morytania.", "quest"=>"Partial completion: In Aid of the Myreque", "skill"=>"Herblore:22", "item"=>"Restore potion, Garlic and Silver dust");
		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Morytania legs 2</b><img src="images/untradeable_icons/Morytania_legs_2.png"/></li>
		    <li>1 Antique lamp worth 7,500 experience in any skill above 40</li>
		    <li>5 daily teleports to the Slime Pit beneath the Ectofuntus</li>
		    <li>Robin offers a daily reward of 13 free buckets of slime and will exchange 13 bones for 13 pots of Bonemeal</li>
			<li>The legs 2 act as a Ghostspeak amulet when worn</li> 
			<li>5% more Slayer experience in the Slayer Tower while on a slayer assignment</li> 
		</ul>
		';
		return $nested;
	}
//Morytania Hard
	if($arrayName == "morytaniaHard"){
		$task1 =array("task"=>"Enter the Kharyrll portal in your POH through a Portal Chamber. ", "quest"=>"Desert Treasure", "skill"=>"Magic:66,Construction:50:(Boostable)", "item"=>"None if you have already built a portal; 2 Limestone bricks, Hammer, and Saw to build a portal focus if you haven't, and 3 Teak planks, 200 Law runes, 100 Blood runes, Hammer, and Saw to build a portal if you haven't. Must be in your own POH.");
		$task2 =array("task"=>"Climb the advanced spike chain within Slayer Tower.", "quest"=>"None", "skill"=>"Agility:71", "item"=>"None. Climb the spiky chain located on the middle floor in the north eastern room. If you are boosting, bring several agility potions or summer pies.
(Additional note: Bring a Slayer helmet or nosepeg to defend against Aberrant spectres. Also if damage is taken going up the spike chain it won't count towards the achievement). ");
		$task3 =array("task"=>"Harvest some watermelon from the allotment patch on Harmony Island.", "quest"=>"Started The Great Brain Robbery", "skill"=>"Farming:47", "item"=>"3 Watermelon seeds, farming supplies");
		$task4 =array("task"=>"Chop and burn some mahogany logs on Mos Le'Harmless. ", "quest"=>"Cabin Fever", "skill"=>"Woodcutting:50,Firemaking:50", "item"=>"Any Woodcutting axe and tinderbox (a bow CANNOT be used). Witchwood icon recommended while traversing the Mos Le'Harmless Caves along with any light source. ");
		$task5 =array("task"=>"Complete a temple trek with a hard companion. ", "quest"=>"In Aid of the Myreque, Darkness of Hallowvale (If doing Burgh de Rott Ramble) ", "skill"=>"None", "item"=>"Decent weapon and armour.");
		$task6 =array("task"=>"Kill a cave horror.", "quest"=>"Cabin Fever", "skill"=>"Slayer:58", "item"=>"Witchwood icon, Light source (without Fire of Eternal Light)");
		$task7 =array("task"=>"Harvest some Bittercap mushrooms from the patch in Canifis. ", "quest"=>"None", "skill"=>"Farming:53:(Boostable)", "item"=>"Mushroom spore, farming supplies (It is recommended to do this before the other tasks, as the mushrooms can take up to six hours to grow.)");
		$task8 =array("task"=>"Pray at the Altar of Nature with Piety activated. ", "quest"=>"Nature Spirit, King's Ransom", "skill"=>"Prayer:70,Defence:70:(Cannot be boosted)", "item"=>"None");
		$task9 =array("task"=>"Use the shortcut to get to the bridge over the Salve. ", "quest"=>"None", "skill"=>"Agility:65", "item"=>"None. (Located just outside of Paterdomus, along the path south of the temple.) ");
		$task10 =array("task"=>"Mine some mithril ore in the Abandoned Mine. ", "quest"=>"Haunted Mine", "skill"=>"Mining:55", "item"=>"Any pickaxe, Crystal-mine key (obtained during Haunted Mine)");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Morytania legs 3</b><img src="images/untradeable_icons/Morytania_legs_3.png"/></li>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50</li>
		    <li>Robin offers 26 pots of Bonemeal and 26 free buckets of slime each day in exchange for bones.</li>
		    <li>50% more Prayer experience from burning shade remains</li>
			<li>Access to a shortcut across the estuary on Mos Le\'Harmless (60 Agility)</li> 
			<li>50% more runes from the Barrows chest</li>
		    <li>Bonecrusher - an item that when carried automatically crushes bone drops and provides half the Prayer experience you would have gotten for burying them. The bonecrusher is claimed and charged with a small amount of Ecto-tokens.</li>
		    <li>Unlimited Burgh de Rott teleports</li>
		    <li>7.5% more Slayer experience in the Slayer Tower while on a slayer assignment</li> 
		</ul>
		';
		return $nested;
	}
//Morytania Elite
	if($arrayName == "morytaniaElite"){
		$task1 =array("task"=>"Catch a shark in Burgh de Rott with your bare hands. ", "quest"=>"In Aid of the Myreque, parts of Barbarian Training", "skill"=>"Fishing:96,Strength:76", "item"=>"None");
		$task2 =array("task"=>"Cremate any Shade remains on a Magic or Redwood pyre.", "quest"=>"Shades of Mort'ton", "skill"=>"Firemaking:80", "item"=>"Magic pyre logs, any shade remains, Tinderbox");
		$task3 =array("task"=>"Fertilize the Morytania herb patch using Lunar spells (Fertile Soil). ", "quest"=>"Lunar Diplomacy", "skill"=>"Magic:83", "item"=>"2 Nature runes, 3 Astral runes, 15 Earth runes");
		$task4 =array("task"=>"Craft a Black dragonhide body in Canifis bank. ", "quest"=>"None", "skill"=>"Crafting:84", "item"=>"3 Black d-leather, Needle, Thread");
		$task5 =array("task"=>"Kill an abyssal demon in the Slayer Tower. ", "quest"=>"None", "skill"=>"Slayer:85", "item"=>"Combat equipment ");
		$task6 =array("task"=>"Loot the Barrows chest while wearing any complete Barrows set. ", "quest"=>"None", "skill"=>"For Ahrims,Defence:70,Attack:70,Magic:70,For Karil's,Defence:70,Ranged:70,For Guthan's/Verac's,Defence:70,Attack:70,For Dharok's/Torag's,Defence:70,Attack:70,Strength:70", "item"=>"Any full Barrows equipment set ");
		
		$nested = [];
		for($i=1;$i<7;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Morytania legs 4</b><img src="images/untradeable_icons/Morytania_legs_4.png"/></li>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70</li>
		    <li>Robin offers 39 pots of Bonemeal and 39 free buckets of slime each day in exchange for bones.</li>
		    <li>Unlimited teleports to the slime pit beneath the Ectofuntus</li>
			<li>50% more Firemaking experience when burning Shade remains</li> 
			<li>Bonecrusher now provides full Prayer experience you would have received for burying the bones.</li>
		    <li>Access to a new herb patch on Harmony Island</li>
		    <li>10% more Slayer experience in the Slayer Tower while on a slayer assignment</li>
		</ul>
		';
		return $nested;
	}

//Western Provinces Easy
	if($arrayName == "westernEasy"){
		$task1 =array("task"=>"Catch a copper longtail. ", "quest"=>"None", "skill"=>"Hunter:9", "item"=>"Bird snare. Use Fiary Ring code 'AKQ' to get close to the location.");
		$task2 =array("task"=>"Complete a novice game of Pest Control.", "quest"=>"None", "skill"=>"Combat:40", "item"=>"None");
		$task3 =array("task"=>"Mine some iron ore near Piscatoris. ", "quest"=>"None", "skill"=>"Mining:15", "item"=>"Any pickaxe");
		$task4 =array("task"=>"Complete a lap of the Gnome Agility Course. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task5 =array("task"=>"Score a goal in a Gnome Ball match.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task6 =array("task"=>"Claim any Chompy bird hat from Rantz. ", "quest"=>"Big Chompy Bird Hunting", "skill"=>"Fletching:5,Ranged:30", "item"=>"Must have killed at least 30 Chompy birds or Jubbly birds with ogre bellows, ogre bow, and ogre arrows. Must bring ogre bow to collect hat.");
		$task7 =array("task"=>"Teleport to Pest Control using the Minigame teleports.", "quest"=>"None", "skill"=>"Combat:40", "item"=>"None");
		$task8 =array("task"=>"Collect a swamp toad at the Tree Gnome Stronghold. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task9 =array("task"=>"Have Brimstail teleport you to the Essence mine .", "quest"=>"Rune Mysteries", "skill"=>"None", "item"=>"None");
		$task10 =array("task"=>"Fletch an oak shortbow in the Gnome Stronghold.", "quest"=>"None", "skill"=>"Fletching:20", "item"=>"Oak shortbow (u), bow string ");
		$task11 =array("task"=>"Kill a terrorbird in the terrorbird enclosure.", "quest"=>"None", "skill"=>"None", "item"=>"A weapon");
		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
 		    <li><b>Western banner 1</b><img src="images/untradeable_icons/Western_banner_1.png"/></li>
		    <li>1 Antique lamp worth 2,500 experience in any skill at or above 30</li>
		    <li>25% chance of 2 chompy birds appearing when Chompy bird hunting</li>
		    <li>25 free ogre arrows every day from Rantz</li>
		</ul>
		';
		return $nested;
	}
//Western Provinces Medium
	if($arrayName == "westernMedium"){
		$task1 =array("task"=>"Take the agility shortcut from the Grand Tree to Otto's Grotto. ", "quest"=>"Tree Gnome Village, The Grand Tree ", "skill"=>"Agility:37", "item"=>"None");
		$task2 =array("task"=>"Travel to the Tree Gnome Stronghold by Spirit tree.", "quest"=>"Tree Gnome Village", "skill"=>"None", "item"=>"None");
		$task3 =array("task"=>"Trap a Spined larupia.", "quest"=>"None", "skill"=>"Hunter:31", "item"=>"Teasing stick, logs, knife");
		$task4 =array("task"=>"Fish some bass on Ape Atoll.", "quest"=>"Monkey Madness I", "skill"=>"Fishing:46", "item"=>"Big fishing net");
		$task5 =array("task"=>"Chop and burn some teak logs on Ape Atoll. ", "quest"=>"Monkey Madness I", "skill"=>"Woodcutting:35, Firemaking:35", "item"=>"Any axe, tinderbox");
		$task6 =array("task"=>"Complete an intermediate game of Pest Control. ", "quest"=>"None", "skill"=>"Combat:70", "item"=>"None");
		$task7 =array("task"=>"Travel to the Feldip Hills by Gnome glider. ", "quest"=>"The Grand Tree, One Small Favour ", "skill"=>"None", "item"=>"None");
		$task8 =array("task"=>"Claim a Chompy bird hat from Rantz after registering at least 125 kills. ", "quest"=>"Big Chompy Bird Hunting", "skill"=>"Fletching:5,Ranged:30", "item"=>"Ogre bellows, Ogre bow, Ogre arrows");
		$task9 =array("task"=>"Travel from Eagles' Peak to the Feldip Hills by Eagle. ", "quest"=>"Eagles' Peak", "skill"=>"None", "item"=>"Rope");
		$task10 =array("task"=>"Make a Chocolate bomb at the Grand Tree. ", "quest"=>"None", "skill"=>"Cooking:42", "item"=>"Gnomebowl mould, Gianne dough, 4 Chocolate bars, 1 Equa leaf, 2 Pots of cream, 1 Chocolate dust. You must have Gianne's Cook Book in your inventory for this task to trigger properly.");
		$task11 =array("task"=>"Complete a delivery for the Gnome Restaurant. ", "quest"=>"None. Recommended: Grand tree for teleports.", "skill"=>"Cooking:6,-,Cooking:42", "item"=>"None");
		$task12 =array("task"=>"Turn your small crystal seed into a crystal saw.", "quest"=>"The Eyes of Glouphrie", "skill"=>"None", "item"=>"Small crystal seed");
		$task13 =array("task"=>"Mine some gold ore underneath the Grand Tree. ", "quest"=>"The Grand Tree", "skill"=>"Mining:40", "item"=>"Any pickaxe. Enter the mine by climbing down the trapdoor next to King Narnode Shareen, then go north through the roots and head east.");
		
		$nested = [];
		for($i=1;$i<14;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Western banner 2</b><img src="images/untradeable_icons/Western_banner_2.png"/></li>
		    <li>All easy rewards</li>
		    <li>1 Antique lamp worth 7,500 experience in any skill at or above 40</li>
			<li>50% chance of 2 chompy birds appearing when Chompy bird hunting</li>
			<li>Crystal saw holds twice as many charges (56 charges)</li>
		    <li>50 free ogre arrows every day from Rantz</li> 
		</ul>
		';
		return $nested;
	}
//Western Provinces Hard
	if($arrayName == "westernHard"){
		$task1 =array("task"=>"Kill an elf with a crystal bow. ", "quest"=>"Roving Elves", "skill"=>"Ranged:70,Agility:56", "item"=>"Crystal bow");
		$task2 =array("task"=>"Catch and cook a monkfish in Piscatoris.", "quest"=>"Swan Song", "skill"=>"Fishing:62,Cooking:62", "item"=>"Small fishing net");
		$task3 =array("task"=>"Complete a veteran game of Pest Control.", "quest"=>"None", "skill"=>"Combat:100", "item"=>"None");
		$task4 =array("task"=>"Catch a dashing kebbit.", "quest"=>"None", "skill"=>"Hunter:69", "item"=>"500 Coins");
		$task5 =array("task"=>"Complete a lap of the Ape Atoll Agility Course.", "quest"=>"Monkey Madness I", "skill"=>"Agility:48", "item"=>"Ninja monkey greegree");
		$task6 =array("task"=>"Chop and burn some mahogany logs on Ape Atoll. ", "quest"=>"Monkey Madness I", "skill"=>"Woodcutting:50,Firemaking:50", "item"=>"Any Woodcutting axe, Tinderbox");
		$task7 =array("task"=>"Mine some adamantite ore in Tirannwn.", "quest"=>"Regicide", "skill"=>"Mining:70", "item"=>"Any pickaxe (Dragon pickaxe special attack can boost your mining level from 67 to 70.)");
		$task8 =array("task"=>"Check the health of your palm tree in Lletya", "quest"=>"Started: Mourning's Ends Part I", "skill"=>"Farming:68", "item"=>"1 Palm sapling, 15 Papayas (recommended to protect) ");
		$task9 =array("task"=>"Claim a Chompy bird hat from Rantz after registering at least 300 kills. ", "quest"=>"Big Chompy Bird Hunting", "skill"=>"Fletching:5,Ranged:30", "item"=>"Ogre bellows, ogre bow, ogre arrows/brutal arrows ");
		$task10 =array("task"=>"Build an Isafdar painting in your POH Quest Hall. ", "quest"=>"Roving Elves", "skill"=>"Construction:65", "item"=>"3 Mahogany planks, 1 Isafdar painting, Saw, Hammer (CAN boost this using both a crystal saw and orange spicy stews (+8)) ");
		$task11 =array("task"=>"Kill Zulrah.", "quest"=>"Started: Regicide", "skill"=>"Magic:High recommended,Ranged:High recommended", "item"=>"Decent Magic or Ranged weapon and armour");
		$task12 =array("task"=>"Teleport to Ape Atoll.", "quest"=>"Recipe for Disaster (Awowogei sub-quest only)", "skill"=>"Magic:64", "item"=>"2 Law runes, 2 Fire runes, 2 Water runes 1 Banana");
		$task13 =array("task"=>"Pickpocket a gnome. ", "quest"=>"Tree Gnome Village", "skill"=>"Thieving:75", "item"=>"None");
		
		$nested = [];
		for($i=1;$i<14;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Western banner 3</b><img src="images/untradeable_icons/Western_banner_3.png"/></li>
		    <li>All medium rewards</li>
		    <li>1 Antique lamp worth 15,000 experience in any skill at or above 50</li>
		    <li>Ability to upgrade the Void knight top and bottom to have +3 prayer bonus and +2.5% damage boost (ranged and magic) for 200 pest control points each by speaking to the Elite Void Knight</li>
			<li>Access to the locked room under the temple on Ape Atoll (the room with the Monkey skull)</li> 
			<li>Access to the Hunter master\'s new private red chinchompa hunting ground</li>
		    <li>100 free ogre arrows every day from Rantz</li>
		    <li>Teleport crystals can hold up to 5 charges.</li>
			<li>One free daily teleport to the Piscatoris Fishing Colony</li> 
			<li>Islwyn will now offer to sell you a crystal halberd for 750,000 coins.</li>
		</ul>
		';
		return $nested;
	}
//Western Provinces Elite
	if($arrayName == "westernElite"){
		$task1 =array("task"=>"Fletch a magic longbow in the Elven lands. ", "quest"=>"Mourning's Ends Part I", "skill"=>"Fletching:85", "item"=>"Magic longbow (u), bow string");
		$task2 =array("task"=>"Kill the Thermonuclear smoke devil. ", "quest"=>"None", "skill"=>"Slayer:93,(Cannot be boosted)", "item"=>"Weapons and armour. Boosts cannot be used. Slayer task is not required for your first kill. ");
		$task3 =array("task"=>"Have Prissy Scilla protect your magic tree. ", "quest"=>"None", "skill"=>"Farming:75", "item"=>"1 Magic Sapling, 25 Coconuts");
		$task4 =array("task"=>"Use the Elven overpass advanced cliffside shortcut. ", "quest"=>"Underground Pass", "skill"=>"Agility:85", "item"=>"None");
		$task5 =array("task"=>"Equip any complete void set. ", "quest"=>"None", "skill"=>"Combat:40,Attack:42,Strength:42,Defence:42,Hitpoints:42,Ranged:42,Magic:42,Prayer:22,(All cannot be boosted)", "item"=>"Void knight top, Void knight robe, Void knight gloves and either Void mage helm or Void ranger helm or Void melee helm. ");
		$task6 =array("task"=>"Claim a Chompy bird hat from Rantz after registering at least 1,000 kills. ", "quest"=>"Big Chompy Bird Hunting", "skill"=>"Fletching:5,Ranged:30", "item"=>"Ogre bellows, Ogre bow, Ogre arrows");
		$task7 =array("task"=>"Pickpocket an elf.", "quest"=>"Mourning's Ends Part I", "skill"=>"Thieving:85", "item"=>"None");
		$nested = [];
		for($i=1;$i<8;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Western banner 4</b><img src="images/untradeable_icons/Western_banner_4.png"/></li>
		    <li>All hard diary rewards</li>
		    <li>1 Antique lamp worth 50,000 experience in any skill at or above 70</li>
		    <li>2 chompy birds will always appear when Chompy bird hunting.</li>
			<li>Chance of receiving a chompy chick pet when chompy bird hunting</li> 
			<li>Increased Slayer points from Nieve/Steve (to match Duradel)</li>
		    <li>150 free ogre arrows every day from Rantz</li>
		    <li>One free resurrection per day at Zulrah</li>
			<li>Unlimited teleports to the Piscatoris Fishing Colony</li> 
		</ul>
		';
		return $nested;
	}

//Wilderness Diaries
//Wilderness Easy
	if($arrayName == "wildernessEasy"){
		$task1 =array("task"=>"Cast Low Alchemy at the Fountain of Rune.", "quest"=>"None", "skill"=>"Magic:21", "item"=>"Any item that can be alched. Alternatively, the alchemy provided by the Explorer's ring 1 works as well.");
		$task2 =array("task"=>"Enter the Wilderness from the Ardougne or Edgeville lever.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task3 =array("task"=>"Pray at the Chaos Temple in level 38, Western Wilderness. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task4 =array("task"=>"Enter the Chaos Runecrafting temple. ", "quest"=>"None", "skill"=>"None", "item"=>"Chaos talisman or chaos tiara, going through the Abyss works. ");
		$task5 =array("task"=>"Kill a mammoth.", "quest"=>"None", "skill"=>"None", "item"=>"Weapon to kill a mammoth (can be found west of the Chaos Temple) ");
		$task6 =array("task"=>"Kill an earth warrior in the Wilderness beneath Edgeville. ", "quest"=>"None", "skill"=>"Agility:15", "item"=>"A weapon");
		$task7 =array("task"=>"Restore some Prayer points at the Demonic Ruins. ", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task8 =array("task"=>"Enter the King Black Dragon Lair.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task9 =array("task"=>"Collect 5 red spider's eggs from the Wilderness. ", "quest"=>"None", "skill"=>"None", "item"=>"None. Found near the Earth warriors.");
		$task10 =array("task"=>"Mine some iron ore in the Wilderness.", "quest"=>"None", "skill"=>"Mining:15", "item"=>"Any pickaxe. Iron can be found north-west of the Mage of Zamorak. ");
		$task11 =array("task"=>"Have the Mage of Zamorak teleport you to the Abyss.", "quest"=>"Enter the Abyss Miniquest", "skill"=>"None", "item"=>"None");
		$task12 =array("task"=>"Equip any team cape in the Wilderness.", "quest"=>"None", "skill"=>"None", "item"=>"Any team cape");
		
		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Wilderness sword 1</b><img src="images/untradeable_icons/Wilderness_sword_1.png"/></li>
			<ul>
			<li>When wielded, wilderness swords will always be successful slashing webs.</li>
			</ul>
		    <li>1 Antique lamp worth 2,500 experience in any skill above 30</li>
		    <li>Wilderness lever can teleport you to either Edgeville or Ardougne.</li>
		    <li>10 random, free runes from Lundail once per day</li> 
		</ul>
		';
		return $nested;
		}
//Wilderness Medium
	if($arrayName == "wildernessMedium"){
		$task1 =array("task"=>"Mine some mithril ore in the Wilderness.", "quest"=>"None", "skill"=>"Mining:55", "item"=>"Any pickaxe");
		$task2 =array("task"=>"Chop some yew logs from an ent.", "quest"=>"None", "skill"=>"Woodcutting:61", "item"=>"Any axe cannot be boosted. Must be an ent from the wilderness.");
		$task3 =array("task"=>"Enter the Wilderness God Wars Dungeon.", "quest"=>"None", "skill"=>"Agility:60,or,Strength:60", "item"=>"None");
		$task4 =array("task"=>"Complete a lap of the Wilderness Agility Course.", "quest"=>"None", "skill"=>"Agility:52", "item"=>"None");
		$task5 =array("task"=>"Kill a green dragon.", "quest"=>"None", "skill"=>"None", "item"=>"A weapon. Anti-dragon shield or anti-fire potion recommended.");
		$task6 =array("task"=>"Kill an ankou in the Wilderness. ", "quest"=>"None", "skill"=>"None", "item"=>"Weapon to kill Ankou. Found in The Forgotten Cemetery and the Revenant Caves.");
		$task7 =array("task"=>"Charge an earth orb.", "quest"=>"None", "skill"=>"Magic:60", "item"=>"An unpowered orb, 3 Cosmic runes 30 Earth runes");
		$task8 =array("task"=>"Kill a bloodveld in the Wilderness God Wars Dungeon.", "quest"=>"None", "skill"=>"Slayer:50", "item"=>"Weapon to kill Bloodveld, God equipment to keep the gods' followers passive.");
		$task9 =array("task"=>"Sell a mysterious emblem to the Emblem Trader in Edgeville.", "quest"=>"None", "skill"=>"None", "item"=>"A mysterous emblem");
		$task10 =array("task"=>"Smith a Gold helmet in the Resource Area. ", "quest"=>"Nearly full completion: Between a Rock...", "skill"=>"Smithing:50", "item"=>"7500 coins, 3 Gold bars and a Hammer");
		$task11 =array("task"=>"Open the muddy chest in the Lava Maze", "quest"=>"None", "skill"=>"None", "item"=>"Muddy key, knife/slashing weapon");

		
		$nested = [];
		for($i=1;$i<12;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Wilderness sword 2</b><img src="images/untradeable_icons/Wilderness_sword_2.png"/></li>
			<ul>
			<li>When wielded, wilderness swords will always be successful slashing webs.</li>
			</ul>
		    <li>All easy wilderness diary rewards</li>
		    <li>1 Antique lamp worth 7,500 experience in any skill above 40 </li>
		    <li>Faster log cutting from Ents</li>
		    <li>20% off entry to Resource Area (6000gp) </li> 
		    <li>Access to a shortcut in the Deep Wilderness Dungeon (46 Agility required</li>
		    <li>Can have 4 ecumenical keys at a time </li>
		    <li>20 random, free runes from Lundail once per day </li> 
		</ul>
		';
		return $nested;
	}
//Wilderness Hard
	if($arrayName == "wildernessHard"){
		$task1 =array("task"=>"Cast one of the 3 God spells against another player in the Wilderness.", "quest"=>"The Mage Arena Miniquest", "skill"=>"Magic:60", "item"=>"Saradomin staff, Guthix staff, Void knight mace or Zamorak staff, 2 Blood runes 4 Fire runes 4 Air runes (runes vary based on spell) ");
		$task2 =array("task"=>"Charge an air orb. ", "quest"=>"None", "skill"=>"Magic:60", "item"=>"An Unpowered orb, 3 Cosmic rune 30 Air runes");
		$task3 =array("task"=>"Catch a black salamander.", "quest"=>"None", "skill"=>"Hunter:67", "item"=>"Small fishing net, Rope");
		$task4 =array("task"=>"Smith an adamant scimitar in the Resource Area. ", "quest"=>"None", "skill"=>"Smithing:75", "item"=>"Hammer, 6000 Coins (7500 if you haven't completed the medium diaries), 2 Adamantite bars");
		$task5 =array("task"=>" Kill a lava dragon and bury the bones on Lava Dragon Isle.", "quest"=>"None", "skill"=>"None", "item"=>"Weapon to kill a lava dragon, anti-dragon shield recommended(WARNING: Grabbing and burying the bones with Telekinetic Grab will not count towards the task.) ");
		$task6 =array("task"=>"Kill the Chaos Elemental.", "quest"=>"None", "skill"=>"None", "item"=>"Equipment to kill the Chaos Elemental. You must deal the most damage to it; simply assisting a kill will not count towards this task. ");
		$task7 =array("task"=>"Kill the Crazy archaeologist, Chaos Fanatic & Scorpia.", "quest"=>"None", "skill"=>"None", "item"=>"Equipment to kill Crazy archaeologist, Chaos Fanatic and Scorpia. Completing another task will reset the progress of this task (this includes tasks from other diaries). Must deal the most damage to earn the kill.");
		$task8 =array("task"=>"Take the Agility Shortcut from Trollheim into the Wilderness.", "quest"=>"Death Plateau", "skill"=>"Agility:64", "item"=>"None");
		$task9 =array("task"=>"Kill a spiritual warrior in the Wilderness God Wars Dungeon. ", "quest"=>"None", "skill"=>"Slayer:68", "item"=>"Weapon to kill a Spiritual warrior, God equipment to keep the gods' followers passive.");
		$task10 =array("task"=>"Fish some raw lava eel in the Wilderness. ", "quest"=>"None", "skill"=>"Fishing:53", "item"=>"Oily fishing rod, fishing bait, slash weapon to cut the webs");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Wilderness sword 3</b><img src="images/untradeable_icons/Wilderness_sword_3.png"/></li>
			<ul>
			<li>When wielded, wilderness swords will always be successful slashing webs.</li>
			</ul>
		    <li>All medium wilderness diary reward</li>
		    <li>1 Antique lamp worth 15,000 experience in any skill above 50 </li>
		    <li>One free teleport to the Fountain of Rune daily</li>
		    <li>50% more lava shards per lava scale</li> 
		    <li>Access to a shortcut to the Lava Dragon Isle (requires 74 agility) </li>
		    <li>Access to a shortcut to the Lava Maze (requires 82 agility) </li>
		    <li>Can have 5 ecumenical keys at a time </li> 
		    <li>Your first 3 ecumenical keys drop rate will be 1/60, 4th 1/70, 5th 1/80 </li>
		    <li>30 random, free runes from Lundail once per day</li>
		    <li>Able to choose your destination when teleporting through the Ancient Obelisks</li> 
		    <li>50% entrance fee to Resource Area (3,750gp) </li>
		    <li>Wine of zamorak found in the Chaos Temple (hut) will be received in noted form </li>
		</ul>
		';
		return $nested;
	}
//Wilderness Elite
	if($arrayName == "wildernessElite"){
		$task1 =array("task"=>"Kill Callisto, Venenatis & Vet'ion.", "quest"=>"None", "skill"=>"None", "item"=>"Equipment to kill Callisto, Venenatis and Vet'ion. The order does not matter. Completing another task will reset the progress of this task. Like all other boss killcount, you must deal the most damage to the boss; simply assisting in a kill will not count towards this task.");
		$task2 =array("task"=>"Teleport to Ghorrock.", "quest"=>"Desert Treasure", "skill"=>"Magic:96", "item"=>" 2 Law runes, 8 Water runes");
		$task3 =array("task"=>"Fish and cook a dark crab in the Resource Area.", "quest"=>"None", "skill"=>"Fishing:85,Cooking:90", "item"=>"Lobster pot, dark fishing bait, 3750 coins (if hard tasks are done, or else bring 7500). ");
		$task4 =array("task"=>"Smith a rune scimitar from scratch in the Resource Area.", "quest"=>"None", "skill"=>"Mining:85,Smithing:90", "item"=>"Any pickaxe, hammer, 6000 coins if the Wilderness medium diary is done, 3750 coins if the Wilderness hard diary is done (or else bring 7500). Note: You must mine and smelt both runite ore and coal in the resource area for this to work. Superheat does not count here! you may leave the resource area to complete this task. Logging out may reset the task.");
		$task5 =array("task"=>"Steal from the Wilderness Rogues' Chests.", "quest"=>"None", "skill"=>"Thieving:84", "item"=>"None");
		$task6 =array("task"=>"Slay a spiritual mage inside the Wilderness God Wars Dungeon.", "quest"=>"None", "skill"=>"Slayer:83,Agility:60,or,Strength:60", "item"=>"Weapon to kill Spiritual mage, God equipment to keep god followers passive. ");
		$task7 =array("task"=>"Cut and burn some magic logs in the Resource Area.", "quest"=>"None", "skill"=>"Woodcutting:75,Firemaking:75", "item"=>"Any Woodcutting axe, tinderbox, 6000 coins if the Wilderness medium diary is done, 3750 coins if the Wilderness hard diary is done (or else bring 7500). You cannot use a shortbow to light the magic log (Barbarian firemaking) to finish this task. ");
		
		$nested = [];
		for($i=1;$i<8;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
			<li><b>Wilderness sword 4</b><img src="images/untradeable_icons/Wilderness_sword_4.png"/></li>
			<ul>
			<li>When wielded, wilderness swords will always be successful slashing webs.</li>
			</ul>
		    <li>1 Antique lamp worth 50,000 experience in any skill above 70 </li>
		    <li>Unlimited free teleports to the Fountain of Rune</li>
		    <li>Free entry to the Resource Area</li>
		    <li>All dragon bones drops in the Wilderness are noted. (Note: This does not include the King Black Dragon, as his lair is not Wilderness affected.)</li>
		    <li>Noted lava dragon bones can be toggled by speaking to the Lesser Fanatic.</li> 
		    <li>50 random, free runes from Lundail once per day </li>
		    <li>Increased raw dark crab catch rate</li>
		</ul>
		';
		return $nested;
	}


	//Kourend Easy
	if($arrayName == "kourendEasy"){
		$task1 =array("task"=>"Mine some iron ore at the Mount Karuulm mine.", "quest"=>"None", "skill"=>"Mining:15", "item"=>"Any pickaxe");
		$task2 =array("task"=>"Kill a Sand Crab.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task3 =array("task"=>"Hand in a book at the Arceuus Library.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task4 =array("task"=>"Steal from a Hosidius Food Stall.", "quest"=>"15% Hosidius favour", "skill"=>"Thieving:25", "item"=>"None");
		$task5 =array("task"=>"Browse the Warrens General Store.", "quest"=>"Started: The Queen of Thieves", "skill"=>"None", "item"=>"None");
		$task6 =array("task"=>"Take a boat to Land's End.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task7 =array("task"=>"Pray at the altar on the top floor of the Kourend Castle.", "quest"=>"None", "skill"=>"None", "item"=>"None");
		$task8 =array("task"=>"Dig up some saltpetre.", "quest"=>"None", "skill"=>"None", "item"=>"Spade");
		$task9 =array("task"=>"Enter your player-owned house from Hosidius.", "quest"=>"None", "skill"=>"Construction:25", "item"=>"8,750 coins");
		$task10 =array("task"=>"Heal a wounded Shayzien soldier.", "quest"=>"None", "skill"=>"None", "item"=>"Shayzien medpack");
		$task11 =array("task"=>"Create a strength potion in the The Deeper Lode pub.", "quest"=>"None", "skill"=>"Herblore:12", "item"=>"Tarromin potion (unf) or Tarromin & Vial of water, Limpwurt root");
		$task12 =array("task"=>"Fish a Trout from the River Molch.", "quest"=>"None", "skill"=>"Fishing:20", "item"=>"Fly fishing rod, Feathers");
		
		$nested = [];
		for($i=1;$i<13;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='		
		<ul class="pt-2">
		<li><b>Rada\'s blessing 1</b><img src="images/untradeable_icons/Rada\'s_blessing_1.png"/></li>
			<ul>
		   	 	<li>Three teleports to the Kourend Woodland every day</li>
				<li>2% chance to catch two fish at once (no additional experience)</li>
			</ul>
		    <li>1 antique lamp worth 2,500 experience in any skill above 30</li>
		    <li>Halved access cost for Crabclaw Isle</li>
		    <li>Doubled drop rate of Xeric\'s talisman</li> 
		</ul>
		';
		return $nested;
	}
	//Kourend Medium
	if($arrayName == "kourendMedium"){
		$task1 =array("task"=>"Travel to the fairy ring south of Mount Karuulm (CIR).", "quest"=>"Started: Fairytale II - Cure a Queen", "skill"=>"None", "item"=>"Dramen or Lunar staff (none with elite Lumbridge diary completed)");
		$task2 =array("task"=>"Kill a lizardman. (Killing a Lizardman Shaman for the hard task will also complete this one.)", "quest"=>"None", "skill"=>"None", "item"=>"Combat gear");
		$task3 =array("task"=>"Use Kharedst's memoirs to teleport to all five Houses in Great Kourend.", "quest"=>"The Depths of Despair, The Queen of Thieves, Tale of the Righteous, The Forsaken Tower, The Ascent of Arceuus", "skill"=>"None", "item"=>"Kharedst\'s memoirs");
		$task4 =array("task"=>"Mine some volcanic sulphur.", "quest"=>"None", "skill"=>"Mining:42", "item"=>"Any pickaxe and a Face mask, gas mask or slayer helmet to protect against sulphur clouds");
		$task5 =array("task"=>"Enter the Farming Guild.", "quest"=>"60% Hosidius favour", "skill"=>"Farming:45", "item"=>"None");
		$task6 =array("task"=>"Switch to the Arceuus spellbook via Tyss.", "quest"=>"60% Arceuus favour", "skill"=>"None", "item"=>"None");
		$task7 =array("task"=>"Repair a crane within Port Piscarilius.", "quest"=>"None", "skill"=>"Crafting:30", "item"=>"Hammer, 30-100 nails, 3 planks");
		$task8 =array("task"=>"Deliver some intelligence to Captain Ginea.", "quest"=>"40% Shayzien favour", "skill"=>"None", "item"=>"Intelligence, combat gear");
		$task9 =array("task"=>"Catch a Bluegill on Lake Molch.", "quest"=>"None", "skill"=>"Fishing:43,Hunter:35", "item"=>"King worm or fish chunks");
		$task10 =array("task"=>"Use the boulder leap shortcut in the Arceuus essence mine.", "quest"=>"None", "skill"=>"Agility:49", "item"=>"None");
		$task11 =array("task"=>"Subdue the Wintertodt.", "quest"=>"None", "skill"=>"Firemaking:50", "item"=>"Any axe, tinderbox (food, knife and hammer recommended)");
		$task12 =array("task"=>"Catch a chinchompa in the Kourend Woodland.", "quest"=>"Eagle's Peak", "skill"=>"Hunter:53", "item"=>"Box trap");
		$task13 =array("task"=>"Chop some mahogany logs north of the Farming Guild.", "quest"=>"None", "skill"=>"Woodcutting:50", "item"=>"Any axe");

		$nested = [];
		for($i=1;$i<14;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
		<li><b>Rada\'s blessing 2</b><img src="images/untradeable_icons/Rada\'s_blessing_2.png"/></li>
			<ul>
		   	 	<li>Five teleports to the Kourend Woodland every day</li>
				<li>4% chance to catch two fish at once (no additional experience)</li>
			</ul>
		    <li>1 antique lamp worth 7,500 experience in any skill above 40</li>
		    <li>Free access to Crabclaw Isle</li>
			<li>5% chance to mine two Dense essence blocks at once</li> 
			<li>20 free Dynamite a day from Thirus</li>
		</ul>
		';
		return $nested;
	}	
	
	//Kourend Hard
	if($arrayName == "kourendHard"){
		$task1 =array("task"=>"Enter the Woodcutting Guild.", "quest"=>"75% Hosidius favour", "skill"=>"Woodcutting:60", "item"=>"None");
		$task2 =array("task"=>"Smelt an adamantite bar in The Forsaken Tower.", "quest"=>"The Forsaken Tower", "skill"=>"Smithing:70", "item"=>"Adamantite ore, 6 coal");
		$task3 =array("task"=>"Kill a lizardman shaman in the Lizardman Temple.", "quest"=>"100% Shayzien favour", "skill"=>"Combat:Decent recommended", "item"=>"Combat equipment");
		$task4 =array("task"=>"Mine some Lovakite ore.", "quest"=>"30% Lovakengj favour", "skill"=>"Mining:65", "item"=>"Any pickaxe");
		$task5 =array("task"=>"Plant some Logavano seeds at the Tithe Farm.", "quest"=>"100% Hosidius favour", "skill"=>"Farming:74", "item"=>"Seed dibber");
		$task6 =array("task"=>"Kill a zombie in the Shayzien Crypts.", "quest"=>"None", "skill"=>"Combat:Decent recommended", "item"=>"Combat equipment, light source");
		$task7 =array("task"=>"Teleport to Xeric's Heart using Xeric's talisman.", "quest"=>"Architectural Alliance (100% all favour)", "skill"=>"None", "item"=>"	Xeric's talisman, lizardman fang");
		$task8 =array("task"=>"Deliver an artefact to Captain Khaled.", "quest"=>"75% Piscarilius favour", "skill"=>"Thieving:49", "item"=>"Lockpick");
		$task9 =array("task"=>"Kill a wyrm in the Karuulm Slayer Dungeon.", "quest"=>"None", "skill"=>"Slayer:62", "item"=>"	Combat equipment, boots of stone");
		$task10 =array("task"=>"Cast Monster Examine on a mountain troll south of Mount Quidamortem.", "quest"=>"Dream Mentor", "skill"=>"Magic:66", "item"=>"1 Cosmic rune, 1 Astral rune, 1 Mind rune");
		
		$nested = [];
		for($i=1;$i<11;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
		<li><b>Rada\'s blessing 3</b><img src="images/untradeable_icons/Rada\'s_blessing_3.png"/></li>
			<ul>
		   	 	<li>Unlimited teleports to the Kourend Woodland</li>
				<li>6% chance to catch two fish at once (no additional experience)</li>
				<li>3 teleports to Mount Karuulm every day</li>
			</ul>
		    <li>1 antique lamp worth 15,000 experience in any skill above 50</li>
		    <li>Slayer helmet will work as a Shayzien helm (5) after talking to Captain Cleive</li>
			<li>5% increased yield from the Hosidius and Farming Guild herb patches</li> 
			<li>40 free Dynamite a day from Thirus</li>
		</ul>
		';
		return $nested;
	}	

	//Kourend Elite
	if($arrayName == "kourendElite"){
		$task1 =array("task"=>"Craft one or more blood runes.", "quest"=>"100% Arceuus favour", "skill"=>"Runecraft:77,Mining:38,Crafting:38", "item"=>"Any pickaxe and chisel");
		$task2 =array("task"=>"Chop some redwood logs.", "quest"=>"75% Hosidius favour if not growing the tree", "skill"=>"Woodcutting:90,Farming:90,(if growing the tree)", "item"=>"Redwood sapling and spade (if growing the tree), any axe");
		$task3 =array("task"=>"Defeat Skotizo in the Catacombs of Kourend.", "quest"=>"None", "skill"=>"Combat:High recommended", "item"=>"Dark totem, combat equipment");
		$task4 =array("task"=>"Catch an anglerfish and cook it whilst in Great Kourend.", "quest"=>"100% Port Piscarilius favour", "skill"=>"Fishing:82,Cooking:84", "item"=>"Fishing rod and sandworms");
		$task5 =array("task"=>"Kill a hydra in the Karuulm Slayer Dungeon.", "quest"=>"None", "skill"=>"Slayer:95,Combat:High recommended", "item"=>"Good combat equipment (Blowpipe works well)");
		$task6 =array("task"=>"Create an Ape Atoll teleport tablet.", "quest"=>"100% Arceuus favour, Monkey Madness I", "skill"=>"Magic:90", "item"=>"Dark essence block, 2 Soul runes, 2 Blood runes, 2 Law runes");
		$task7 =array("task"=>"Complete a raid in the Chambers of Xeric.", "quest"=>"None", "skill"=>"Combat:High recommended", "item"=>"Combat equipment (many switches may be needed)");
		$task8 =array("task"=>"Create your own battlestaff from scratch within the Farming Guild.", "quest"=>"60% Hosidius favour", "skill"=>"Farming:85,Fletching:40", "item"=>"Celastrus seed, knife. Optional: 8 potato cactus to protect your crop");
		
		$nested = [];
		for($i=1;$i<9;$i++){
			array_push($nested,${"task$i"});
		}
		$nested['reward']='
		<ul class="pt-2">
		<li><b>Rada\'s blessing 4</b><img src="images/untradeable_icons/Rada\'s_blessing_4.png"/></li>
			<ul>
		   	 	<li>Unlimited teleports to Mount Karuulm</li>
				<li>8% chance to catch two fish at once everywhere when equipped (no additional experience)</li>
				<li>An additional +1 prayer bonus given by the blessing (2 prayer bonus)</li>
			</ul>
		    <li>1 antique lamp worth 50,000 experience in any skill above 70</li>
		    <li>20 Slayer points for completing Slayer tasks from Konar quo Maten (up from 18)</li>
			<li>10% reduced burn chance at the city kitchens (up from 5%)</li> 
			<li>80 free Dynamite a day from Thirus</li>
			<li>Protection from the burn effect in the Karuulm Slayer Dungeon without boots of stone, boots of brimstone or granite boots</li>
			<li>10% additional Blood runes from blood Runecrafting (no additional experience is given for the extra runes)</li>
		</ul>';
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
	}*/
	}
?>
