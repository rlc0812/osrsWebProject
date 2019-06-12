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
    <div class="container">
       <h3>Enter New Item to Generate mysql db statement to add</h3>


            <p>Item Name<br> <input type="text" id="itemName"placeholder="Enter item name here"></p>
            <input type="radio" name="item" id="head" value="Head">Head<br>
            <input type="radio" name="item" id="body" value="Body">Body<br>
            <input type="radio" name="item" id="legs" value="Legs">Legs<br>
            <input type="radio" name="item" id="cape" value="Cape">Cape<br>
            <input type="radio" name="item" id="ammo" value="Ammunition">Ammunition<br>
            <input type="radio" name="item" id="feet" value="Feet">Feet<br>
            <input type="radio" name="item" id="hand" value="Hands">Hands<br>
            <input type="radio" name="item" id="neck" value="Neck">Neck<br>
            <input type="radio" name="item" id="ring" value="Ring">Ring<br>
            <input type="radio" name="item" id="shield" value="Shield">Shield<br>
            <input type="radio" name="item" id="two-hand" value="Two_handed_weapon">Two-handed-wep<br>
            <input type="radio" name="item" id="weapon" value="Weapon">One-handed-wep<br>

        <table class="table-dark p-3 table-sm text-center">
        <tr>
            <td>
            </td>
            <th>
                Stab
            </th>
            <th>
                Slash
            </th>
            <th>
                Crush
            </th>
            <th>
                Magic
            </th>
            <th>
                Ranged
            </th>
        </tr>

        <tr>
            <td>Attack:</td>
            <td>
                <input type="text" id="stabAttack">
            </td>
            <td>
                <input type="text" id="slashAttack">
            </td>
            <td>
                <input type="text" id="crushAttack">
            </td>
            <td>
                <input type="text" id="magicAttack">
            </td>
            <td>
                <input type="text" id="rangedAttack">
            </td>
        </tr>

        <tr>
            <td>Defence:</td>
            <td>
                <input type="text" id="stabDefence">
            </td>
            <td>
                <input type="text" id="slashDefence">
            </td>
            <td>
                <input type="text" id="crushDefence">
            </td>
            <td>
                <input type="text" id="magicDefence">
            </td>
            <td>
                <input type="text" id="rangedDefence">
            </td>
        </tr>
    </table>
    <table class="table-dark  table-sm p-3 text-center">
        <tr>
            <th></th>
            <th>Melee</th>
            <th>Magic:</th>
            <th>Ranged:</th>
        </tr>
        <tr>
            <td>Strength:</td>
            <td>
                <input type="text" id="meleeStrength">
            </td>
            <td>
                <input type="text" id="magicStrength">
            </td>
            <td>
                <input type="text" id="rangedStrength">
            </td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td>Prayer:</td>
            <td>
                <input type="text" id="prayer">
            </td>
        </tr>
        <tr>
            <td>Attack Speed:</td>
            <td>
                <input type="text" id="attackSpeed">
            </td>
        </tr>

    <table>
    <input class="btn-primary" type="button" id = "addBtn" defaultvalue ="gohan ssj 2" name="submitButton" onclick="passData();" value="Generate Statement">
    <div id="mySql"></div>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	function passData() {
        info = [];
        info[0] = document.getElementById("itemName").value;

    if (document.getElementById('ammo').checked) {
        info[1] = document.getElementById('ammo').value;
	}	
	else if (document.getElementById('body').checked) {
        info[1] = document.getElementById('body').value;
	}
	else if (document.getElementById('cape').checked) {
        info[1] = document.getElementById('cape').value;
	}
	else if (document.getElementById('feet').checked) {
        info[1] = document.getElementById('feet').value;
	}
	else if (document.getElementById('hand').checked) {
        info[1] = document.getElementById('hand').value;
	}
	else if (document.getElementById('head').checked) {
        info[1] = document.getElementById('head').value;
	}
	else if (document.getElementById('legs').checked) {
        info[1] = document.getElementById('legs').value;
	}
	else if (document.getElementById('neck').checked) {
        info[1] = document.getElementById('neck').value;
	}
	else if (document.getElementById('ring').checked) {
        info[1] = document.getElementById('ring').value;
	}
	else if (document.getElementById('shield').checked) {
        info[1] = document.getElementById('shield').value;
	}
	else if (document.getElementById('two-hand').checked) {
        info[1] = document.getElementById('two-hand').value;
	}
	else if (document.getElementById('weapon').checked) {
	    info[1] = document.getElementById('weapon').value;
	}


		info[2] = document.getElementById("stabAttack").value;
        info[3] = document.getElementById("slashAttack").value;
        info[4] = document.getElementById("crushAttack").value;
        info[5] = document.getElementById("magicAttack").value;
        info[6] = document.getElementById("rangedAttack").value;

        info[7] = document.getElementById("stabDefence").value;
        info[8] = document.getElementById("slashDefence").value;
        info[9] = document.getElementById("crushDefence").value;
        info[10] = document.getElementById("magicDefence").value;
        info[11] = document.getElementById("rangedDefence").value;

        info[12] = document.getElementById("meleeStrength").value;
        info[13] = document.getElementById("magicStrength").value;
        info[14] = document.getElementById("rangedStrength").value;

        info[15] = document.getElementById("prayer").value;
        info[16] = document.getElementById("attackSpeed").value;

			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "insertNewItemFunction1.php",
				data: {info:info},
				cache: false,
				success: function(data) {
					$("#mySql").html(data);
				},
				error: function(err) {
					alert(err.status);
				}
			});
            

		return false;
		}
</script>

<?php

?>