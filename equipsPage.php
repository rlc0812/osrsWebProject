<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">


<head>
<meta name="viewport" content="width=device-width, initial scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<title>OSRS Life: Useful Untradeables</Title>
</head>
 
<body>
<div id="bannerimage"></div>

<nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md p-0 pl-2 itemText2">

<div class="navbar-header">
<a class="navbar-brand yellowText">Osrs Life</a>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarMobile">
        <ul class="nav navbar-nav">
        <li class="nav-item" id="indexNav">
        <a class="nav-link" href="index.php"><img class="pr-1" src="images/spell_icons/Teleport_to_House_icon.png">Home</a>
        </li>
        <li class="nav-item" id="loginNav">
        <a class="nav-link" href="loginPage.php">Login</a>
        </li>
        <li class="nav-item" id="registrationNav">
        <a class="nav-link" href="registrationPage.php">Registration</a>
        </li>
        <li class="nav-item" id="achievementNav">
        <a class="nav-link" href="achievementDiary.php"><img class="pr-1" src="images/Achievement_Diaries_icon.png">Achievement Diary</a>
        </li>
        <li class="nav-item" id="pkingBuildsNav">
        <a class="nav-link" href="pkingBuilds.php"><img class="pr-1 maxHeightIcon" src="images/item_icons/Dragon_claws.png">Pking Builds</a>
        </li>
        <li class="nav-item active" id="equipsNav">
        <a class="nav-link" href="equipsPage.php"><img class="pr-1" src="images/untradeable_icons/Graceful_top.png">Useful Untradeable Items</a>
        </li>
        <li class="nav-item" id="exchangeNav">
        <a class="nav-link" href="grandExchange.php"><img class="pr-1" src="images/coin_icons/Coins_250.png">Exchange</a>
        </li>
        <li class="nav-item" id="alchNav">
        <a class="nav-link" href="alchPage.php"><img class="pr-1" src="images/spell_icons/High_Level_Alchemy_icon.png">High Alchemy Calculator</a>
        </li>
        <li class="nav-item" id="slotNav">
        <a class="nav-link" href="slotPage.php"><img class="pr-1 maxHeightIcon" src="images/Worn_equipment.png">Equipment Tables</a>
        </li>
		<li class="nav-item" id="cluescrollNav">
        <a class="nav-link" href="cluescroll.php"><img class="pr-1 maxHeightIcon" src="images/untradeable_icons/Clue_scroll_(master).png">Clue Scroll Requirements</a>
        </li>
        <li class="nav-item" id="maxHitNav">
        <a class="nav-link" href="maxHitCalc.php"><img class="pr-1 maxHeightIcon" src="images/Red_hitsplat.png">Max Hit Calculator</a>
        </li>
    </ul>
        <?php
        if(isset($_SESSION['u_userID'])){
            echo '

            <div class="text-left">
            <form action="accountManagement/logout.inc.php" method="POST">
            <button type="submit" name="submit" class="submit btn-primary" >Log Out</button>
            </form>
            </div>
        ';
        }
        ?>
</div>
</nav>

<?php
if(isset($_SESSION['u_userID'])){
	echo '<h3 class="pt-4 pl-5">Signed in as user: <span class="text-primary">'.$_SESSION['u_firstName'].'</span></h3>';
}
?>

<div class="container-fluid">
	<div class="row">
		<div class ="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 offset-sm-0 col-xs-12 offset-xs-0 p-0">
			<h1 class="pl-5 pt-1 text-center itemText2">Useful Untradeable Equipment</h1>
			<ul class="list-group pl-5 pt-0 pr-5">
			<li class="list-group-item" id="skilling" onclick="showElement(this.id);">Skilling outfits</li>
			<div class="container-fluid p-0 hidden" id="tableskilling">
				<div class="table-responsive">
					<table class="table-dark w-100 table-sm table-striped rounded">
						<tr>
							<th>Anglers outfit</th>
							<td><input type="image" onclick="displayStats('Angler_hat','1','Obtai ned from the Fishing Trawler mingame. Grants +0.4% fishing experience (full set provides 2.5%)');" src="images/untradeable_icons/Angler_hat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Angler_hat','1','Obtained from the Fishing Trawler mingame. Grants +0.4% fishing experience (full set provides 2.5%)');">Angler hat</td>

							<td><input type="image" onclick="displayStats('Angler_top','1','Obtained from the Fishing Trawler mingame. Grants +0.8% fishing experience (full set provides 2.5%)');" src="images/untradeable_icons/Angler_top.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Angler_top','1','Obtained from the Fishing Trawler mingame. Grants +0.8% fishing experience (full set provides 2.5%)');">Angler top</td>

							<td><input type="image" onclick="displayStats('Angler_waders','1','Obtained from the Fishing Trawler mingame. Grants +0.6% fishing experience (full set provides 2.5%)');" src="images/untradeable_icons/Angler_waders.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Angler_waders','1','Obtained from the Fishing Trawler mingame. Grants +0.6% fishing experience (full set provides 2.5%)');">Angler waders</td>

							<td><input type="image" onclick="displayStats('Angler_boots','1','Obtained from the Fishing Trawler mingame. Grants +0.2% fishing experience (full set provides 2.5%)');" src="images/untradeable_icons/Angler_boots.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Angler_boots','1'),'Obtained from the Fishing Trawler mingame. Grants +0.2% fishing experience (full set provides 2.5%)');">Angler boots</td>
						</tr>
					
						<tr>
						<th>Prospector kit</th>
							<td><input type="image" onclick="displayStats('Prospector_helmet','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.4% mining experience (full set provides 2.5%)');" src="images/untradeable_icons/Prospector_helmet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Prospector_helmet','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.4% mining experience (full set provides 2.5%)');">Prospector helmet</td>

							<td><input type="image" onclick="displayStats('Prospector_jacket','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.8% mining experience (full set provides 2.5%)');" src="images/untradeable_icons/Prospector_jacket.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Prospector_jacket','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.8% mining experience (full set provides 2.5%)');">Prospector jacket</td>

							<td><input type="image" onclick="displayStats('Prospector_legs','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.6% mining experience (full set provides 2.5%)');" src="images/untradeable_icons/Prospector_legs.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Prospector_legs','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.6% mining experience (full set provides 2.5%)');">Prospector legs</td>

							<td><input type="image" onclick="displayStats('Prospector_boots','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.2% mining experience (full set provides 2.5%)');" src="images/untradeable_icons/Prospector_boots.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Prospector_boots','1','Obtained by spending Nuggets from Motherload Mine. Grants +0.2% mining experience (full set provides 2.5%)');">Prospector boots</td>
						</tr>
					
						<tr>
							<th>Lumberjack outfit</th>

							<td><input type="image" onclick="displayStats('Lumberjack_hat','1','Obtained from the Temple Trekking minigame. Grants +0.4% woodcutting experience (full set provides 2.5%)');" src="images/untradeable_icons/Lumberjack_hat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Lumberjack_hat','1','Obtained from the Temple Trekking minigame. Grants +0.4% woodcutting experience (full set provides 2.5%)');">Lumberjack hat</td>

							<td><input type="image" onclick="displayStats('Lumberjack_top','1','Obtained from the Temple Trekking minigame. Grants +0.8% woodcutting experience (full set provides 2.5%)');" src="images/untradeable_icons/Lumberjack_top.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Lumberjack_top','1','Obtained from the Temple Trekking minigame. Grants +0.8% woodcutting experience (full set provides 2.5%)');">Lumberjack top</td>

							<td><input type="image" onclick="displayStats('Lumberjack_legs','1','Obtained from the Temple Trekking minigame. Grants +0.6% woodcutting experience (full set provides 2.5%)');" src="images/untradeable_icons/Lumberjack_legs.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Lumberjack_legs','1','Obtained from the Temple Trekking minigame. Grants +0.6% woodcutting experience (full set provides 2.5%)');">Lumberjack legs</td>

							<td><input type="image" onclick="displayStats('Lumberjack_boots','1','Obtained from the Temple Trekking minigame. Grants +0.2% woodcutting experience (full set provides 2.5%)');" src="images/untradeable_icons/Lumberjack_boots.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Lumberjack_boots','1','Obtained from the Temple Trekking minigame. Grants +0.2% woodcutting experience (full set provides 2.5%)');">Lumberjack boots</td>
						</tr>
						<tr>
							<th>Farmer's outfit </th>
							<td><input type="image" onclick="displayStats('Farmer\'s_strawhat','1','Obtained from the Tithe Farm minigame. Grants +0.4% farming experience (full set provides 2.5%)');" src="images/untradeable_icons/Farmers_strawhat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Farmer\'s_strawhat','1','Obtained from the Tithe Farm minigame. Grants +0.4% farming experience (full set provides 2.5%)');">Farmer's strawhat</td>

							<td><input type="image" onclick="displayStats('Farmer\'s_jacket','1','Obtained from the Tithe Farm minigame. Grants +0.8% farming experience (full set provides 2.5%)');" src="images/untradeable_icons/Farmers_jacket.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Farmer\'s_jacket','1','Obtained from the Tithe Farm minigame. Grants +0.8% farming experience (full set provides 2.5%)');">Farmer's jacket</td>

							<td><input type="image" onclick="displayStats('Farmer\'s_boro_trousers','1','Obtained from the Tithe Farm minigame. Grants +0.6% farming experience (full set provides 2.5%)');" src="images/untradeable_icons/Farmers_boro_trousers.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Farmer\'s_boro_trousers','1','Obtained from the Tithe Farm minigame. Grants +0.6% farming experience (full set provides 2.5%)');">Farmer's boro trousers</td>

							<td><input type="image" onclick="displayStats('Farmer\'s_boots','1','Obtained from the Tithe Farm minigame. Grants +0.2% farming experience (full set provides 2.5%)');" src="images/untradeable_icons/Farmers_boots.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Farmer\'s_boots','1','Obtained from the Tithe Farm minigame. Grants +0.2% farming experience (full set provides 2.5%)');">Farmer's boots</td>
						</tr>
						<tr>
						<th>Pyromancer outfit</th>
							<td><input type="image" onclick="displayStats('Pyromancer_hood','1','Obtained from Wintertodt supply crates. Grants +0.4% firemaking experience (full set provides 2.5%)');" src="images/untradeable_icons/Pyromancer_hood.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Pyromancer_hood','1','Obtained from Wintertodt supply crates. Grants +0.4% firemaking experience (full set provides 2.5%)');">Pyromancer hood</td>
					
							<td><input type="image" onclick="displayStats('Pyromancer_garb','1','Obtained from Wintertodt supply crates. Grants +0.4% firemaking experience (full set provides 2.5%)');" src="images/untradeable_icons/Pyromancer_garb.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Pyromancer_garb','1','Obtained from Wintertodt supply crates. Grants +0.4% firemaking experience (full set provides 2.5%)');">Pyromancer garb</td>

							<td><input type="image" onclick="displayStats('Pyromancer_robe','1','Obtained from Wintertodt supply crates. Grants +0.4% firemaking experience (full set provides 2.5%)');" src="images/untradeable_icons/Pyromancer_robe.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Pyromancer_robe','1','Obtained from Wintertodt supply crates. Grants +0.4% firemaking experience (full set provides 2.5%)');">Pyromancer robe</td>

							<td><input type="image" onclick="displayStats('Obtained from Wintertodt supply crates. Grants Pyromancer_boots','1','+0.4% firemaking experience (full set provides 2.5%)');" src="images/untradeable_icons/Pyromancer_boots.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Pyromancer_boots','1','Obtained from Wintertodt supply crates. Grants +0.4% firemaking experience (full set provides 2.5%)');">Pyromancer boots</td>
						</tr>
					</table>
				</div>
				<div id="table1"></div>
			</div>


			<li class="list-group-item" id="graceful" onclick="showElement(this.id);">Graceful</li>
			<div class="container-fluid p-0 hidden" id="tablegraceful">
				<div class="table-responsive">
					<table class="table-dark w-100 table-sm table-striped rounded">
						<tr>
							<td><input type="image" onclick="displayStats('Graceful_hood','2','Obtained from Grace in the Rogues\'s Den spending 35 Marks of grace (obtained from rooftop agility courses). Reduces weight by 3 kg (full set doubles energy restoration rate)');" src="images/untradeable_icons/Graceful_hood.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Graceful_hood','2','Obtained from Grace in the Rogues\'s Den spending 35 Marks of grace (obtained from rooftop agility courses). Reduces weight by 3kg (full set doubles energy restoration rate)');">Graceful hood</td>

							<td><input type="image" onclick="displayStats('Graceful_top','2','Obtained from Grace in the Rogues\'s Den spending 55 Marks of grace (obtained from rooftop agility courses). Reduces weight by 5 kg (full set doubles energy restoration rate)');" src="images/untradeable_icons/Graceful_top.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Graceful_top','2','Obtained from Grace in the Rogues\'s Den spending 55 Marks of grace (obtained from rooftop agility courses). Reduces weight by 5 kg (full set doubles energy restoration rate)');">Graceful top</td>

							<td><input type="image" onclick="displayStats('Graceful_legs','2','Obtained from Grace in the Rogues\'s Den spending 60 Marks of grace (obtained from rooftop agility courses). Reduces weight by 6 kg (full set doubles energy restoration rate)');" src="images/untradeable_icons/Graceful_legs.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Graceful_legs','2','Obtained from Grace in the Rogues\'s Den spending 60 Marks of grace (obtained from rooftop agility courses). Reduces weight by 6 kg (full set doubles energy restoration rate)');">Graceful legs</td>
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Graceful_gloves','2','Obtained from Grace in the Rogues\'s Den spending 30 Marks of grace (obtained from rooftop agility courses). Reduces weight by 3 kg (full set doubles energy restoration rate)');" src="images/untradeable_icons/Graceful_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Graceful_gloves','2','Obtained from Grace in the Rogues\'s Den spending 30 Marks of grace (obtained from rooftop agility courses). Reduces weight by 3 kg (full set doubles energy restoration rate)');">Graceful gloves</td>

							<td><input type="image" onclick="displayStats('Graceful_boots','2','Obtained from Grace in the Rogues\'s Den spending 40 Marks of grace (obtained from rooftop agility courses). Reduces weight by 4 kg (full set doubles energy restoration rate)');" src="images/untradeable_icons/Graceful_boots.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Graceful_boots','2','Obtained from Grace in the Rogues\'s Den spending 40 Marks of grace (obtained from rooftop agility courses). Reduces weight by 4 kg (full set doubles energy restoration rate)');">Graceful boots</td>

							<td><input type="image" onclick="displayStats('Graceful_cape','2','Obtained from Grace in the Rogues\'s Den spending 40 Marks of grace (obtained from rooftop agility courses). Reduces weight by 4 kg (full set doubles energy restoration rate)');" src="images/untradeable_icons/Graceful_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Graceful_cape','2','Obtained from Grace in the Rogues\'s Den spending 40 Marks of grace (obtained from rooftop agility courses). Reduces weight by 4 kg (full set doubles energy restoration rate)');">Graceful cape</td>
						</tr>
					</table>
				</div>
				<div id="table2"></div>
			</div>

			<li class="list-group-item" id="barb" onclick="showElement(this.id);">Barbarian Assault</li>
			<div class="container-fluid p-0 hidden" id="tablebarb">
				<div class="table-responsive">
					<table class="table-dark w-100 table-sm table-striped rounded">
						<tr>
						<th>Hats:</th>
							<td><input type="image" onclick="displayStats('Fighter_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once. </br> Popular due to the Stab, Slash, and Crush attack bonuses that the hat has.');" src="images/untradeable_icons/Fighter_hat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Fighter_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once. </br> Popular due to the Stab, Slash, and Crush attack bonuses that the hat has.');">Fighter hat</td>

							<td><input type="image" onclick="displayStats('Runner_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once.');" src="images/untradeable_icons/Runner_hat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Runner_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once.');">Runner hat</td>

							<td><input type="image" onclick="displayStats('Ranger_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once.');" src="images/untradeable_icons/Ranger_hat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Ranger_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once.');">Ranger hat</td>

							<td><input type="image" onclick="displayStats('Healer_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once.');" src="images/untradeable_icons/Healer_hat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Healer_hat','3','Obtained from the Barbarian Assault minigame. Costs 275 honor points of each role and the player must have killed the queen once.');">Healer hat</td>

						</tr>	
					<tr>
						<th>Armour:</th>
							<td><input type="image" onclick="displayStats('Fighter_torso','3','Obtained from the Barbarian Assault minigame. Costs 375 honor points of each role and the player must have killed the queen once. Very popular due to it being one of the few body slots to have a melee strength bonus.');" src="images/untradeable_icons/Fighter_torso.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Fighter_torso','3','Obtained from the Barbarian Assault minigame. Costs 375 honor points of each role and the player must have killed the queen once. Very popular due to it being one of the few body slots to have a melee strength bonus.');">Fighter torso</td>

							<td><input type="image" onclick="displayStats('Penance_gloves','3','Obtained from the Barbarian Assault minigame. Costs 150 honor points of each role does not require a queen kill. Reduces weight by 4.5 kg which is the highest reduction in the slot.');" src="images/untradeable_icons/Penance_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Penance_gloves','3','Obtained from the Barbarian Assault minigame. Costs 150 honor points of each role does not require a queen kill. Reduces weight by 4.5 kg which is the highest reduction in the slot.');">Penance gloves</td>

							<td><input type="image" onclick="displayStats('Penance_skirt','3','Obtained from the Barbarian Assault minigame. Costs 375 honor points of each role and the player must have killed the queen once. Has stats similar to Red dragonhide chaps.');" src="images/untradeable_icons/Penance_skirt.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Penance_skirt','3','Obtained from the Barbarian Assault minigame. Costs 375 honor points of each role and the player must have killed the queen once. Has stats similar to Red dragonhide chaps.');">Penance skirt</td>

							<td><input type="image" onclick="displayStats('Runner_boots','3','Obtained from the Barbarian Assault minigame. Costs 100 honor points of each role does not require a queen kill.');" src="images/untradeable_icons/Runner_boots.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Runner_boots','3','Obtained from the Barbarian Assault minigame. Costs 100 honor points of each role does not require a queen kill.');">Runner boots</td>
						</tr>	
					
					</table>
				</div>
				<div id="table3"></div>
			</div>

			<li class="list-group-item" id="castle" onclick="showElement(this.id);">Castle wars</li>
			<div class="container-fluid p-0 hidden" id="tablecastle">
				<div class="table-responsive">
					<table class="table-dark w-100 table-sm table-striped rounded">
						<tr>
						<th>Halos:</th>
							<td><input type="image" onclick="displayStats('Saradomin_halo','4','Obtained from the Castle Wars minigame for 75 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');" src="images/untradeable_icons/Saradomin_halo.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Saradomin_halo','4','Obtained from the Castle Wars minigame for 75 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');">Saradomin halo</td>

							<td><input type="image" onclick="displayStats('Zamorak_halo','4','Obtained from the Castle Wars minigame for 75 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');" src="images/untradeable_icons/Zamorak_halo.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Zamorak_halo','4','Obtained from the Castle Wars minigame for 75 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');">Zamorak halo</td>

							<td><input type="image" onclick="displayStats('Guthix_halo','4','Obtained from the Castle Wars minigame for 75 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');" src="images/untradeable_icons/Guthix_halo.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Guthix_halo','4','Obtained from the Castle Wars minigame for 75 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');">Guthix halo</td>
						</tr>	
										
										<!--
						<tr>
						<th>Range armour:</th>
							<td><input type="image" onclick="displayStats('Decorative_armour','4','Obtained from the Castle Wars minigame for 40 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');" src="images/untradeable_icons/Decorative_range_top.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Decorative_armour','4','Obtained from the Castle Wars minigame for 40 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');">Decorative range top</td>

							<td><input type="image" onclick="displayStats('Decorative_range_legs','4','Obtained from the Castle Wars minigame for 30 Castle wars tickets.');" src="images/untradeable_icons/Decorative_range_legs.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Decorative_armour','4','Obtained from the Castle Wars minigame for 30 Castle wars tickets.');">Decorative range legs</td>

							<td><input type="image" onclick="displayStats('Decorative_armour (quiver)','4','Obtained from the Castle Wars minigame for 40 Castle wars tickets.');" src="images/untradeable_icons/Decorative_range_quiver.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Decorative_armour_(quiver)','4','Obtained from the Castle Wars minigame for 40 Castle wars tickets.');">Decorative range quiver</td>
						</tr>

						<tr>
						<th>Mage armour:</th>
							<td><input type="image" onclick="displayStats('Decorative_magic_hat','4','Obtained from the Castle Wars minigame for 20 Castle wars tickets.');" src="images/untradeable_icons/Decorative_magic_hat.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Decorative_magic_hat','4','Obtained from the Castle Wars minigame for 20 Castle wars tickets.');">Decorative magic hat</td>

							<td><input type="image" onclick="displayStats('Decorative_armour','4','Obtained from the Castle Wars minigame for 40 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');" src="images/untradeable_icons/Decorative_magic_robe_top.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Decorative_armour','4','Obtained from the Castle Wars minigame for 40 Castle wars tickets. It is a popular choice amongst 1 defence pures as it does not have a defence requirement and has relatively good stats.');">Decorative magic robe top</td>

							<td><input type="image" onclick="displayStats('Decorative_magic_robe_legs','4','Obtained from the Castle Wars minigame for 30 Castle wars tickets.');" src="images/untradeable_icons/Decorative_magic_robe_legs.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Decorative_magic_robe_legs','4','Obtained from the Castle Wars minigame for 30 Castle wars tickets.');">Decorative magic robe legs</td>
						</tr>-->
					</table>
				</div>
				<div id="table4"></div>
			</div>

			<li class="list-group-item" id="pest" onclick="showElement(this.id);">Pest control</li>
			<div class="container-fluid p-0 hidden" id="tablepest">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">
						<th colspan="7">
						<tr>	
							<th>Void knight helmets:</th>
							<td><input type="image" onclick="displayStats('Void_melee_helm','5');" src="images/untradeable_icons/Void_melee_helm.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Void_melee_helm','5');">Void melee helm</td>

							<td><input type="image" onclick="displayStats('Void_mage_helm','5');" src="images/untradeable_icons/Void_mage_helm.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Void_mage_helm','5');">Void mage helm</td>

							<td><input type="image" onclick="displayStats('Void_ranger_helm','5');" src="images/untradeable_icons/Void_ranger_helm.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Void_ranger_helm','5');">Void ranger helm</td>
						</tr>
						<tr>
							<th>Void knight equipment:</th>
							<td><input type="image" onclick="displayStats('Void_knight_top','5');" src="images/untradeable_icons/Void_knight_top.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Void_knight_top','5');">Void knight top</td>

							<td><input type="image" onclick="displayStats('Void_knight_robe','5');" src="images/untradeable_icons/Void_knight_robe.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Void_knight_robe','5');">Void knight robe</td>

							<td><input type="image" onclick="displayStats('Void_knight_gloves','5');" src="images/untradeable_icons/Void_knight_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Void_knight_gloves','5');">Void knight gloves</td>

						</tr>
						<tr>
						<th>Other Void knight equipment:</th>
							<td><input type="image" onclick="displayStats('Elite_void_top','5');" src="images/untradeable_icons/Elite_void_top.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Elite_void_top','5');">Elite void top</td>

							<td><input type="image" onclick="displayStats('Elite_void_robe','5');" src="images/untradeable_icons/Elite_void_robe.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Elite_void_robe','5');">Elite void robe</td>

							<td><input type="image" onclick="displayStats('Void_knight_mace','5');" src="images/untradeable_icons/Void_knight_mace.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Void_knight_mace','5');">Void knight mace</td>

						</tr>
					</table>
				</div>
				<div id="table5"></div>
			</div>

			<li class="list-group-item" id="cape" onclick="showElement(this.id);">Cape slots</li>
			<div class="container-fluid p-0 hidden" id="tablecape">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">
						<tr>
						<th>Combat capes:</th>
							<td><input type="image" onclick="displayStats('Fire_cape','6','Obtained within the <i>Fight Caves</i> upon defeating <i>JalTok-Jad</i> it is considered the second best cape for melee bonuses.');" src="images/untradeable_icons/Fire_cape_animated.gif" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Fire_cape','6','Obtained within the <i>Fight Caves</i> upon defeating <i>JalTok-Jad</i> it is considered the second best cape for melee bonuses.');">Fire cape</td>

							<td><input type="image" onclick="displayStats('Infernal_cape','6','Obtained within the <i>Inferno</i> upon defeating <i>TzKal-Zuk</i> it is considered the best cape for melee bonuses, and is extremely difficult to obtain.');" src="images/untradeable_icons/Infernal_cape_animated.gif" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Infernal_cape','6','Obtained within the <i>Inferno</i> upon defeating <i>TzKal-Zuk</i> it is considered the best cape for melee bonuses, and is extremely difficult to obtain.');">Infernal cape</td>

							<td><input type="image" onclick="displayStats('Cape_of_legends','6');" src="images/untradeable_icons/Cape_of_legends.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Cape_of_legends','6');">Cape of legends</td>

							<td><input type="image" onclick="displayStats('Mythical_cape','6');" src="images/untradeable_icons/Mythical_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Mythical_cape','6');">Mythical cape</td>
						</tr>	
					
						<tr>
							<th>Ava's devices:</th>
							<td><input type="image" onclick="displayStats('Ava\'s_attractor','6');" src="images/untradeable_icons/Avas_attractor.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Ava\'s_attractor','6');">Ava's attractor</td>

							<td><input type="image" onclick="displayStats('Ava\'s_accumulator','6');" src="images/untradeable_icons/Avas_accumulator.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Ava\'s_accumulator','6');">Ava's accumulator</td>

							<td><input type="image" onclick="displayStats('Ava\'s_assembler','6');" src="images/untradeable_icons/Avas_assembler.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Ava\'s_assembler','6');">Ava's assembler</td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<th>Magic capes:</th>
							<td><input type="image" onclick="displayStats('Saradomin_cape','6');" src="images/untradeable_icons/Saradomin_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Saradomin_cape','6');">Saradomin cape</td>

							<td><input type="image" onclick="displayStats('Zamorak_cape','6');" src="images/untradeable_icons/Zamorak_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Zamorak_cape','6');">Zamorak cape</td>

							<td><input type="image" onclick="displayStats('Guthix_cape','6');" src="images/untradeable_icons/Guthix_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Guthix_cape','6');">Guthix cape</td>
							<td></td>
							<td></td>
						</tr>
						
						<tr>
							<th>Imbued magic capes:</th>
							<td><input type="image" onclick="displayStats('Imbued_saradomin_cape','6');" src="images/untradeable_icons/Imbued_saradomin_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats(''Imbued_saradomin_cape'','6');">Imbued saradomin cape</td>

							<td><input type="image" onclick="displayStats('Imbued_zamorak_cape','6');" src="images/untradeable_icons/Imbued_zamorak_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Imbued_zamorak_cape','6');">Imbued zamorak cape</td>

							<td><input type="image" onclick="displayStats('Imbued_guthix_cape','6');" src="images/untradeable_icons/Imbued_guthix_cape.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Imbued_guthix_cape','6');">Imbued guthix cape</td>
							<td></td>
							<td></td>
						</tr>		

					</table>
				</div>
				<div id="table6"></div>
			</div>

			<li class="list-group-item" id="defenders" onclick="showElement(this.id);">Warrior's guild</li>
			<div class="container-fluid p-0 hidden" id="tabledefenders">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">
						<tr>
							<td><input type="image" onclick="displayStats('Bronze_defender','7');" src="images/untradeable_icons/Bronze_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Bronze_defender','7');">Bronze defender</td>

							<td><input type="image" onclick="displayStats('Iron_defender','7');" src="images/untradeable_icons/Iron_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Iron_defender','7');">Iron defender</td>

							<td><input type="image" onclick="displayStats('Steel_defender','7');" src="images/untradeable_icons/Steel_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Steel_defender','7');">Steel defender</td>
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Black_defender','7');" src="images/untradeable_icons/Black_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Black_defender','7');">Black defender</td>

							<td><input type="image" onclick="displayStats('Mithril_defender','7');" src="images/untradeable_icons/Mithril_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Mithril_defender','7');">Mithril defender</td>

							<td><input type="image" onclick="displayStats('Adamant_defender','7');" src="images/untradeable_icons/Adamant_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Adamant_defender','7');">Adamant defender</td>
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Rune_defender','7');" src="images/untradeable_icons/Rune_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Rune_defender','7');">Rune defender</td>

							<td><input type="image" onclick="displayStats('Dragon_defender','7');" src="images/untradeable_icons/Dragon_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Dragon_defender','7');">Dragon defender</td>

							<td><input type="image" onclick="displayStats('Avernic_defender','7');" src="images/untradeable_icons/Avernic_defender.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Avernic_defender','7');">Avernic defender</td>
						</tr>
					</table>
				</div>
				<div id="table7"></div>
			</div>

			<li class="list-group-item" id="culinaromancer" onclick="showElement(this.id);">Culinaromancer gloves</li>
			<div class="container-fluid p-0 hidden" id="tableculinaromancer">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">
						<tr>
							<td><input type="image" onclick="displayStats('Hardleather_gloves','8');" src="images/untradeable_icons/Hardleather_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Hardleather_gloves','8');">Hardleather gloves</td>

							<td><input type="image" onclick="displayStats('Bronze_gloves','8');" src="images/untradeable_icons/Bronze_gloves.png" class="mx-auto d-block"/></td>
							<td  onclick="displayStats('Bronze_gloves','8');">Bronze gloves</td>

							<td><input type="image" onclick="displayStats('Iron_gloves','8');" src="images/untradeable_icons/Iron_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Iron_gloves','8');">Iron gloves</td>

							<td><input type="image" onclick="displayStats('Steel_gloves','8');" src="images/untradeable_icons/Steel_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Steel_gloves','8');">Steel gloves</td>
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Black_gloves','8');" src="images/untradeable_icons/Black_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Black_gloves','8');">Black gloves</td>

							<td><input type="image" onclick="displayStats('Mithril_gloves','8','Obtainable with the correct questing on a 1 defence pure (used in place of combat bracelet).');" src="images/untradeable_icons/Mithril_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Mithril_gloves','8','Obtainable with the correct questing on a 1 defence pure (used in place of combat bracelet).');">Mithril gloves</td>

							<td><input type="image" onclick="displayStats('Adamant_gloves','8');" src="images/untradeable_icons/Adamant_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Adamant_gloves','8');">Adamant gloves</td>

							<td><input type="image" onclick="displayStats('Rune_gloves','8','Cheap pair of gloves with high stats useful for risky events like pking.');" src="images/untradeable_icons/Rune_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Rune_gloves','8','Cheap pair of gloves with high stats useful for risky events like pking.');">Rune gloves</td>
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Dragon_gloves','8');" src="images/untradeable_icons/Dragon_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Dragon_gloves','8');">Dragon gloves</td>

							<td><input type="image" onclick="displayStats('Barrows_gloves','8','Best overall pair of gloves in the game. Requires 175 qp to complete RFD.');" src="images/untradeable_icons/Barrows_gloves.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Barrows_gloves','8','Best overall pair of gloves in the game. Requires 175 qp to complete RFD.');">Barrows gloves</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<div id="table8"></div>
			</div>

			<li class="list-group-item" id="god" onclick="showElement(this.id);">God books</li>
			<div class="container-fluid p-0 hidden" id="tablegod">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">
						<tr>
							<td><input type="image" onclick="displayStats('Holy_book','9','Must first bring all 4 <i>Saradomin pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The worst godbook as it does not provide any attack bonuses.');" src="images/untradeable_icons/Holy_book.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Holy_book','9','Must first bring all 4 <i>Saradomin pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The worst godbook as it does not provide any attack bonuses.');">Holy book</td>

							<td><input type="image" onclick="displayStats('Unholy_book','9','Must first bring all 4 <i>Zamorak pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The best godbook for 1 defence pures and tribridding in the wild.');" src="images/untradeable_icons/Unholy_book.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Unholy_book','9','Must first bring all 4 <i>Zamorak pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The best godbook for 1 defence pures and tribridding in the wild.');">Unholy book</td>

							<td><input type="image" onclick="displayStats('Book_of_balance','9','Must first bring all 4 <i>Guthix pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>Somewhat useful if you cannot afford <i>Unholy book</i>.');" src="images/untradeable_icons/Book_of_balance.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Book_of_balance','9','Must first bring all 4 <i>Guthix pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>Somewhat useful if you cannot afford <i>Unholy book</i>.');">Book of balance</td>
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Book_of_darkness','9','Must first bring all 4 <i>Ancient pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The best godbook for magic attack bonus.');" src="images/untradeable_icons/Book_of_darkness.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Book_of_darkness','9','Must first bring all 4 <i>Ancient pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The best godbook for magic attack bonus.');">Book of darkness</td>

							<td><input type="image" onclick="displayStats('Book_of_law','9','Must first bring all 4 <i>Armadyl pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The best godbook for range attack bonus.');" src="images/untradeable_icons/Book_of_law.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Book_of_law','9','Must first bring all 4 <i>Armadyl pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>The best godbook for range attack bonus.');">Book of law</td>

							<td><input type="image" onclick="displayStats('Book_of_war','9','Must first bring all 4 <i>Bandos pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>Useful for the strength bonus, but outclassed by the <i>Unholy book</i> and its attack bonus.');" src="images/untradeable_icons/Book_of_war.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Book_of_war','9','Must first bring all 4 <i>Bandos pages</i> to the lighthouse with this damaged book, can obtain as many as user would like after.<br>Useful for the strength bonus, but outclassed by the <i>Unholy book</i> and its attack bonus.');">Book of war</td>
						</tr>
					</table>
				</div>
				<div id="table9"></div>
			</div>

			<li class="list-group-item" id="other" onclick="showElement(this.id);">Other useful quest equips</li>
			<div class="container-fluid p-0 hidden" id="tableother">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">
						<tr>
							<td><input type="image" onclick="displayStats('Beacon_ring','10','Useful for risky activities like pking as it provides magic attack and defence for a small cost.');" src="images/untradeable_icons/Beacon_ring.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Beacon_ring','10','Useful for risky activities like pking as it provides magic attack and defence for a small cost.');">Beacon ring</td>

							<td><input type="image" onclick="displayStats('Salve_amulet','10','+15% dmg/acc while fighting undead.');" src="images/untradeable_icons/Salve_amulet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Salve_amulet','10','+15% dmg/acc while fighting undead.');">Salve amulet</td>

							<td><input type="image" onclick="displayStats('Boots_of_lightness','10','Lowers weight 4.5kg when worn, but weight 0.3kg.');" src="images/untradeable_icons/Boots_of_lightness.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Boots_of_lightness','10','Lowers weight 4.5kg when worn, but weight 0.3kg.');">Boots of lightness</td>

							<td><input type="image" onclick="displayStats('Bearhead','10','Obtained through the quest <i>Mountain Daughter</i>: Useful for 1 defence pures, as it provides a notable defence bonuses similar to a black full helm.');" src="images/untradeable_icons/Bearhead.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Bearhead','10','Obtained through the quest <i>Mountain Daughter</i>: Useful for 1 defence pures, as it provides a notable defence bonuses similar to a black full helm.');">Bearhead</td>
							
						<tr>
							<td><input type="image" onclick="displayStats('Magic_secateurs','10','Obtained through the quest <i>Fairytale I - Growing Pains</i>: Useful for farming, as it provides 10% more yields from herbs. It also provides higher quality herbs from Herbiboars when hunting them on <i>Fossil Island</i>.');" src="images/untradeable_icons/Magic_secateurs.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Magic_secateurs','10','Obtained through the quest <i>Fairytale I - Growing Pains</i>: Useful for farming, as it provides 10% more yields from herbs. It also provides higher quality herbs from Herbiboars when hunting them on <i>Fossil Island</i>.');">Magic secateurs</td>

							<td><input type="image" onclick="displayStats('Silverlight','10','Same max hit as rune sword when fighting demons, but slightly slower and less accurate.');" src="images/untradeable_icons/Silverlight.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Silverlight','10','Same max hit as rune sword when fighting demons, but slightly slower and less accurate.');">Silverlight</td>

							<td><input type="image" onclick="displayStats('Darklight','10','Same mame hit as dragon long when fighting demons, but slightly slower and less accurate.');" src="images/untradeable_icons/Darklight.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Darklight','10','Same mame hit as dragon long when fighting demons but less acc/speed');">Darklight</td>

							<td><input type="image" onclick="displayStats('Arclight','10','+70% dmg/acc vs demonic creatures, obtained by bringing <i>Darklight</i> and 3 <i>Ancient crystals</i> into the Catacombs of Kourend and using them on the altar in the center.');" src="images/untradeable_icons/Arclight.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Arclight','10','+70% dmg/acc vs demonic creatures, obtained by bringing <i>Darklight</i> and 3 <i>Ancient crystals</i> into the Catacombs of Kourend and using them on the altar in the center.');">Arclight</td>
						</tr>		

						<tr>
							<td><input type="image" onclick="displayStats('Barrelchest_anchor','10','A useful weapon for pking, can be used as a finishing attack as it can hit high due to its high strength bonus.');" src="images/untradeable_icons/Barrelchest_anchor.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Barrelchest_anchor','10','A useful weapon for pking, can be used as a finishing attack as it can hit high due to its high strength bonus.');">Barrelchest anchor</td>

							<td><input type="image" onclick="displayStats('Crystal_bow','10','Range attack/str based on charge.');" src="images/untradeable_icons/Crystal_bow.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Crystal_bow','10','Range attack/str based on charge.');">Crystal bow</td>

							<td><input type="image" onclick="displayStats('Crystal_halberd','10');" src="images/untradeable_icons/Crystal_halberd.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Crystal_halberd','10');">Crystal halberd</td>

							<td><input type="image" onclick="displayStats('Crystal_shield','10');" src="images/untradeable_icons/Crystal_shield.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Crystal_shield','10');">Crystal shield</td>
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Cooking_gauntlets','10','While worn decreases the chance of burning foods. Obtained from Caleb in catherby when bringing another set of Family Crest gauntlets.');" src="images/untradeable_icons/Cooking_gauntlets.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Cooking_gauntlets','10','While worn decreases the chance of burning foods. Obtained from Caleb in catherby when bringing another set of Family Crest gauntlets.');">Cooking gauntlets</td>

							<td><input type="image" onclick="displayStats('Goldsmith_gauntlets','10','While worn increases the exp earned from smithing gold bars from 22.5 to 56.2 experience. Obtained from Avan in the Al Karid mine when bringing another set of Family Crest gauntlets.');" src="images/untradeable_icons/Goldsmith_gauntlets.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Goldsmith_gauntlets','10','While worn increases the exp earned from smithing gold bars from 22.5 to 56.2 experience. Obtained from Avan in the Al Karid mine when bringing another set of Family Crest gauntlets.');">Goldsmith gauntlets</td>

							<td><input type="image" onclick="displayStats('Chaos_gauntlets','10','While worn increases the maximum hit of bolt spells by 3 making them only hit one less than the same type blast spell. Obtained from Johnathon in the Jolly Boar Inn north of Varrock when bringing another set of Family Crest gauntlets.');" src="images/untradeable_icons/Chaos_gauntlets.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Chaos_gauntlets','10','While worn increases the maximum hit of bolt spells by 3 making them only hit one less than the same type blast spell. Obtained from Johnathon in the Jolly Boar Inn north of Varrock when bringing another set of Family Crest gauntlets.');">Chaos gauntlets</td>

							<td><input type="image" onclick="displayStats('Steel_gauntlets','10','Obtained from Dimintheis following the quest Family Crest. Can be taken to Caleb in the building south of the Catherby farming patch(Cooking gauntlets), Johnathon at the Jolly Boar Inn North of varrock(Chaos Gauntlets), and Avan in the Al Karid mine(goldsmith gauntlets).');" src="images/untradeable_icons/Steel_gauntlets.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Steel_gauntlets','10','Obtained from Dimintheis following the quest Family Crest. Can be taken to Caleb in the building south of the Catherby farming patch(Cooking gauntlets), Johnathon at the Jolly Boar Inn North of varrock(Chaos Gauntlets), and Avan in the Al Karid mine(goldsmith gauntlets).');">Steel gauntlets</td>
						</tr>
					</table>
				</div>
				<div id="table10"></div>
			</div>

			<li class="list-group-item" id="imbued" onclick="showElement(this.id);">Imbued items</li>
			<div class="container-fluid p-0 hidden" id="tableimbued">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">				
						<tr>
							<th>Fremennik rings:</th>
							<td><input type="image" onclick="displayStats('Berserker_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best melee strength bonus in the slot.');" src="images/untradeable_icons/Berserker_ring_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Berserker_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best melee strength bonus in the slot.');">Berserker ring (i)</td>

							<td><input type="image" onclick="displayStats('Warrior_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best slash attack bonus in the slot.');" src="images/untradeable_icons/Warrior_ring_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Warrior_ring_(i)','11','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best slash attack bonus in the slot.');">Warrior ring (i)</td>

							<td><input type="image" onclick="displayStats('Archers_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best range attack bonus in the slot.');" src="images/untradeable_icons/Archers_ring_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Archers_ring_(i)','11''11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best range attack bonus in the slot.');">Archers ring (i)</td>			

							<td><input type="image" onclick="displayStats('Seers_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best magic attack bonus in the slot.');" src="images/untradeable_icons/Seers_ring_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Seers_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best magic attack bonus in the slot.');">Seers ring (i)</td>
						</tr>
						<tr>
							<th>Wilderness rings:</th>
							<td><input type="image" onclick="displayStats('Treasonous_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best stab attack bonus in the slot.');" src="images/untradeable_icons/Treasonous_ring_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Treasonous_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best stab attack bonus in the slot.');">Treasonous ring (i)</td>

							<td><input type="image" onclick="displayStats('Tyrannical_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best crush attack bonus in the slot.');" src="images/untradeable_icons/Tyrannical_ring_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Tyrannical_ring_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides the best crush attack bonus in the slot.');">Tyrannical ring (i)</td>

							<td><input type="image" onclick="displayStats('Ring_of_the_gods_(i)','11','Cost:650,000 Nightmare Zone points.<br> Useful as it provides +8 prayer bonus, and acts as a <i>Holy Wrench</i> granting bonus prayer points from <i>Prayer potions, Super restore potions</i>.');" src="images/untradeable_icons/Ring_of_the_gods_(i).png" class="mx-auto d-block"/></td>
							<td colspan="3" onclick="displayStats('Ring_of_the_gods_(i)','11','Cost:650,000 Nightmare Zone points.<br>Useful as it provides +8 prayer bonus, and acts as a <i>Holy Wrench</i> granting bonus prayer points from <i>Prayer potions, Super restore potions</i>.');">Ring of the gods (i)</td>
						</tr>
						<tr>
							<th>Crystal equipment:</th>
							<td><input type="image" onclick="displayStats('Crystal_halberd','11');" src="images/untradeable_icons/Crystal_halberd.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Crystal_halberd','11');">Crystal halberd</td>

							<td><input type="image" onclick="displayStats('Crystal_shield','11');" src="images/untradeable_icons/Crystal_shield.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Crystal_shield','11');">Crystal shield</td>

							<td><input type="image" onclick="displayStats('Crystal_bow','11','Range attack/str based on charge.');" src="images/untradeable_icons/Crystal_bow.png" class="mx-auto d-block"/></td>
							<td colspan="3" onclick="displayStats('Crystal_bow','11','Range attack/str based on charge.');">Crystal bow</td>
						</tr>
						<tr>
							<th>Other:</th>
							<td><input type="image" onclick="displayStats('Slayer_helmet_(i)','11','On task: 16.67% melee acc/dmg, 15% mage acc/dmg, 15% range acc/dmg.');" src="images/untradeable_icons/Slayer_helmet_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Slayer_helmet_(i)','11','On task: 16.67% melee acc/dmg, 15% mage acc/dmg, 15% range acc/dmg.');">Slayer helmet (i)</td>

							<td><input type="image" onclick="displayStats('Ring_of_suffering_(i)','11','Can be charged with rings of recoil.');" src="images/untradeable_icons/Ring_of_suffering_(i).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Ring_of_suffering_(i)','11','Can be charged with rings of recoil.');">Ring of suffering (i)</td>

							<td><input type="image" onclick="displayStats('Salve_amulet','11','+15% dmg/acc while fighting undead');" src="images/untradeable_icons/Salve_amulet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Salve_amulet','11','+15% dmg/acc while fighting undead');">Salve amulet</td>

							<td><input type="image" onclick="displayStats('Salve_amulet_(e)','11','+20% dmg/acc while fighting undead');" src="images/untradeable_icons/Salve_amulet_(e).png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Salve_amulet_(e)','11','+20% dmg/acc while fighting undead');">Salve amulet (e)</td>
						</tr>
					</table>
				</div>
				<div id="table11"></div>
			</div>
			<li class="list-group-item" id="slayer" onclick="showElement(this.id);">Slayer</li>
			<div class="container-fluid p-0 hidden" id="tableslayer">
				<div class="table-responsive">
					<table class="table-dark table-sm w-100 table-striped rounded">
						<tr>
							<td><input type="image" onclick="displayStats('Slayer_helmet','12','+16.67% melee dmg/acc, 15% mage/range dmg/acc when imbued(400 slayer pts.)');" src="images/untradeable_icons/Slayer_helmet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Slayer_helmet','12','+16.67% melee dmg/acc, 15% mage/range dmg/acc when imbued(400 slayer pts.)');">Slayer helmet</td>

							<td><input type="image" onclick="displayStats('Black_slayer_helmet','12','Requires: KBD heads 1/128 drop from King Black Dragon (1000 slayer pts.)');" src="images/untradeable_icons/Black_slayer_helmet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Black_slayer_helmet','12','Requires: KBD heads 1/128 drop from King Black Dragon (1000 slayer pts.)');">Black slayer helmet</td>

							<td><input type="image" onclick="displayStats('Red_slayer_helmet','12','Requires: Abyssal head 1/6000 drop from Abyssal demon (requires 85 slayer/1000 slayer pts.)');" src="images/untradeable_icons/Red_slayer_helmet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Red_slayer_helmet','12','Requires: Abyssal head 1/6000 drop from Abyssal demon (requires 85 slayer/1000 slayer pts.)');">Red slayer helmet</td>		
						</tr>
						<tr>
							<td><input type="image" onclick="displayStats('Turquoise_slayer_helmet','12','Requires: Vorkath head 1/50 drop from Vorkath (requires Dragon slayer II/1000 slayer pts.)');" src="images/untradeable_icons/Turquoise_slayer_helmet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Turquoise_slayer_helmet','12','Requires: Vorkath head 1/50 drop from Vorkath (requires Dragon slayer II/1000 slayer pts.)');">Turquoise slayer helmet</td>

							<td><input type="image" onclick="displayStats('Green_slayer_helmet','12','Requires: KQ head 1/128 drop from Kalphite Queen (1000 slayer pts.)');" src="images/untradeable_icons/Green_slayer_helmet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Green_slayer_helmet','12','Requires: KQ head 1/128 drop from Kalphite Queen (1000 slayer pts.)');">Green slayer helmet</td>

							<td><input type="image" onclick="displayStats('Purple_slayer_helmet','12','Requires: Skotizo claw head 1/25 drop from Skotizo (1000 slayer pts.)');" src="images/untradeable_icons/Purple_slayer_helmet.png" class="mx-auto d-block"/></td>
							<td onclick="displayStats('Purple_slayer_helmet','12','Requires: Skotizo claw head 1/25 drop from Skotizo (1000 slayer pts.)');">Purple slayer helmet</td>
						</tr>
					</table>
				</div>
				<div id="table12"></div>
			</div>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid pb-4 text-center">
	<a onclick ="scrollToTop();" href="#">Go to top</a>
</div>

<script type="text/javascript">
function displayStats(itemName,location,additionalMessage) {
	$( "#hidebutton"+location).show();
	if(additionalMessage==undefined)//No additional message to display
	{
	var additionalMessage='none';
	}
	// AJAX code to drop character
		$.ajax({
			type: "POST",
			url: "statTableCreate.php",
			data: 'itemName='+itemName+'&additionalMessage='+additionalMessage+'&location='+location,
			cache: false,
			success: function(data) {
			$("#table"+location).html(data);
			$( "#emptybutton"+location).show();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				     alert(xhr.status);
       				 alert(thrownError);
			}
		});
	}

</script>

<script type="text/javascript">
function scrollToTop()
{
	$(document).ready(function(){
		$('html,body').animate({scrollTop: 0}, 'slow');

	});
}
function scrollToElement(elementId)
{
	$(document).ready(function(){
		$('html,body').animate({
		scrollTop: $("#"+elementId).offset().top},
		'slow');
	});
}
function hideElement(elementId)
{
	$( "#table"+elementId).hide();
	$('#'+elementId).removeClass('active');
	$('#'+elementId).attr("onclick","showElement(this.id)");
}
function showElement(elementId)
{
	$( "#table"+elementId).show();
	$('#'+elementId).addClass('active');	
	$('#'+elementId).attr("onclick","hideElement(this.id)");
}
function emptyElement(elementId)
{
	$( "#table"+elementId).empty();
	$( "#emptybutton"+elementId).hide();

}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>



