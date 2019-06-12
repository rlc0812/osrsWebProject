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
        <a class="nav-link" href="accountManagement/registrationPage.php">Registration</a>
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
        <a class="nav-link" href="itemStatsData/grandExchange.php"><img class="pr-1" src="images/coin_icons/Coins_250.png">Exchange</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="alchScripts/alchPage.php"><img class="pr-1" src="images/spell_icons/High_Level_Alchemy_icon.png">High Alchemy Calculator</a>
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
<h1 class="pt-1 text-center">Max Hit Calculator</h1>
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
			<button type="button" class="btn-primary">Get Strength</button>
			</div>	
			';
		}
}
?>

</div>
</div>
<div class="container blueBg border border-dark mt-5 p-2">
	<div class="row pt-5">
		<div class="col">
			<div class="container-fluid text-center">
				<img src="images/slot_images/Equipment_slots.png" width="336" height="428" alt="equipment" usemap="#equipmentMap">
				<map name="equipmentMap">
					<area shape="rect" coords="112,0,180,68" alt="Head">
					<area shape="rect" coords="30,78,98,146" alt="Cape">
					<area shape="rect" coords="112,78,180,146" alt="Neck">
					<area shape="rect" coords="194,78,262,146" alt="Ammunition">
					<area shape="rect" coords="0,156,68,224" alt="Weapon">
					<area shape="rect" coords="112,156,180,224" alt="Body">
					<area shape="rect" coords="224,156,292,224" alt="Shield">
					<area shape="rect" coords="112,236,180,304" alt="Legs">
					<area shape="rect" coords="0,316,68,384" alt="Hands">
					<area shape="rect" coords="112,316,180,384" alt="Feet">
					<area shape="rect" coords="224,316,292,384" alt="Ring">
				</map>
			</div>
		</div>

		<div class="col text-right">
			<div class="container-fluid text-center">
				<table class="table-responsive no-border">
					<tr>
						<td><div style="height: 100px; overflow:auto;"><label for="strengthLevel">Strength Level </label></div></td>
						<td><div style="height: 100px; overflow:auto;"><input type="text" class="text-center w-100" id="strengthLevel" placeholder="Enter strength"></div></td>
						<div>
					</tr>
					<tr>
						<td><div style="height: 100px; overflow:auto;">
							<label for="itemName">Boosts</label></div>
						</td>
						<td><div style="height: 100px; overflow:auto;">
							<select name="itemName" class="w-100">
								<option>Select boost</option>
								<option>Strength potion</option>
								<option>Super strength potion</option>
								<option>Dragon battleaxe special</option>
								<option>Combat potion</option>
								<option>Super combat potion</option>
								<option>Zamorak brew</option>
								<option>Dragon battleaxe special</option>
								<option>Overload potion(-)</option>
								<option>Overload potion</option>
								<option>Overload potion(+)</option>
							</select><br></div>
						</td>
					</tr>
					<tr>
						<td><div style="height: 100px; overflow:auto;">
						<label for="prayer">Prayers</label></div>
						</td>
						<td><div style="height: 100px; overflow:auto;">
						<select name="prayer" class="w-100">
							<option>Select prayer</option>
							<option>Burst of Strength</option>
							<option>Superhuman Strength</option>
							<option>Ultimate Strength</option>
							<option>Chivalry</option>
							<option>Piety</option>
						</select><br></div>
						</td>
					</tr>
					<tr>
						<td><div style="height: 100px; overflow:auto;">
						<label for="attackStyle">Attack Style</label></div>
						</td>
						<td><div style="height: 100px; overflow:auto;">
						<select name="attackStyle" class="w-100">
							<option>Select style</option>
							<option>Accurate</option>
							<option>Aggressive</option>
							<option>Controlled</option>
							<option>Defensive</option>
						</select><br></div>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col text-center">
			<div class="container-fluid text-center">
				<select name="itemName" class="mb-2">
						<option>Select item slot from left.</option>
				</select><br>
					<img src="images/slot_images/Head_slot.png"><span id="headSlot">None</span><br>
					<img src="images/slot_images/Cape_slot.png"><span id="capeSlot">None</span><br>
					<img src="images/slot_images/Neck_slot.png"><span id="neckSlot">None</span><br>
					<img src="images/slot_images/Ammunition_slot.png"><span id="ammoSlot">None</span><br>
					<img src="images/slot_images/Weapon_slot.png"><span id="weaponSlot">None</span><br>
					<img src="images/slot_images/Body_slot.png"><span id="bodySlot">None</span><br>
					<img src="images/slot_images/Shield_slot.png"><span id="shieldSlot">None</span><br>
					<img src="images/slot_images/Legs_slot.png"><span id="legsSlot">None</span><br>
					<img src="images/slot_images/Hands_slot.png"><span id="handsSlot">None</span><br>
					<img src="images/slot_images/Feet_slot.png"><span id="feetSlot">None</span><br>
					<img src="images/slot_images/Ring_slot.png"><span id="ringSlot">None</span><br>
			</div>
		</div>
	</div>

	<button type="button" class="btn-primary text-center">Calculate!</button><br>
</div>

<div class="container-fluid pb-4 text-center">
	<a onclick ="scrollToTop();" href="#">Go to top</a>
</div>

<script type="text/javascript">

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

		$.ajax({
			type: "POST",
			url: "cluescroll/cluescrollRequirements.php",
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



