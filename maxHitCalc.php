<?php
session_start();
//include('maxHitScripts/getSlotItems.php');
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
	<title>OSRS Builds</Title>
</head>

 
<body>
<div id="bannerimage"></div>

<nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md p-0 pl-2">

<div class="navbar-header">
<a class="navbar-brand">OsrsBuilds</a>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarMobile">
        <ul class="nav navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="index.php"><img class="pr-1" src="images/spell_icons/Teleport_to_House_icon.png">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="loginPage.php">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="registrationPage.php">Registration</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="achievementDiary.php"><img class="pr-1" src="images/Achievement_Diaries_icon.png">Achievement Diary</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="pkingBuilds.php"><img class="pr-1 maxHeightIcon" src="images/item_icons/Dragon_claws.png">Pking Builds</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="equipsPage.php"><img class="pr-1" src="images/untradeable_icons/Graceful_top.png">Useful Untradeable Items</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="grandExchange.php"><img class="pr-1" src="images/coin_icons/Coins_250.png">Exchange</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="alchPage.php"><img class="pr-1" src="images/spell_icons/High_Level_Alchemy_icon.png">High Alchemy Calculator</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="slotPage.php"><img class="pr-1 maxHeightIcon" src="images/Worn_equipment.png">Item Slot Tables</a>
        </li>
	<li class="nav-item">
        <a class="nav-link" href="cluescroll.php"><img class="pr-1 maxHeightIcon" src="images/untradeable_icons/Clue_scroll_(master).png">Clue Scroll Requirements</a>
        </li>
        <li class="nav-item active">
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
<h2 class="pt-3 text-center">Max Hit Calculator</h2>
<?php
if(isset($_SESSION['u_userID'])){
	include('maxHitScripts/maxHitQueries.php');
	$statTableArray = getNames($_SESSION['u_userID']);
	$char1 = $statTableArray[0];
	$char2 = $statTableArray[1];
	$char3 = $statTableArray[2];
	$char4 = $statTableArray[3];
	if(($char1==NULL)&&($char2==NULL)&&($char3==NULL)&&($char4==NULL)){
	  echo '<h3 class="pt-4 pl-4">You must register a character in order to select strength level by account.</h3>';
	} else {
			echo'
			<div class ="container-fluid text-center pl-5 pt-5">
			<h3>Please select a character to get strength level</h3>
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
			<button type="button" class="btn-primary" onclick="getCharacterStrength();">Get Strength</button>
			</div>	
			';
		}
}
?>

</div>
</div>
<div class="container blueBg border border-dark mt-3 mb-3">
	<div class="row pt-5">
		<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
			<div class="container-fluid text-center">
			


			<h4 class="mr-3">Click images to select item</h4>


				<img class="ml-4" src="images/slot_images/Equipment_slots.png" width="336" height="428" alt="equipment" usemap="#equipmentMap">
				<map name="equipmentMap">
					<area shape="rect" coords="112,0,180,68" alt="Head" onclick="populateSlot('Head','#itemSlotField');" id="headMap">
					<area shape="rect" coords="30,78,98,146" alt="Cape" onclick="populateSlot('Cape','#itemSlotField');">
					<area shape="rect" coords="112,78,180,146" alt="Neck" onclick="populateSlot('Neck','#itemSlotField');">
					<area shape="rect" coords="194,78,262,146" alt="Ammunition">
					<area shape="rect" coords="0,156,68,224" alt="Weapon" onclick="populateSlot('WeaponMenu','#itemSlotField');">
					<area shape="rect" coords="112,156,180,224" alt="Body" onclick="populateSlot('Body','#itemSlotField');">
					<area shape="rect" coords="224,156,292,224" alt="Shield" onclick="populateSlot('Shield','#itemSlotField');">
					<area shape="rect" coords="112,236,180,304" alt="Legs" onclick="populateSlot('Legs','#itemSlotField');">
					<area shape="rect" coords="0,316,68,384" alt="Hands" onclick="populateSlot('Hands','#itemSlotField');">
					<area shape="rect" coords="112,316,180,384" alt="Feet" onclick="populateSlot('Feet','#itemSlotField');">
					<area shape="rect" coords="224,316,292,384" alt="Ring" onclick="populateSlot('Ring','#itemSlotField');">
				</map>
			</div>
			<div class="container-fluid text-center">
				<div name="itemSlotField" id="itemSlotField" class="mr-3">
				</div>
				<div id="selectMenu2" name="selectMenu2" class="mr-3"></div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="container text-center">
						
						<div style="height: 102px; overflow:auto;">
						<label for="strengthLevel">Strength Level </label><br>
							<div id="strengthLevelDiv">
							<input type="text" class="text-center w-75" id="strengthLevel" placeholder="Enter strength"></div>
							<div class="text-danger" id="strengthLevelMessage"></div>
							</div>
					

							<div style="height: 102px; overflow:auto;">
							<label for="itemName">Boosts</label><br>
							<select name="itemName" id="boost" class="w-75 text-center">
								<option>None</option>
								<option>Strength potion</option>
								<option>Super strength potion</option>
								<option>Combat potion</option>
								<option>Super combat potion</option>
								<option>Zamorak brew</option>
								<option>Overload potion(Nightmare Zone)</option>
								<option>Overload potion(-)</option>
								<option>Overload potion(Chambers of Xeric)</option>
								<option>Overload potion(+)</option>
							</select><br></div>
						
					
					
						
						<div style="height: 102px; overflow:auto;">
						<label for="prayer">Prayers</label><br>
						<select name="prayer" id="prayer" class="w-75 text-center">
							<option>None</option>
							<option>Burst of Strength</option>
							<option>Superhuman Strength</option>
							<option>Ultimate Strength</option>
							<option>Chivalry</option>
							<option>Piety</option>
						</select><br></div>
						
					
					
						

						<div style="height: 102px; overflow:auto;">
						<label for="attackStyle">Attack Style</label><br>
						<select name="attackStyle" id="attackStyle" class="w-75 text-center">
							<option>Select style</option>
							<option>Accurate</option>
							<option>Aggressive</option>
							<option>Controlled</option>
							<option>Defensive</option>
						</select>
						<br>
						<div class="text-danger hidden" id="attackStyleMessage">Please select an attack style</div>
						</div>

						<div style="height: 102px; overflow:auto;">
						<label for="sets">Sets</label><br>
						<select name="sets" id="sets" class="w-75 text-center">
							<option selected="selected" id="none">Select item set</option>
							<option id="void">Void</option>
							<option id="eliteVoid">Elite Void</option>
							<option id="obsidian">Obsidian</option>
							<option id="dharok">Dharok's</option>
						</select><br></div>
						
						<div id="prayerDiv" class="hidden" style="height: 102px; overflow:auto;">
						<label for="prayerMissing">Prayer Missing </label><br>
							<div id="strengthLevelDiv">
							<input type="text" class="text-center w-75" id="prayerMissing" placeholder="Enter Missing Prayer Points"></div>
							<div class="text-danger" id="prayerMissingMessage">For Abyssal bludgeon special</div>
							</div>
						
					<div id="hpDiv" class="container-fluid text-center m-0 hidden" style="height: 102px; overflow:auto;">
						<div class="row pb-0">
							<div class="col-6 pb-0">
								<div id="currentHPDiv">
								<label for="currentHP">Current HP</label><br>
								<input type="text" class="text-center w-100" id="currentHP" placeholder="Current"></div>
							</div>	
							<div class="col-6">
								<div id="maxHPDiv">
								<label for="maxHP">Max HP</label><br>
								<input type="text" class="text-center w-100" id="maxHP" placeholder="Max"></div>
							</div>		
						</div>		
						<div class="text-danger" id="hpMessage">For Dharok's set</div>			
					</div>
				
			
			</div>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">

			<div class="container-fluid text-center">
				<h4>Current Gear</h4>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="images/slot_images/Head_slot.png" id="headSlotImage"><br><div id="HeadSlot" value="0">None</div><br>
						<img src="images/slot_images/Cape_slot.png" id="capeSlotImage"><br><div id="CapeSlot" value="0">None</div><br>
						<img src="images/slot_images/Neck_slot.png" id="neckSlotImage"><br><div id="NeckSlot" value="0">None</div><br>
						<img src="images/slot_images/Weapon_slot.png" id="weaponSlotImage"><br><div id="WeaponSlot" value="0">None</div><br>
						<img src="images/slot_images/Body_slot.png" id="bodySlotImage"><br><div id="BodySlot" value="0">None</div><br>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="images/slot_images/Shield_slot.png" id="shieldSlotImage"><div id="ShieldSlot" value="0">None</div><br>
						<img src="images/slot_images/Legs_slot.png" id="legsSlotImage"><div id="LegsSlot" value="0">None</div><br>
						<img src="images/slot_images/Hands_slot.png" id="handsSlotImage"><div id="HandsSlot" value="0">None</div><br>
						<img src="images/slot_images/Feet_slot.png" id="feetSlotImage"><div id="FeetSlot" value="0">None</div><br>
						<img src="images/slot_images/Ring_slot.png" id="ringSlotImage"><div id="RingSlot" value="0">None</div><br>
					</div>

				</div>
			</div>
		</div>

	<div class="container border-top border-dark p-4">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<div class="container-fluid text-center h-100 justify-content-center">
					<div>
						<h3 class="d-inline">Total strength bonus: </h3>
						<h3 class="d-inline text-danger" id="currentStrengthBonus" value="0">0</h3>
					</div>
						<div style="overflow:auto;" class="pt-3">
						<label for="enemyType">Select Enemy Type</label><br>
						<select name="enemyType" id="enemyType" class="w-75 text-center">
							<option selected="selected">No type</option>
							<option id="undead">Undead</option>
							<option id="slayerTask">Slayer Task</option>
							<option id="demon">Demon</option>
							<option id="demonSlayerTask">Demon Slayer Task</option>
						</select>
						<br></div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<div class="container-fluid text-center">
						<button type="button" class= "btn-primary pl-5 pr-5 pt-2 pb-2" onclick="calculateMaxHit();">Calculate hit!</button><br>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<div class="container-fluid text-center">
						<div class="d-inline" id="enemyText"></div>
						<div class="hidden" id="maxHit">
						<h3 class="d-inline">Max melee hit:</h3> 
						<img class="icon" src="images/Red_hitsplat.png">
						<div class="d-inline maxHitText1Digit text-light" id="currentMaxHit">1</div>
						</div>

						<div id="maxHitSpec">
						</div>
				</div>
			</div>

		</div>
	</div>

</div>	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="maxHitScripts/maxHitFunctions.js"></script>

</body>
</html>
