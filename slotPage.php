<?php
session_start();
include('itemComparison/itemTableStats.php');
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


<!--Stylesheets for datatables with bootstrap and fixed columns -->
<link rel="stylesheet" href="css/dataTablesBootstrap4min.css">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
<!--<link rel="stylesheet" href="css/fixedColumnsBootstrap.css">-->
<!--<script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>-->
<!--<link rel="stylesheet" href="css/Bootstrap/css/bootstrap.css">-->

<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="style.css">

<meta charset="UTF-8">
	<title>OSRS Life: Equipment Tables</Title>
</head>
 
<body>
	

<div id="bannerimage"></div>

<nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md p-0 pl-2 itemText2">

<div class="navbar-header">
<a class="navbar-brand yellowText">Osrs Life</a>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarMobile">
        <ul class="nav navbar-nav">
        <li class="nav-item" id="indexNav">
        <a class="nav-link" href="index.php"><img class="pr-1" src="images/spell_icons/Teleport_to_House_icon.png">Home</a>
        </li>
        <li class="nav-item" id="loginNav">
        <a class="nav-link" href="loginPage.php">Login</a>
        </li>
        <li class="nav-item" id="registrationNav">
        <a class="nav-link" href="registrationPage.php">Registration</a>
        </li>
        <li class="nav-item" id="achievementNav">
        <a class="nav-link" href="achievementDiary.php"><img class="pr-1" src="images/Achievement_Diaries_icon.png">Achievement Diary</a>
        </li>
        <li class="nav-item" id="pkingBuildsNav">
        <a class="nav-link" href="pkingBuilds.php"><img class="pr-1 maxHeightIcon" src="images/item_icons/Dragon_claws.png">Pking Builds</a>
        </li>
        <li class="nav-item" id="equipsNav">
        <a class="nav-link" href="equipsPage.php"><img class="pr-1" src="images/untradeable_icons/Graceful_top.png">Useful Untradeable Items</a>
        </li>
        <li class="nav-item" id="exchangeNav">
        <a class="nav-link" href="grandExchange.php"><img class="pr-1" src="images/coin_icons/Coins_250.png">Exchange</a>
        </li>
        <li class="nav-item" id="alchNav">
        <a class="nav-link" href="alchPage.php"><img class="pr-1" src="images/spell_icons/High_Level_Alchemy_icon.png">High Alchemy Calculator</a>
        </li>
        <li class="nav-item active" id="slotNav">
        <a class="nav-link" href="slotPage.php"><img class="pr-1 maxHeightIcon" src="images/Worn_equipment.png">Equipment Tables</a>
        </li>
		<li class="nav-item" id="cluescrollNav">
        <a class="nav-link" href="cluescroll.php"><img class="pr-1 maxHeightIcon" src="images/untradeable_icons/Clue_scroll_(master).png">Clue Scroll Requirements</a>
        </li>
        <li class="nav-item" id="maxHitNav">
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
			<h1 class="pt-1 text-center itemText2">Item Stats by Slot</h1>
			<ul class="list-group pl-5 pt-0 pr-5">

				<li class="list-group-item firstClick" id="weapon">One Handed Weapons</li>
				<div class="container-fluid" id="weaponContainer">
				<?php
					echo'<table id="weaponTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick" id="2h">Two Handed Weapons</li>
				<div class="container-fluid" id="2hContainer">
				<?php
					echo'<table id="2hTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick" id="cape">Capes</li>
				<div class="container-fluid" id="capeContainer">
				<?php
					echo'<table id="capeTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick" id="shield">Shields</li>
				<div class="container-fluid" id="shieldContainer">
				<?php
					echo'<table id="shieldTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>



				<li class="list-group-item firstClick" id="ring">Rings</li>
				<div class="container-fluid" id="ringContainer">
				<?php
					echo'<table id="ringTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick" id="neck">Neck slot</li>
				<div class="container-fluid" id="neckContainer">
				<?php
	
					echo'<table id="neckTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>
				
				<li class="list-group-item firstClick" id="hands">Hands</li>
				<div class="container-fluid" id="handsContainer">
				<?php
					echo'<table id="handsTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick" id="ammo">Ammunition slot</li>
				<div class="container-fluid" id="ammoContainer">
				<?php
					echo'<table id="ammoTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick" id="head">Head slot</li>
				<div class="container-fluid" id="headContainer">
				<?php
					echo'<table id="headTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick" id="body">Body slot</li>
				<div class="container-fluid" id="bodyContainer">
				<?php
					echo'<table id="bodyTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>

				<li class="list-group-item firstClick firstClick" id="legs">Legs slot</li>
				<div class="container-fluid" id="legsContainer">
				<?php
					echo'<table id="legsTable" class="table nowrap table-bordered hidden" style="width:100%">';
					echo'</table>';
				 ?>
				</div>
				
				<li class="list-group-item firstClick firstClick" id="feet" >Foot slot</li>
				<div class="container-fluid p-0" id="feetContainer">
				<?php
					echo'<table id="feetTable" class="table nowrap table-bordered hidden" style="width:100%">';
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
		//var dataTable;
		$.ajax({
			type: "POST",
			url: "itemComparison/itemTableStats.php",
			data: '&itemSlot='+itemSlot,
			cache: false,
			success: function(data) {
				$("#"+itemSlot+"Table").removeClass('hidden');	
				$("#"+itemSlot+"Table").html(data);
						dataTables(itemSlot);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				     alert(xhr.status);
       				 alert(thrownError);
			}
		});

	}


function dataTables(itemSlot){
		if((itemSlot=='weapon')||(itemSlot=='2h')){
					$("#"+itemSlot+"Table").DataTable().destroy();
					var dataTable = $("#"+itemSlot+"Table").DataTable( {
						scrollY: "300px",
						scrollX: true,
						scrollCollapse: false,
						paging: false,
						fixedColumns: false,
						order:[[0, "asc"]],

						columnDefs: [ {
							"orderSequence": ["desc", "asc"], "targets": [ 4,5,6,7,8,9,10,11,12,13,14,15,16,17 ]
						},{
							"targets": 'no-sort', "orderable": false,	
						  }]
					});
					setTimeout(function () {
         			 dataTable.draw();
  					 }, 200);
				}
				else
				{	
					$("#"+itemSlot+"Table").DataTable().destroy();
					dataTable = $("#"+itemSlot+"Table").DataTable( {
						scrollY: "300px",
						scrollX: true,
						scrollCollapse: false,
						paging: false,
						fixedColumns: false,
						order:[[0, "asc"]],
					
						columnDefs: [ {
							"orderSequence": ["desc", "asc"], "targets": [ 2,3,4,5,6,7,8,9,10,11,12,13,14,15 ]
						}, {
							"targets": 'no-sort', "orderable": false,	
						},  { width: '20%', targets: 0 }]
					});
					setTimeout(function () {
         			 dataTable.draw();
  					 }, 200);
				}
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
	$('#'+itemSlot+"Container").hide();
	$('#'+itemSlot).removeClass('active');
	$('#'+itemSlot).attr("onclick","showElement(this.id)");
}

function showElement(itemSlot)
{
	$("#"+itemSlot+"Container").show();
	$('#'+itemSlot).removeClass('hidden');
	$('#'+itemSlot).addClass('active');	
	$('#'+itemSlot).attr("onclick","hideElement(this.id)");
	$('#'+itemSlot).removeClass('firstClick');
}

function emptyElement(itemSlot)
{
	$( "#table"+elementId).empty();
	$( "#emptybutton"+elementId).hide();

}

$(document).ready(function(){
	$('body').on('click', '.firstClick', function(){
		itemSlot=(this.id);
		$('#'+itemSlot).removeClass('firstClick');
		showElement(itemSlot);
		displayStats(itemSlot);
	});
});
</script>



</body>
</html>
