<?php
session_start();
error_reporting(E_ALL);
?>

<!DOCTYPE html> 
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<title>OSRS Life: Home</Title>
</head>
 
<body>
<div id="bannerimage"></div>
<?php
include_once('nav.php');
include_once('nav.js');
?>
</div>


<?php
if(isset($_SESSION['u_userID'])){
	include_once('sessionFunctions/loggedUser.php');
	welcomeMessage('0');
}
else{
?>
	<div class="container-fluid w-50 mt-5 blueBg border border-dark">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 ">
				<span class="itemText2 text-center">
					<h3 class="pt-3">Welcome to OSRS Life.</h3>
					<h3 class="pt-2">Choose an option below to get started.</h3>
				</span>
			</div>
		</div>	
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt-3 text-center border-top border-right border-dark p-2">
				<span class="itemText2">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 p-3">
							<h2 class="text-center">Existing Users</h2>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3 align-self-center">
							<h3 class="pt-1 text-left">Have an account.</h3>
							<a class="btn btn-primary float-left" href="loginPage.php">Login here.</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
							<img src="images/Durial321.png" class="img-fluid" style="height:200px;">
						</div>
					</div>
				</span>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt-3 text-center border-top border-dark p-2">
				<span class="itemText2">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 p-3">
							<h2 class="text-center">New Users</h2>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-3 align-self-center">
						<h3 class="text-left">Need an account?</h3>
						<a class="btn btn-primary float-left" href="registrationPage.php">Register now!</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-3 ">
						<img src="images/botMan.png" class="img-fluid" style="height:200px;">
						</div>
					</div>
				</span>
			</div>




		</div>
	</div>

<?php
}
?>

<?php
if(isset($_SESSION['u_userID'])){
include('homeScripts/itemApiCall.php');
echo '
<div class="container-fluid p-0 itemText2">
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

	echo '<div class="container-fluid align-center blueBg border border-dark pl-5 pr-5 pt-5">';
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
		
		
		var userID = "<?php  if(isset($_SESSION['u_userID'])){echo ($_SESSION['u_userID']);} ?>";
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
		var userID = "<?php  if(isset($_SESSION['u_userID'])){echo ($_SESSION['u_userID']);} ?>";
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
addActiveNav('indexNav');
/*
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
*/
}

</script>
