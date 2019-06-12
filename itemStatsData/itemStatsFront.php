<php?
include('/home/ricky/RunescapeProject/phpScript/errorLogging.php');//To log errors
error_reporting(E_ALL);

?>


<html lang="en-US">


<head>
<meta name="viewport" content="width=device-width, initial scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="loginPage.css">
	<meta charset="UTF-8">
	<title>OSRS Builds</Title>
</head>
<body>

<div class="container">
<h2>Enter a  to be added:</h2><br>
<p>'format like so':</p>
<div class="form-group">
<input type="text" id="itemName" placeholder="Enter item name here:"><br>
  <input type="radio" name="item" id="head"  value="Head_slot_table">Head
  <input type="radio" name="item" id="body"  value="Body_slot_table">Body
  <input type="radio" name="item" id="legs"  value="Legs_slot_table">Legs<br>
  <input type="radio" name="item" id="cape"  value="Cape_slot_table">Cape
  <input type="radio" name="item" id="ammo" value="Ammunition_slot_table"> Ammunition<br>
  <input type="radio" name="item" id="feet"  value="Feet_slot_table">Feet
  <input type="radio" name="item" id="hand"  value="Hand_slot_table">Hands<br>
  <input type="radio" name="item" id="neck"  value="Neck_slot_table"> Neck
  <input type="radio" name="item" id="ring"  value="Ring_slot_table"> Ring<br>
  <input type="radio" name="item" id="shield"  value="Shield_slot_table">Shield<br>
  <input type="radio" name="item" id="two-hand"  value="Two-handed_slot_table"> Two-handed-wep
  <input type="radio" name="item" id="weapon"  value="Weapon_slot_table"> One-handed-wep<br>

<input type="button" id = "addBtn" name="submitButton" onclick="insertData();" value="Add item">
<p id="message"></p>
</form>
<div>
<p class="message"></p>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">

//Passes a valid username so the api gets stats and enters data into user table
function insertData() {
	var name = document.getElementById("itemName").value;

	if (document.getElementById('ammo').checked) {
	  type = document.getElementById('ammo').value;
	}	
	else if (document.getElementById('body').checked) {
	  type = document.getElementById('body').value;
	}
	else if (document.getElementById('cape').checked) {
	  type = document.getElementById('cape').value;
	}
	else if (document.getElementById('feet').checked) {
	  type = document.getElementById('feet').value;
	}
	else if (document.getElementById('hand').checked) {
	  type = document.getElementById('hand').value;
	}
	else if (document.getElementById('head').checked) {
	  type = document.getElementById('head').value;
	}
	else if (document.getElementById('legs').checked) {
	  type = document.getElementById('legs').value;
	}
	else if (document.getElementById('neck').checked) {
	  type = document.getElementById('neck').value;
	}
	else if (document.getElementById('ring').checked) {
	  type = document.getElementById('ring').value;
	}
	else if (document.getElementById('shield').checked) {
	  type = document.getElementById('shield').value;
	}
	else if (document.getElementById('two-hand').checked) {
	  type = document.getElementById('two-hand').value;
	}
	else if (document.getElementById('weapon').checked) {
	  type = document.getElementById('weapon').value;
	}


	if (name == '') 
	{
		alert("Please enter a item:");
	} 
	else 
	{
		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../getItemStats.php",
			data: 'itemName='+name+'&type='+type,
			cache: false,
			success: function(data){
			$("#message").html(data);
			},
			error: function(err) {
				alert(err)
			}
		});
	}
	return false;
	}
  </script>

</body>
</html>
<?php


?>
