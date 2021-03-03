<?php
session_start();
//include('maxHitScripts/getSlotItems.php');
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
	<title>OSRS Life: Max Hit Calculator</Title>
</head>
 
<body>
<div id="bannerimage"></div>
<?php
include_once('nav.php');
include_once('nav.js');
?>
</div>
	<!--Highlight the div-->
	<script type="text/javascript">
	window.onload = function(){
	addActiveNav('maxHitNav');
	}
	</script>
	
<?php
if(isset($_SESSION['u_userID'])){
	include_once('sessionFunctions/loggedUser.php');
	welcomeMessage('3');
}
?>

<h1 class="pt-3 text-center itemText2">Max Hit Calculator</h1>
<?php
if(isset($_SESSION['u_userID'])){
	include('maxHitScripts/maxHitQueries.php');
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
			  <h3 class="itemText2">Please select a character to check diary requirements</h3>
			  ';
  
			  echo'
			  <div class="form-check-inline whiteBlueTintBg p-2 border border-dark">
			  <input type="radio" class="form-check-input" id="radioChar0" value ="'.htmlspecialchars($char1).'" name="characterSelection" checked>
			  <label class="form-check-label itemText2" for="radioChar0"><b>Use None</b></label>
			  </div>	
		  ';
			  if($char1!==NULL){
				  echo'
				  <div class="form-check-inline whiteBlueTintBg p-2 border border-dark">
				  <input type="radio" class="form-check-input" id="radioChar1" value ="'.htmlspecialchars($char1).'" name="characterSelection">
				  <label class="form-check-label itemText2" for="radioChar1"><b>'.$char1.'</b></label>
				  </div>	
				  ';
			  }
			  if($char2!==NULL){
				  echo'
				  <div class="form-check-inline whiteBlueTintBg p-2 border border-dark">
				  <input type="radio" class="form-check-input" id="radioChar2" value ="'.htmlspecialchars($char2).'" name="characterSelection">
				  <label class="form-check-label itemText2" for="radioChar2"><b>'.$char2.'</b></label>
				  </div>	
				  ';
			  }
			  if($char3!==NULL){
				  echo'
				  <div class="form-check-inline whiteBlueTintBg p-2 border border-dark">
				  <input type="radio" class="form-check-input" id="radioChar3" value ="'.htmlspecialchars($char3).'" name="characterSelection">
				  <label class="form-check-label itemText2" for="radioChar3"><b>'.$char3.'</b></label>
				  </div>	
				  ';
			  }
			  if($char4!==NULL){
				  echo'
				  <div class="form-check-inline whiteBlueTintBg p-2 border border-dark">
				  <input type="radio" class="form-check-input" id="radioChar4" value ="'.htmlspecialchars($char4).'" name="characterSelection">
				  <label class="form-check-label itemText2" for="radioChar4"><b>'.$char4.'</b></label>
				  </div>	
				  ';
			  }
			  echo'
			  <button type="button" class="btn-primary itemText2" onclick="getCharacterStrength();">Get Strength</button>
			  </div>	
			  ';
		  }
}
?>

</div>
</div>
<div class="container blueBg mt-3 mb-3 border border-dark">

	<div class="row pt-5">
		<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 pl-0 ml-0 pr-0 mr-0">
		<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 ml-0 pr-0 mr-0 mb-0 pb-0">
					<h4 class="text-center itemText2">Click Slot Icon to Select Item</h4>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 ml-0 pr-0 mr-0 mb-0 pb-0">
				<div class="container-fluid text-center">
					<img class="ml-4" src="images/slot_images/Equipment_slots.png" width="336" height="428" alt="equipment" usemap="#equipmentMap">
					<map name="equipmentMap">
						<area class="pointHover" shape="rect" coords="112,0,180,68" alt="Head" onclick="populateSlot('Head','#itemSlotField');" id="headMap">
						<area class="pointHover" shape="rect" coords="30,78,98,146" alt="Cape" onclick="populateSlot('Cape','#itemSlotField');">
						<area class="pointHover" shape="rect" coords="112,78,180,146" alt="Neck" onclick="populateSlot('Neck','#itemSlotField');">
						<area shape="rect" coords="194,78,262,146" alt="Ammunition">
						<area class="pointHover" shape="rect" coords="0,156,68,224" alt="Weapon" onclick="populateSlot('WeaponMenu','#itemSlotField');">
						<area class="pointHover" shape="rect" coords="112,156,180,224" alt="Body" onclick="populateSlot('Body','#itemSlotField');">
						<area class="pointHover" shape="rect" coords="224,156,292,224" alt="Shield" onclick="populateSlot('Shield','#itemSlotField');">
						<area class="pointHover" shape="rect" coords="112,236,180,304" alt="Legs" onclick="populateSlot('Legs','#itemSlotField');">
						<area class="pointHover" shape="rect" coords="0,316,68,384" alt="Hands" onclick="populateSlot('Hands','#itemSlotField');">
						<area class="pointHover" shape="rect" coords="112,316,180,384" alt="Feet" onclick="populateSlot('Feet','#itemSlotField');">
						<area class="pointHover" shape="rect" coords="224,316,292,384" alt="Ring" onclick="populateSlot('Ring','#itemSlotField');">
					</map>
				</div>
			</div>
			
			<div class="container-fluid text-center">
				<div name="itemSlotField" id="itemSlotField" class="mr-3">
				</div>
				<div id="selectMenu2" name="selectMenu2" class="mr-3 form-group"></div>		
			</div>
		</div>



		<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-0 pl-0 ml-0 pr-0 mr-0">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 ml-0 pr-0 mr-0 mb-0 pb-0">
					<h4 class="text-center itemText2">Current Gear</h4>
				</div>
			</div>
			<div class="container-fluid text-center darkBg border-dark border rounded-top mb-0 pb-0">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 ml-0 pr-0 mr-0 mb-0 pb-0">
						<div id="HeadSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/head_slot.png" id="headSlotImage"><br></div><div id="HeadSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="CapeSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/cape_slot.png" id="capeSlotImage"><br></div><div id="CapeSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="NeckSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/neck_slot.png" id="neckSlotImage"><br></div><div id="NeckSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="WeaponSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/weapon_slot.png" id="weaponSlotImage"><br></div><div id="WeaponSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="BodySlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/body_slot.png" id="bodySlotImage"><br></div><div id="BodySlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 ml-0 pr-0 mr-0 mb-0 pb-0">
						<div id="ShieldSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/shield_slot.png" id="shieldSlotImage"></div><div id="ShieldSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="LegsSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/legs_slot.png" id="legsSlotImage"></div><div id="LegsSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="HandsSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/hands_slot.png" id="handsSlotImage"></div><div id="HandsSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="FeetSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/feet_slot.png" id="feetSlotImage"></div><div id="FeetSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
						<div id="RingSlotImageDiv" class="border-left border-right border-top border-dark"><img class="mt-1" height="32" width="32" src="images/slot_images/ring_slot.png" id="ringSlotImage"></div><div id="RingSlot" class="itemText border-left border-right border-bottom border-dark" value="0">None<span class="yellowText"> +0</span></div>
					</div>
				</div>
			</div>
			<div class="container-fluid text-center pt-3 darkBg border-dark border-bottom border-right border-left rounded-bottom">
				<div class="text-align-center darkBg">
					<h3 class="itemText2 yellowText">Total Strength Bonus</h3>
					<h3 class="itemText2 yellowText" id="currentStrengthBonus" value="0">0</h3>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 pl-0 ml-0 pr-0 mr-0 mt-0 pt-0">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 ml-0 pr-0 mr-0 mb-0 pb-0">
					<h4 class="text-center itemText2">Other Bonuses</h4>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 ml-0 pr-0 mr-0 mb-0 pb-0">
						<div class="container-fluid text-left mt-3 pr-5 pl-5">

								<div class="form-group mb-0 mt-2 pb-0 pt-0">
									<label class="itemText2 m-0" for="strengthLevel">Strength Level </label><br>
									<div id="strengthLevelDiv">
									<input type="text" class="form-control" id="strengthLevel" placeholder="Enter strength"></div>
									<div class="text-danger" id="strengthLevelMessage"></div>
								</div>
						
								<div class="form-group mb-0 mt-2 pb-0 pt-0">
									<label class="itemText2 m-0" for="itemName">Boosts</label><br>
									<select name="itemName" id="boost" class="form-control w-100 text-center">
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
									</select>
								</div>				
							
								<div class="form-group mb-0 mt-2 pb-0 pt-0">
									<label class="itemText2 m-0" for="prayer">Prayer</label><br>
									<select name="prayer" id="prayer" class="form-control">
										<option>None</option>
										<option>Burst of Strength</option>
										<option>Superhuman Strength</option>
										<option>Ultimate Strength</option>
										<option>Chivalry</option>
										<option>Piety</option>
									</select>
								</div>

								<div class="form-group mb-0 mt-2 pb-0 pt-0">
									<label class="itemText2 m-0" for="attackStyle">Attack Style</label><br>
									<select name="attackStyle" id="attackStyle" class="form-control">
										<option>Select style</option>
										<option>Accurate</option>
										<option>Aggressive</option>
										<option>Controlled</option>
										<option>Defensive</option>
									</select>
								</div>
								<div class="text-danger hidden" id="attackStyleMessage">Please select an attack style</div>

								<div class="form-group mb-0 mt-2 pb-0 pt-0">
									<label class="itemText2 m-0" for="sets">Item Sets</label><br>
									<select name="sets" id="sets" class="form-control">
										<option selected="selected" id="none">Select item set</option>
										<option id="void">Void</option>
										<option id="eliteVoid">Elite Void</option>
										<option id="obsidian">Obsidian</option>
										<option id="dharok">Dharok's</option>
										<option id="maxStrength">Max Strength</option>
									</select>
								</div>
							
							<div id="prayerDiv" class="hidden">
								<div class="form-group mb-0 mt-2 pb-0 pt-0">
								<label class="itemText2" for="prayerMissing">Prayer Missing </label><br>
									<div id="strengthLevelDiv">
									<input type="text" class="form-control w-100" id="prayerMissing" placeholder="Enter Missing Prayer Points"></div>
									<div class="text-danger" id="prayerMissingMessage">For Abyssal bludgeon special</div>
								</div>
							</div>
							
						<div id="hpDiv" class="container-fluid m-0 hidden">
							<div class="row pb-0">
								<div class="col-6 pb-0">
								<div class="form-group mb-0 mt-2 pb-0 pt-0">
									<div id="currentHPDiv">
										<label class="itemText2" for="currentHP">Current HP</label><br>
										<input type="text" class="form-control w-100" id="currentHP" placeholder="Current"></div>
									</div>	
								</div>
								<div class="col-6">
									<div id="maxHPDiv">
										<div class="form-group mb-0 mt-2 pb-0 pt-0">
											<label class="itemText2" for="maxHP">Max HP</label><br>
											<input type="text" class="form-control w-100" id="maxHP" placeholder="Max"></div>
										</div>
									</div>		
								</div>		
								<div class="text-danger" id="hpMessage">For Dharok's set</div>			
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>

	<div class="container border-top border-dark pt-2 ml-0 mr-0 pl-0 pr-0">
	<div class="vertical-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<div class="container-fluid pr-5 pl-5">
							<div class="form-group mb-0 mt-2 pb-0 pt-0">
								<div class="row">
									<div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 text-left">
										<label for="enemyType" class="itemText2">Select Enemy Type</label><br>
										<select name="enemyType" id="enemyType" class="w-100 text-left form-control">
											<option selected="selected">No type</option>
										</select>
									</div>
								</div>
								<br>
							</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<div class="container-fluid text-center align-center">
					<div class="align-self-center">
						<button type="button" class= "btn-primary pl-5 pr-5 pt-2 pb-2 itemText" onclick="calculateMaxHit();">Calculate Hit!</button><br>
					</div>
				</div>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<div class="container-fluid text-center">
						<div class="d-inline" id="enemyText"></div>
						<div class="hidden" id="maxHit">
						<h3 class="itemText2">Max Melee Hit</h3> 
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
</div>	


<script src="maxHitScripts/maxHitFunctions.js"></script>

</body>
</html>
