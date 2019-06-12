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
	<li class="nav-item active">
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
?>

<div class="container-fluid">
	<div class="row">
		<div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
			<h1 class="pt-1 text-center">Item Stats by Slot</h1>
			<ul class="list-group pl-5 pt-0 pr-5">

				<li class="list-group-item" id="Weapon" onclick="displayStats(this.id);">One Handed Weapons</li>
				<div class="container-fluid" id="WeaponContainer">
				<?php
					echo'<table id="WeaponTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Two_handed_Weapon" onclick="displayStats(this.id);">Two Handed Weapons</li>
				<div class="container-fluid" id="Two_handed_WeaponContainer">
				<?php
					echo'<table id="Two_handed_WeaponTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Cape" onclick="displayStats(this.id);">Capes</li>
				<div class="container-fluid" id="CapeContainer">
				<?php
					echo'<table id="CapeTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Shield" onclick="displayStats(this.id);">Shields</li>
				<div class="container-fluid" id="ShieldContainer">
				<?php
					echo'<table id="ShieldTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>



				<li class="list-group-item" id="Ring" onclick="displayStats(this.id);">Rings</li>
				<div class="container-fluid" id="RingContainer">
				<?php
					echo'<table id="RingTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Neck" onclick="displayStats(this.id);">Neck slot</li>
				<div class="container-fluid" id="NeckContainer">
				<?php
					echo'<table id="NeckTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>
				
				<li class="list-group-item" id="Hands" onclick="displayStats(this.id);">Hands</li>
				<div class="container-fluid" id="HandsContainer">
				<?php
					echo'<table id="HandsTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Ammunition" onclick="displayStats(this.id);">Ammunition slot</li>
				<div class="container-fluid" id="AmmunitionContainer">
				<?php
					echo'<table id="AmmunitionTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Head" onclick="displayStats(this.id);">Head slot</li>
				<div class="container-fluid" id="HeadContainer">
				<?php
					echo'<table id="HeadTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Body" onclick="displayStats(this.id);">Body slot</li>
				<div class="container-fluid" id="BodyContainer">
				<?php
					echo'<table id="BodyTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item" id="Legs" onclick="displayStats(this.id);">Legs slot</li>
				<div class="container-fluid" id="LegsContainer">
				<?php
					echo'<table id="LegsTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>
				
				<li class="list-group-item" id="Feet" onclick="displayStats(this.id);">Foot slot</li>
				<div class="container-fluid p-0" id="FeetContainer">
				<?php
					echo'<table id="FeetTable" class="table-dark table-striped nopadding table-responsive hidden" style="width:100%">';
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
			$("#"+itemSlot+"Table").DataTable( {
				columnDefs: [ {
					targets: [ 0 ],
					orderData: [ 0, 1 ]
				}, {
					targets: [ 1 ],
					orderData: [ 1, 0 ]
				}, {
					targets: [ 4 ],
					orderData: [ 4, 0 ]
				} ]
			} );
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
