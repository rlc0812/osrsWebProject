<?php
session_start();
error_reporting(E_ALL);
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
		<li class="nav-item active">
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
        <a class="nav-link" href="cluescroll.php"><img class="pr-1 maxHeightIcon" src="images/untradeable_icons/Clue_scroll_(master).webp">Clue Scroll Requirements</a>
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
else{
	echo '<h3 class="pt-4 pl-5">Please <a href="loginPage.php">login</a> to add character stats to your account.</br>';
	echo'<p>You\'ll be automatically redirected in <span id="count">10</span> seconds...</p>';
}
?>

<?php
if(isset($_SESSION['u_userID'])){
include('homeScripts/itemApiCall.php');
echo '
<div class="container-fluid p-0">
<div class="form-group pl-5 pt-5">
<input type="text" id="ign" placeholder=" Enter name here:">
<input class="btn-primary" type="button" id = "addBtn" defaultvalue ="gohan ssj 2" name="submitButton" onclick="passData();" value="Add Character">
<p id="message"></p>
</div>
</form>
<p id="statTable1"></p>
<p id="statTable2"></p>
<p id="statTable3"></p>
<p id="statTable4"></p>
</div>';
}
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<?php
if(isset($_SESSION['u_userID'])){
	//Display tables on page load
	$statTableArray = getStats($_SESSION['u_userID']);

	echo '<div class="container-fluid align-center pl-5 pr-5">';
	echo '<div class="row" id="tableRow">';
	tableCreation($statTableArray[0],'1');
	tableCreation($statTableArray[1],'2');
	tableCreation($statTableArray[2],'3');
	tableCreation($statTableArray[3],'4');
	echo '</div>';
	echo '</div>';
}
?>
</body>
</html>
<script type="text/javascript">
	function passData() {
		var name = document.getElementById("ign").value;
		
		
		var userID = "<?php echo ($_SESSION['u_userID']); ?>";
		if (name == '') 
		{
			alert("Please enter a username to be added first:");
		} 
		else 
		{
		refreshAll();
			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "homeScripts/itemApiCall.php",
				data: 'ign='+name+'&userID='+userID,
				cache: false,
				success: function(data) {
					refreshAll();
					$("#tableRow").html(data);
				},
				error: function(err) {
					alert(err.status);
				}
			});
		}

		return false;
		}

	function dropCharacter(charNum) {
		var name = 'btn'+charNum;
		var userID = "<?php echo ($_SESSION['u_userID']); ?>";
		// AJAX code to drop character
			$.ajax({
				type: "POST",
				url: "homeScripts/dropCharacter.php",
				data: 'btn='+name+'&userID='+userID,
				cache: false,
				success: function(data) {
				$("#tableContainer"+charNum).html(data);
				},
				error: function(err) {
					alert(err.responseStatus);
				}
			});
		}

	function refreshAll(){
		$( "#tableContainer1").remove();
		$( "#tableContainer2").remove();
		$( "#tableContainer3").remove();
		$( "#tableContainer4").remove();
		$('div.col-xs-3 col-sm-3 col-md-3 col-lg-3').removeAttr('id');
		$('button#btn btn-danger').removeAttr('id');
	}

</script>

<script type="text/javascript">

window.onload = function(){

(function(){
  var counter = 10;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
    //    alert('this is where it happens');
        clearInterval(counter);
		$(location).attr('href', 'loginPage.php')
    }

  }, 1000);

})();

}

</script>