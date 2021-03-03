<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Stylesheets for datatables functionality-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<!--Stylesheets for bootstrap functionaliy-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Bootstrap datables-->
<link rel="stylesheet" href="css/dataTablesBootstrap4min.css">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<title>OSRS Life: Cluescrolls</Title>
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
	addActiveNav('cluescrollNav');
	}
	</script>
	
<?php
if(isset($_SESSION['u_userID'])){
	include_once('sessionFunctions/loggedUser.php');
	welcomeMessage('3');
}
?>

<div class="container-fluid w-90">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-3 text-center blueBg border border-dark">
		<h1 class="pt-3 text-center itemText2">Cluescroll Requirement Calculator</h1>

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
					  </div>	
					  ';
				  }
		}
		?>
		<div class="container-fluid p-5 text-center">
		<h3 class="itemText2">Skill Requirements</h3>
				<div class="row">
					<div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12">
						<ul class="list-group list-group-flush">
												<li class="list-group-item" id="skillBeginner" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(beginner).png"><span style="margin-right: 31px;">Skills for Beginner (Charlie the Tramp steps)</span></li>
												<div id="tableskillBeginner"></div>
												<li class="list-group-item" id="skillEasy" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(easy).png"><span style="margin-right: 31px;">Skills for Easy</span></li>
												<div id="tableskillEasy"></div>
												<li class="list-group-item" id="skillMedium" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(medium).png"><span style="margin-right: 31px;">Skills for Medium</span></li>
												<div id="tableskillMedium"></div>
												<li class="list-group-item" id="skillHard" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(hard).png"><span style="margin-right: 31px;">Skills for Hard</span></li>
												<div id="tableskillHard"></div>
												<li class="list-group-item" id="skillElite" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(elite).png"><span style="margin-right: 31px;">Skills for Elite</span></li>
												<div id="tableskillElite"></div>
												<li class="list-group-item" id="skillMaster" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(master).png"><span style="margin-right: 31px;">Skills for Maste</span></li>
												<div id="tableskillMaster"></div>
						</ul>
					</div>
				</div>
		</div>

		<div class="container-fluid p-5 text-center">
			<h3 class="itemText2">Sherlock Steps</h3>
			<div class="row">
				<div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12">
					<ul class="list-group list-group-flush">
						<li class="list-group-item" id="eliteSherlock" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(elite).png"><span style="margin-right: 2px;">Sherlock Elite</span><img class="float-right" src="images/item_icons/Deerstalker.png"></li>
						<div id="tableeliteSherlock"></div>
						<li class="list-group-item" id="masterSherlock" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(master).png"><span style="margin-right: 2px;">Sherlock Master</span><img class="float-right" src="images/item_icons/Deerstalker.png"></li>
						<div id="tablemasterSherlock"></div>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid p-5 text-center">
			<h3 class="itemText2">Falo the Bard Steps</h3>
			<div class="row">
					<div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12">
					<ul class="list-group list-group-flush">
						<li class="list-group-item" id="falo" onclick="getRequirements(this.id);"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(elite).png"><img class="float-left" src="images/untradeable_icons/Clue_scroll_(master).png"><span style="margin-right: 36px;">Falo the Bard</span><img class="float-right" src="images/untradeable_icons/Lyre.png"></li>
						<div id="tablefalo"></div>
					</ul>
				</div>
			</div>
		</div>
	</div>
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

</body>
</html>



