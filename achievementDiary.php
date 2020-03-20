<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<title>OSRS Life: Achievement Diaries</Title>
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
        <li class="nav-item" id="equipsNav">
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
	<script type="text/javascript">
    $(document).ready(function() {
		$('#achievementNav').addClass('active');
	});
	</script>
	
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

<h1 class="pt-1 text-center itemText2">Achievement Diaries</h1>
<ul class="list-group pl-5 pt-1 pr-5">
<li class="list-group-item" onclick="scrollToElement('ardougneDiary');">Ardougne Diary</li>
<li class="list-group-item" onclick="scrollToElement('desertDiary');">Desert Diary</li>
<li class="list-group-item" onclick="scrollToElement('faladorDiary');">Falador Diary</li>
<li class="list-group-item" onclick="scrollToElement('fremennikDiary');">Fremennik Diary</li>
<li class="list-group-item" onclick="scrollToElement('kandarinDiary');">Kandarin Diary</li>
<li class="list-group-item" onclick="scrollToElement('karamjaDiary');">Karamja Diary</li>
<li class="list-group-item" onclick="scrollToElement('lumbridgeDiary');">Lumbridge and Draynor Diary</li>
<li class="list-group-item" onclick="scrollToElement('morytaniaDiary');">Morytania Diary</li>
<li class="list-group-item" onclick="scrollToElement('westernDiary');">Western Provinces Diary</li>
<li class="list-group-item" onclick="scrollToElement('varrockDiary');">Varrock Diary</li>
<li class="list-group-item" onclick="scrollToElement('wildernessDiary');">Wilderness Diary</li>
<li class="list-group-item" onclick="scrollToElement('kourendDiary');">Kourend Diary</li>

</ul>

<h2 class="pt-5 text-center itemText2">Achievement Diary Rewards</h2>

<p class="text-center itemText2">Click Name or Icon to Display Stats</p>

<div class="container-fluid pl-1 pr-1 pt-0 align-center w-100" id="stats">
<div class="row">
<div class ="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12 offset-sm-0 col-12 offset-0 pb-0">
	<div class="table-responsive">
	<table class="brownTable table-sm table-striped rounded itemText2 text-center w-100">

		<tr class="text-center brownHeader">
			<td><img class="pr-1" src="images/Achievement_Diaries_icon.png"></td>
			<td colspan="2">Easy</td>
			<td colspan="2">Medium</td>
			<td colspan="2">Hard</td>
			<td colspan="2">Elite</td>
		</tr>
		<tr>
			<td class="brownHeader">Ardougne diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Ardougne_cloak_1','1','');" src="images/untradeable_icons/Ardougne_cloak_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Ardougne_cloak_1','1','');">Ardougne cloak 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Ardougne_cloak_2','1','');" src="images/untradeable_icons/Ardougne_cloak_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Ardougne_cloak_2','1','');">Ardougne cloak 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Ardougne_cloak_3','1','');" src="images/untradeable_icons/Ardougne_cloak_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Ardougne_cloak_'3,'1','');">Ardougne cloak 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Ardougne_cloak_4','1','');" src="images/untradeable_icons/Ardougne_cloak_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Ardougne_cloak_4','1','');">Ardougne cloak 4</td>
		</tr>	

		<tr>
			<td class="brownHeader">Desert diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Desert_amulet_1','1','');" src="images/untradeable_icons/Desert_amulet_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Desert_amulet_1','1','');">Desert amulet 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Desert_amulet_2','1','');" src="images/untradeable_icons/Desert_amulet_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Desert_amulet_2','1','');">Desert amulet 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Desert_amulet_3','1','');" src="images/untradeable_icons/Desert_amulet_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Desert_amulet_3','1','');">Desert amulet 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Desert_amulet_4','1','');" src="images/untradeable_icons/Desert_amulet_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Desert_amulet_4','1','');">Desert amulet 4</td>
		</tr>	

		<tr>
			<td class="brownHeader">Falador diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Falador_shield_1','1','');" src="images/untradeable_icons/Falador_shield_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Falador_shield_1','1','');">Falador shield 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Falador_shield_2','1','');" src="images/untradeable_icons/Falador_shield_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Falador_shield_2','1','');">Falador shield 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Falador_shield_3','1','');" src="images/untradeable_icons/Falador_shield_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Falador_shield_3','1','');">Falador shield 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Falador_shield_4','1','');" src="images/untradeable_icons/Falador_shield_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Falador_shield_4','1','');">Falador shield 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Fremennik diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Fremennik_sea_boots_1','1','');" src="images/untradeable_icons/Fremennik_sea_boots_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Fremennik_sea_boots_1','1','');">Fremennik sea boots 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Fremennik_sea_boots_2','1','');" src="images/untradeable_icons/Fremennik_sea_boots_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Fremennik_sea_boots_2','1','');">Fremennik sea boots 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Fremennik_sea_boots_3','1','');" src="images/untradeable_icons/Fremennik_sea_boots_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Fremennik_sea_boots_3','1','');">Fremennik sea boots 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Fremennik_sea_boots_4','1','');" src="images/untradeable_icons/Fremennik_sea_boots_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Fremennik_sea_boots_4','1','');">Fremennik sea boots 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Kandarin diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Kandarin_headgear_1','1','');" src="images/untradeable_icons/Kandarin_headgear_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Kandarin_headgear_1','1','');">Kandarin headgear 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Kandarin_headgear_2','1','');" src="images/untradeable_icons/Kandarin_headgear_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Kandarin_headgear_2','1','');">Kandarin headgear 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Kandarin_headgear_3','1','');" src="images/untradeable_icons/Kandarin_headgear_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Kandarin_headgear_3','1','');">Kandarin headgear 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Kandarin_headgear_4','1','');" src="images/untradeable_icons/Kandarin_headgear_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Kandarin_headgear_4','1','');">Kandarin headgear 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Karamja diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Karamja_gloves_1','1','');" src="images/untradeable_icons/Karamja_gloves_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Karamja_gloves_1','1','');">Karamja gloves 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Karamja_gloves_2','1','');" src="images/untradeable_icons/Karamja_gloves_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Karamja_gloves_2','1','');">Karamja gloves 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Karamja_gloves_3','1','');" src="images/untradeable_icons/Karamja_gloves_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Karamja_gloves_3','1','');">Karamja gloves 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Karamja_gloves_4','1','');" src="images/untradeable_icons/Karamja_gloves_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Karamja_gloves_4','1','');">Karamja gloves 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Lumbridge diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Explorer\'s_ring_1','1','');" src="images/untradeable_icons/Explorer's_ring_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Explorer\'s_ring_1','1','');">Explorer's ring 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Explorer\'s_ring_2','1','');" src="images/untradeable_icons/Explorer's_ring_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Explorer\'s_ring_2','1','');">Explorer's ring 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Explorer\'s_ring_3','1','');" src="images/untradeable_icons/Explorer's_ring_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Explorer\'s_ring_3','1','');">Explorer's ring 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Explorer\'s_ring_4','1','');" src="images/untradeable_icons/Explorer's_ring_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Explorer\'s_ring_4','1','');">Explorer's ring 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Varrock diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Varrock_armour_1','1','');" src="images/untradeable_icons/Varrock_armour_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Varrock_armour_1','1','');">Varrock armour 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Varrock_armour_2','1','');" src="images/untradeable_icons/Varrock_armour_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Varrock_armour_2','1','');">Varrock armour 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Varrock_armour_3','1','');" src="images/untradeable_icons/Varrock_armour_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Varrock_armour_3','1','');">Varrock armour 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Varrock_armour_4','1','');" src="images/untradeable_icons/Varrock_armour_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Varrock_armour_4','1','');">Varrock armour 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Western provinces diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Western_banner_1','1','');" src="images/untradeable_icons/Western_banner_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Western_banner_1','1','');">Western banner 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Western_banner_2','1','');" src="images/untradeable_icons/Western_banner_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Western_banner_2','1','');">Western banner 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Western_banner_3','1','');" src="images/untradeable_icons/Western_banner_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Western_banner_3','1','');">Western banner 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Western_banner_4','1','');" src="images/untradeable_icons/Western_banner_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Western_banner_4','1','');">Western banner 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Wilderness diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Wilderness_sword_1','1','');" src="images/untradeable_icons/Wilderness_sword_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Wilderness_sword_1','1','');">Wilderness sword 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Wilderness_sword_2','1','');" src="images/untradeable_icons/Wilderness_sword_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Wilderness_sword_2','1','');">Wilderness sword 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Wilderness_sword_3','1','');" src="images/untradeable_icons/Wilderness_sword_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Wilderness_sword_3','1','');">Wilderness sword 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Wilderness_sword_4','1','');" src="images/untradeable_icons/Wilderness_sword_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Wilderness_sword_4','1','');">Wilderness sword 4</td>
		</tr>
		<tr>
			<td class="brownHeader">Kebos diary</td>
			<td class="border-left"><input type="image" onclick="displayStats('Rada\'s_blessing_1','1','');" src="images/untradeable_icons/Rada's_blessing_1.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Rada\'s_blessing_1','1','');">Rada's blessing 1</td>

			<td class="border-left"><input type="image" onclick="displayStats('Rada\'s_blessing_2','1','');" src="images/untradeable_icons/Rada's_blessing_2.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Rada\'s_blessing_2','1','');">Rada's blessing 2</td>

			<td class="border-left"><input type="image" onclick="displayStats('Rada\'s_blessing_3','1','');" src="images/untradeable_icons/Rada's_blessing_3.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Rada\'s_blessing_3','1','');">Rada's blessing 3</td>

			<td class="border-left"><input type="image" onclick="displayStats('Rada\'s_blessing_4','1','');" src="images/untradeable_icons/Rada's_blessing_4.png" class="mx-auto d-block"/></td>
			<td onclick="displayStats('Rada\'s_blessing_4','1','');">Rada's blessing 4</td>
		</tr>

	</table>
	</div>
	</div>
	</div>
	<div class="row">
	<div class ="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12 offset-sm-0 col-12 offset-0 pb-0">
		<div id="table1"></div>
	</div>
</div>
</div>
<?php
if(isset($_SESSION['u_userID'])){
	include('achievementScripts/achievementQueries.php');

	$statTableArray = getNames($_SESSION['u_userID']);
	$char1 = $statTableArray[0];
	$char2 = $statTableArray[1];
	$char3 = $statTableArray[2];
	$char4 = $statTableArray[3];
	if(($char1==NULL)&&($char2==NULL)&&($char3==NULL)&&($char4==NULL)){
	  echo '<h3 class="pt-4 pl-4">You must register a character in home to be able to use the diary calculator</h3>';
	} else {
			echo'
			<div class ="container-fluid text-center pl-5 pt-5">
			<h3>Please select a character to check diary requirements</h3>
			';
			if($char1!==NULL){
				echo'
				<div class="form-check-inline blueBg p-2 border border-dark">
				<input type="radio" class="form-check-input" id="radioChar1" value ="'.htmlspecialchars($char1).'" name="characterSelection">
				<label class="form-check-label" for="radioChar1"><b>'.$char1.'</b></label>
				</div>	
				';
			}
			if($char2!==NULL){
				echo'
				<div class="form-check-inline blueBg p-2 border border-dark">
				<input type="radio" class="form-check-input" id="radioChar2" value ="'.htmlspecialchars($char2).'" name="characterSelection">
				<label class="form-check-label" for="radioChar2"><b>'.$char2.'</b></label>
				</div>	
				';
			}
			if($char3!==NULL){
				echo'
				<div class="form-check-inline blueBg p-2 border border-dark">
				<input type="radio" class="form-check-input" id="radioChar3" value ="'.htmlspecialchars($char3).'" name="characterSelection">
				<label class="form-check-label" for="radioChar3"><b>'.$char3.'</b></label>
				</div>	
				';
			}
			if($char4!==NULL){
				echo'
				<div class="form-check-inline blueBg p-2 border border-dark">
				<input type="radio" class="form-check-input" id="radioChar4" value ="'.htmlspecialchars($char4).'" name="characterSelection">
				<label class="form-check-label" for="radioChar4"><b>'.$char4.'</b></label>
				</div>	
				';
			}
			echo'
			</div>	
			';
		}
}
?>
<div class="container-fluid p-5 text-center">

<ul class="list-group list-group-flush">

<h3 id="ardougneDiary" class="itemText2">Ardougne</h3>
  <li class="list-group-item" id="ardyEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tableardyEasy"></div>
  <li class="list-group-item" id="ardyMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tableardyMedium"></div>
  <li class="list-group-item" id="ardyHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tableardyHard"></div>
  <li class="list-group-item" id="ardyElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tableardyElite"></div>

<h3 id="desertDiary" class="itemText2 pt-2">Desert</h3>
  <li class="list-group-item" id="desertEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tabledesertEasy"></div>
  <li class="list-group-item" id="desertMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tabledesertMedium"></div>
  <li class="list-group-item" id="desertHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tabledesertHard"></div>
  <li class="list-group-item" id="desertElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tabledesertElite"></div>

<h3 id="faladorDiary" class="itemText2 pt-2">Falador</h3>
  <li class="list-group-item" id="faladorEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablefaladorEasy"></div>
  <li class="list-group-item" id="faladorMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablefaladorMedium"></div>
  <li class="list-group-item" id="faladorHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablefaladorHard"></div>
  <li class="list-group-item" id="faladorElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablefaladorElite"></div>

<h3 id="fremennikDiary" class="itemText2 pt-2">Fremennik</h3>
  <li class="list-group-item" id="fremennikEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablefremennikEasy"></div>
  <li class="list-group-item" id="fremennikMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablefremennikMedium"></div>
  <li class="list-group-item" id="fremennikHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablefremennikHard"></div>
  <li class="list-group-item" id="fremennikElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablefremennikElite"></div>

<h3 id ="kandarinDiary" class="itemText2 pt-2">Kandarin</h3>
  <li class="list-group-item" id="kandarinEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablekandarinEasy"></div>
  <li class="list-group-item" id="kandarinMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablekandarinMedium"></div>
  <li class="list-group-item" id="kandarinHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablekandarinHard"></div>
  <li class="list-group-item" id="kandarinElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablekandarinElite"></div>

<h3 id="karamjaDiary" class="itemText2 pt-2">Karamja</h3>
  <li class="list-group-item" id="karamjaEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablekaramjaEasy"></div>
  <li class="list-group-item" id="karamjaMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablekaramjaMedium"></div>
  <li class="list-group-item" id="karamjaHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablekaramjaHard"></div>
  <li class="list-group-item" id="karamjaElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablekaramjaElite"></div>

<h3 id="lumbridgeDiary" class="itemText2 pt-2">Lumbridge & Draynor</h3>
  <li class="list-group-item" id="lumbridgeEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablelumbridgeEasy"></div>
  <li class="list-group-item" id="lumbridgeMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablelumbridgeMedium"></div>
  <li class="list-group-item" id="lumbridgeHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablelumbridgeHard"></div>
  <li class="list-group-item" id="lumbridgeElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablelumbridgeElite"></div>

<h3 id="morytaniaDiary" class="itemText2 pt-2">Morytania</h3>
  <li class="list-group-item" id="morytaniaEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablemorytaniaEasy"></div>
  <li class="list-group-item" id="morytaniaMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablemorytaniaMedium"></div>
  <li class="list-group-item" id="morytaniaHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablemorytaniaHard"></div>
  <li class="list-group-item" id="morytaniaElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablemorytaniaElite"></div>

<h3 id="westernDiary" class="itemText2 pt-2">Western Provinces</h3>
  <li class="list-group-item" id="westernEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablewesternEasy"></div>
  <li class="list-group-item" id="westernMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablewesternMedium"></div>
  <li class="list-group-item" id="westernHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablewesternHard"></div>
  <li class="list-group-item" id="westernElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablewesternElite"></div>

<h3 id="varrockDiary" class="itemText2 pt-2">Varrock</h3>
  <li class="list-group-item" id="varrockEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablevarrockEasy"></div>
  <li class="list-group-item" id="varrockMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablevarrockMedium"></div>
  <li class="list-group-item" id="varrockHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablevarrockHard"></div>
  <li class="list-group-item" id="varrockElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablevarrockElite"></div>

<h3 id="wildernessDiary" class="itemText2 pt-2">Wilderness</h3>
  <li class="list-group-item" id="wildernessEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablewildernessEasy"></div>
  <li class="list-group-item" id="wildernessMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablewildernessMedium"></div>
  <li class="list-group-item" id="wildernessHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablewildernessHard"></div>
  <li class="list-group-item" id="wildernessElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablewildernessElite"></div>


<h3 id="kourendDiary" class="itemText2 pt-2">Kebos (Kourend)</h3>
  <li class="list-group-item" id="kourendEasy" onclick="getRequirements(this.id);">Easy</li>
	<div id="tablekourendEasy"></div>
  <li class="list-group-item" id="kourendMedium" onclick="getRequirements(this.id);">Medium</li>
	<div id="tablekourendMedium"></div>
  <li class="list-group-item" id="kourendHard" onclick="getRequirements(this.id);">Hard</li>
	<div id="tablekourendHard"></div>
  <li class="list-group-item" id="kourendElite" onclick="getRequirements(this.id);">Elite</li>
	<div id="tablekourendElite"></div>

</ul>
</div>


<div class="container-fluid pb-4 text-center">
	<a onclick ="scrollToTop();" href="#">Go to top</a>
</div>

<script type="text/javascript">
function displayStats(itemName,location, additionalMessage) {
	var table=itemName.replace("'","");
	var escaped=itemName.replace("'","\'");
	var itemName=itemName.replace("imbued","(i)");

	table = "#table"+location;
	if(additionalMessage==undefined)//No additional message to display
	{
	var additionalMessage='none';
	}
		$.ajax({
			type: "POST",
			url: "statTableCreate.php",
			data: 'itemName='+itemName+'&additionalMessage='+additionalMessage+'&location='+location,
			cache: false,

			success: function(data) {
			$(table).html(data);
			$( "#hidebutton"+location).show();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	}

function getRequirements(diary) {
	table = "#table"+diary;
	data ={diary: diary};

	if(document.getElementById('radioChar1')){//Check if exists
		if(document.getElementById('radioChar1').checked){
	  		char = document.getElementById('radioChar1').value;
			data ={diary: diary, char: char};
		}
	}	
	if(document.getElementById('radioChar2')){//Check if exists
		if(document.getElementById('radioChar2').checked){
	  		char = document.getElementById('radioChar2').value;

			data ={diary: diary, char: char};
		}
	}	
	if(document.getElementById('radioChar3')){//Check if exists
		if(document.getElementById('radioChar3').checked){
	  		char = document.getElementById('radioChar3').value;
			data ={diary: diary, char: char};
		}
	}	
	if(document.getElementById('radioChar4')){//Check if exists
		if(document.getElementById('radioChar4').checked){
	  		char = document.getElementById('radioChar4').value;
			data ={diary: diary, char: char};
		}
	}
		//Get the stats for selected character
		$.ajax({
			type: "POST",
			url: "achievementScripts/requirements.php",
			data: data,
			cache: false,

			success: function(data) {
			$(table).html(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	addActive(diary);
	}

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

function addActive(diary){	
	$('#table'+diary).removeClass('hidden');
	$('#'+diary).addClass('active');
	$('#'+diary).attr("onclick","hide(this.id)");
}

function hide(diary){
	$('#table'+diary).addClass('hidden');
	$('#'+diary).removeClass('active');
	$('#'+diary).attr("onclick","getRequirements(this.id)");
}

function hideElement(elementId)
{
	$( "#table"+elementId).hide();

	$( "#hidebutton"+elementId).hide();
	$( "#showbutton"+elementId).show();

}
function showElement(elementId)
{
	$( "#table"+elementId).show();

	$( "#showbutton"+elementId).hide();
	$( "#hidebutton"+elementId).show();
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>



