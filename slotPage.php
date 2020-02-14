<?php
session_start();
include('itemComparison/itemTableStats.php');
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial scale=1, maximum-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Stylesheets for datatables functionality-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!--Stylesheets for bootstrap functionaliy-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
        <li class="nav-item active">
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

<div class="container-fluid">
	<div class="row">
		<div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
			<h1 class="pt-1 text-center">Item Stats by Slot</h1>
			<ul class="list-group pl-5 pt-0 pr-5">

				<li class="list-group-item" id="weapon" onclick="displayStats(this.id);">One Handed Weapons</li>
				<div class="container-fluid" id="weaponContainer">
				<?php
					echo'<table id="weaponTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="2h" onclick="displayStats(this.id);">Two Handed Weapons</li>
				<div class="container-fluid" id="2hContainer">
				<?php
					echo'<table id="2hTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="cape" onclick="displayStats(this.id);">Capes</li>
				<div class="container-fluid" id="capeContainer">
				<?php
					echo'<table id="capeTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="shield" onclick="displayStats(this.id);">Shields</li>
				<div class="container-fluid" id="shieldContainer">
				<?php
					echo'<table id="shieldTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>



				<li class="list-group-item" id="ring" onclick="displayStats(this.id);">Rings</li>
				<div class="container-fluid" id="ringContainer">
				<?php
					echo'<table id="ringTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="neck" onclick="displayStats(this.id);">Neck slot</li>
				<div class="container-fluid" id="neckContainer">
				<?php
					echo'<table id="neckTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>
				
				<li class="list-group-item" id="hands" onclick="displayStats(this.id);">Hands</li>
				<div class="container-fluid" id="handsContainer">
				<?php
					echo'<table id="handsTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="ammo" onclick="displayStats(this.id);">Ammunition slot</li>
				<div class="container-fluid" id="ammoContainer">
				<?php
					echo'<table id="ammoTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="head" onclick="displayStats(this.id);">Head slot</li>
				<div class="container-fluid" id="headContainer">
				<?php
					echo'<table id="headTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="body" onclick="displayStats(this.id);">Body slot</li>
				<div class="container-fluid" id="bodyContainer">
				<?php
					echo'<table id="bodyTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="legs" onclick="displayStats(this.id);">Legs slot</li>
				<div class="container-fluid" id="legsContainer">
				<?php
					echo'<table id="legsTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>
				
				<li class="list-group-item" id="feet" onclick="displayStats(this.id);">Foot slot</li>
				<div class="container-fluid p-0" id="feetContainer">
				<?php
					echo'<table id="feetTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

			</ul>
		</div>
	</div>
</div>

<div class="container-fluid pb-4 text-center">
	<a onclick ="scrollToTop();" href="#">Go to top</a>
</div>

<script type="text/javascript">
function displayStats(itemSlot) {
		$.ajax({
			type: "POST",
			url: "itemComparison/itemTableStats.php",
			data: '&itemSlot='+itemSlot,
			cache: false,
			success: function(data) {
				$("#"+itemSlot+"Table").removeClass('hidden');	
				$("#"+itemSlot+"Table").html(data);
				if((itemSlot=='weapon')||(itemSlot=='2h')){
					$("#"+itemSlot+"Table").DataTable( {
						order:[[2, "asc"]],

						columnDefs: [ {
							"orderSequence": ["desc", "asc"], "targets": [ 4,5,6,7,8,9,10,11,12,13,14,15,16,17,18 ]
						},{
							"targets": 'no-sort', "orderable": false,	
						  }]
					});
				}

				else
				{
					$("#"+itemSlot+"Table").DataTable( {
						order:[[2, "asc"]],
					
						columnDefs: [ {
							"orderSequence": ["desc", "asc"], "targets": [ 3,4,5,6,7,8,9,10,11,12,13,14,15,16 ]
						}, {
							"targets": 'no-sort', "orderable": false,	
						  } ]
					});
				}

				

			},
			error: function(xhr, ajaxOptions, thrownError) {
				     alert(xhr.status);
       				 alert(thrownError);
			}
		});
		showElement(itemSlot)
	}
</script>

<script type="text/javascript">
function scrollToTop()
{
	$(document).ready(function(){
		$('html,body').animate({scrollTop: 0}, 'slow');

	});
}
function hideElement(itemSlot)
{
	$("#"+itemSlot+"Container").hide();
	$('#'+itemSlot).removeClass('active');
	$('#'+itemSlot).attr("onclick","showElement(this.id)");
}
function showElement(itemSlot)
{
	$("#"+itemSlot+"Container").show();
	$('#'+itemSlot).addClass('active');	
	$('#'+itemSlot).attr("onclick","hideElement(this.id)");
}
function emptyElement(itemSlot)
{
	$( "#table"+elementId).empty();
	$( "#emptybutton"+elementId).hide();

}
</script>



</body>
</html>
