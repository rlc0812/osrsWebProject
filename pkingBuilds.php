<?php
//include('/home/ricky/RunescapeProject/phpScript/errorLogging.php');//To log errors
include('getPkBuilds.php');
session_start();
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
	<title>OSRS Life: Pking Builds</Title>
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
	addActiveNav('pkingBuildsNav');
	}
	</script>
	
<?php
if(isset($_SESSION['u_userID'])){
	include_once('sessionFunctions/loggedUser.php');
	welcomeMessage('3');
}
?>
<div class="container-fluid">
	<div class="row">
		<div class ="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 offset-sm-0 col-xs-12 offset-xs-0 p-0 mt-5">
			<div class ="text-center pl-2 pt-0 pr-2">
				<div class="container-fluid pb-3 blueBg border border-dark">
					<h1 class="itemText2 pt-3">Popular PVP Account Builds</h1>
					<ul class="list-group">
						<li class="list-group-item list-group-item-primary" id="Berserker" onclick="getPkBuild('Berserker Pure',this.id);">Berserker Pure</li>
						<div id="tableBerserker"></div>
					</ul>
					<ul class="list-group">
						<li class="list-group-item" id="Void" onclick="getPkBuild('Void Pure',this.id);">Void Pure</li>
						<div id="tableVoid"></div>
					</ul>
					<ul class="list-group">
						<li class="list-group-item" id="Tank" onclick="getPkBuild('Range Tank',this.id);">Range Tank</li>
						<div id="tableTank"></div>
					</ul>
					<ul class="list-group">
						<li class="list-group-item" id="Piety" onclick="getPkBuild('Piety Pure',this.id);">Piety Pure</li>
						<div id="tablePiety"></div>
					</ul>
					<ul class="list-group">
						<li class="list-group-item" id="1Def" onclick="getPkBuild('1 Defence Pure',this.id);">1 Defence Pure</li>
						<div id="table1Def"></div>
					</ul>
					<ul class="list-group">
						<li class="list-group-item" id="Obby" onclick="getPkBuild('Obby Mauler',this.id);">Obby Mauler</li>
						<div class="text-left" id="tableObby"></div>
					</ul>
				</div>

				<div class="container-fluid mt-5 p-3 pr-5 pl-5 blueBg border border-dark">
					<h1 class="itemText2">Powerful PVP Weapons</h1>
					<h2 class="itemText2">Primary Weapons</h2>

					<h3 class="itemText2 pt-3"><img class="pb-1 pr-2" src="images/ability_icons/Attack.png"><span style="margin-right: 25px;">75 Attack</span></h3>
					<div class="list-group">
						<button type="button" id="Ghrazi_rapier" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Ghrazi rapier</button>
						<div id="tableGhrazi_rapier"></div>
						<button type="button" id="Saradomin&#039;s_blessed_sword" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Saradomin's blessed sword</button>
						<div id="tableSaradomins_blessed_sword"></div>
						<button type="button" id="Abyssal_tentacle" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Abyssal tentacle</button>
						<div id="tableAbyssal_tentacle"></div>
						<button type="button" id="Elder_maul" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Elder maul</button>
						<div id="tableElder_maul"></div>
					</div>

					<h3 class="itemText2 pt-3"><img class="pb-1 pr-2" src="images/ability_icons/Attack.png"><span style="margin-right: 25px;">70 Attack</span></h3>
					<div class="list-group">
						<button type="button" id="Dharok&#039;s_greataxe" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Dharok's greataxe</button>
						<div id="tableDharoks_greataxe"></div>
						<button type="button" id="Ahrim&#039;s_staff" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Ahrim's staff</button>
						<div id="tableAhrims_staff"></div>
						<button type="button" id="Abyssal_whip" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Abyssal whip</button>
						<div id="tableAbyssal_whip"></div>
						<button type="button" id="Saradomin_sword" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Saradomin sword</button>
						<div id="tableSaradomin_sword"></div>
					</div>

					<h3 class="itemText2 pt-3"><img class="pb-1 pr-2" src="images/ability_icons/Attack.png"><span style="margin-right: 25px;">65 Attack</span></h3>
					<div class="list-group">
						<button type="button" id="Leaf-bladed_battleaxe" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Leaf-bladed battleaxe</button>
						<div id="tableLeaf-bladed_battleaxe"></div>
					</div>

					<h3 class="itemText2 pt-3"><img class="pb-1 pr-2" src="images/ability_icons/Attack.png"><span style="margin-right: 25px;">60 Attack</span></h3>
					<div class="list-group">
						<button type="button" id="Dragon_scimitar" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Dragon scimitar</button>
						<div id="tableDragon_scimitar"></div>
						<button type="button" id="Barrelchest_anchor" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Barrelchest anchor</button>
						<div id="tableBarrelchest_anchor"></div>
						<button type="button" id="Dragon_2h_sword" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Dragon 2h sword</button>
						<div id="tableDragon_2h_sword"></div>
					</div>

					<h3 class="itemText2 pt-3"><img class="pb-1 pr-2" src="images/ability_icons/Attack.png"><span style="margin-right: 25px;">50 Attack</span></h3>
					<div class="list-group">
						<button type="button" id="Granite_hammer" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Granite hammer</button>
						<div id="tableGranite_hammer"></div>
						<button type="button" id="Leaf-bladed_sword" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Leaf-bladed sword</button>	 
						<div id="tableLeaf-bladed_sword"></div>
					</div>

					<h3 class="itemText2 pt-3"><img class="pb-1 pr-2" src="images/ability_icons/Strength.png"><span style="margin-right: 24px;">No Attack Req</span></h3>
					<div class="list-group">
						<button type="button" id="Slayer&#039;s_staff" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Slayer staff</button>
						<div id="tableSlayers_staff"></div>
						<button type="button" id="Red_topaz_machete" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Red topaz machete</button>
						<div id="tableRed_topaz_machete"></div>
						<button type="button" id="Bone_dagger" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Bone dagger (p++)</button>
						<div id="tableBone_dagger"></div>
						<button type="button" id="Tzhaar-ket-om" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Tzhaar-ket-om</button>
						<div id="tableTzhaar-ket-om"></div>
					</div>

					<h3 class="itemText2 pt-3"><img class="pb-1 pr-2" src="images/ability_icons/Ranged.png"><span style="margin-right: 23px;">Ranged</span></h3>
					<div class="list-group">
						<button type="button" id="Magic_shortbow" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Magic shortbow</button>
						<div id="tableMagic_shortbow"></div>
						<button type="button" id="Magic_shortbow_imbued" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Magic shortbow imbued</button>
						<div id="tableMagic_shortbow_imbued"></div>
						<button type="button" id="Armadyl_crossbow" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Armadyl crossbow</button>
						<div id="tableArmadyl_crossbow"></div>
						<button type="button" id="Dragon_crossbow" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Dragon crossbow</button>
						<div id="tableDragon_crossbow"></div>
						<button type="buttonRune_crossbow" id="Rune_crossbow" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Rune crossbow</button>
						<div id="tableRune_crossbow"></div>
						<button type="button" id="Light_ballista" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Light ballista</button>
						<div id="tableLight_ballista"></div>
						<button type="button" id="Heavy_ballista" onclick="displayStats(this.id);" class="list-group-item list-group-item-action">Heavy ballista</button>
						<div id="tableHeavy_ballista"></div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>

<div class="container-fluid pb-4 text-center">
	<a onclick ="scrollToTop();" href="#top">Go to top</a>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
 

 
</html>

<script type="text/javascript">
function displayStats(itemName,additionalMessage) {
	var table=itemName.replace("'","");
	var escaped=itemName.replace("'","\'");
	var itemName=itemName.replace("imbued","(i)");
	table = "#table"+table;
	if(additionalMessage==undefined)//No additional message to display
	{
	var additionalMessage='none';
	}
		$.ajax({
			type: "POST",
			url: "statTableCreate.php",
			data: 'itemName='+itemName+'&additionalMessage='+additionalMessage,
			cache: false,

			success: function(data) {
			$(table).html(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	addActive(escaped);
	}

	function getPkBuild(buildName,name) {
	//table = "#table"+buildName;
	table = "#table"+name;

		$.ajax({
			type: "POST",
			url: "getPkBuilds.php",
			data: 'buildName='+buildName,
			cache: false,

			success: function(data) {
			$(table).html(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	addActive(name);
	}

function addActive(itemId){
	var table=itemId.replace("'","");
	var itemId=itemId.replace("'","\\\'");	
	$('#table'+table).removeClass('hidden');
	$('#'+itemId).addClass('active');
	$('#'+itemId).attr("onclick","hide(this.id)");
}

function hide(itemId){
	var table=itemId.replace("'","");
	var itemId=itemId.replace("'","\\\'");	
	$('#table'+table).addClass('hidden');
	$('#'+itemId).removeClass('active');
	$('#'+itemId).attr("onclick","show(this.id)");
}
function show(itemId){
	var table=itemId.replace("'","");
	var itemId=itemId.replace("'","\\\'");	
	$('#table'+table).removeClass('hidden');
	$('#'+itemId).addClass('active');
	$('#'+itemId).attr("onclick","hide(this.id)");
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

</script>




