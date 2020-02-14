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
        <li class="nav-item">
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

<h1 class="pt-1 text-center">Cluescroll Requirement Calculator</h1>
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
<h3>Cluescroll Skill Requirements</h3>
        <div class="row">

            <div class="col-6">
                <ul class="list-group list-group-flush">
										<li class="list-group-item" id="skillBeginner" onclick="getRequirements(this.id);"><img src="images/untradeable_icons/Clue_scroll_(beginner).png">Skills for Beginner (Charlie the Tramp steps)</li>
										<div id="tableskillBeginner"></div>
										<li class="list-group-item" id="skillMedium" onclick="getRequirements(this.id);"><img src="images/untradeable_icons/Clue_scroll_(medium).png">Skills for Medium</li>
										<div id="tableskillMedium"></div>
										<li class="list-group-item" id="skillElite" onclick="getRequirements(this.id);"><img src="images/untradeable_icons/Clue_scroll_(elite).png">Skills for Elite</li>
										<div id="tableskillElite"></div>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-group list-group-flush">
								<li class="list-group-item" id="skillEasy" onclick="getRequirements(this.id);"><img src="images/untradeable_icons/Clue_scroll_(easy).png">Skills for Easy</li>
										<div id="tableskillEasy"></div>
										<li class="list-group-item" id="skillHard" onclick="getRequirements(this.id);"><img src="images/untradeable_icons/Clue_scroll_(hard).png">Skills for Hard</li>
										<div id="tableskillHard"></div>
										<li class="list-group-item" id="skillMaster" onclick="getRequirements(this.id);"><img src="images/untradeable_icons/Clue_scroll_(master).png">Skills for Master</li>
										<div id="tableskillMaster"></div>
                </ul>
            </div>

        </div>
</div>

<div class="container-fluid p-5 text-center">
	<h3>Sherlock Step Requirements</h3>
	<ul class="list-group list-group-flush">
		<li class="list-group-item" id="eliteSherlock" onclick="getRequirements(this.id);"><img src="images/item_icons/Deerstalker.png">Sherlock Elite<img src="images/untradeable_icons/Clue_scroll_(elite).png"></li>
		<div id="tableeliteSherlock"></div>
		<li class="list-group-item" id="masterSherlock" onclick="getRequirements(this.id);"><img src="images/item_icons/Deerstalker.png">Sherlock Master<img src="images/untradeable_icons/Clue_scroll_(master).png"></li>
		<div id="tablemasterSherlock"></div>
	</ul>
</div>

<div class="container-fluid p-5 text-center">
	<h3>Falo the Bard Steps</h3>
	<ul class="list-group list-group-flush">
		<li class="list-group-item" id="falo" onclick="getRequirements(this.id);"><img src="images/untradeable_icons/Lyre.png">Falo the Bard</li>
		<div id="tablefalo"></div>
	</ul>
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



