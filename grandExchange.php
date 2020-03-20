<?php
session_start();
include('itemStatsData/exchangeTableCreation.php');
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
<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="UTF-8">
	<title>OSRS Life: Grand Exchange</Title>
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
        <li class="nav-item active" id="exchangeNav">
        <a class="nav-link" href="grandExchange.php"><img class="pr-1" src="images/coin_icons/Coins_250.png">Exchange</a>
        </li>
        <li class="nav-item" id="alchNav">
        <a class="nav-link" href="alchPage.php"><img class="pr-1" src="images/spell_icons/High_Level_Alchemy_icon.png">High Alchemy Calculator</a>
        </li>
        <li class="nav-item" id="slotNav">
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

<div class="container-fluid pt-2">
	<div class="form-group text-right">
		<input type="text" id="search" placeholder=" Item name:">
		<input type="button" class="btn-primary itemText2" id ="searchBtn" name="submitButton" onclick="search();" value="Search for item">
		<input type="button" class="btn-primary mt-1 hidden itemText2" id = "resetBtn" name="submitButton" onclick="emptyId('searchTable');" value="Remove Search">
	</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 w-100">
			<h3 id="searchTitle" class="itemText2 hidden text-center">Searching For<div id="searchString" class="itemText"></div></h3>
			<table id="idSearch" class="table nowrap table-bordered text-center" style="width:100%">
			</table>
		</div>
		<h1 class="text-center p-2 itemText2">Grand Exchange Tracker</h1>
  		<div class="col-12 col-sm-12 col-md-12 col-lg-12 w-100">
  			<h3 class="text-center itemText2">Most Expensive Items</h3>
 			 <div class="container-fluid p-0" id="containerbuyAverage">
				<?php
					getItemList('buyAverage',10);
				
				?>
 			 </div>
		</div>
 		<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-left" id="columnbuyQuantity">
 			<h3 class="pt-3 text-center itemText2">Most Purchased Items</h3>
  			<div class="container-fluid p-0" id="containerbuyQuantity">
  				<?php
					getItemList('buyQuantity',10);
  				?>
 			</div>
  		</div>
</div>

</body>
</html>


<script type="text/javascript">

function loadMore(type,limit,sortColumn) {
	// AJAX code to display more items character
	var type=type;

		$.ajax({
			type: "POST",
			url: "itemStatsData/exchangeTableCreation.php",
			data: 'type='+type+'&limit='+limit,
			cache: false,
			success: function(data) {
			$("#container"+type).html(data);
			createDataTables(type,parseInt(sortColumn));
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});

	}
function search() {
	// AJAX code to display more items character
		var item = document.getElementById("search").value;
		if(item==''){
			$('#searchTitle').show();
			$("#searchString").html('Nothing... try inserting a string value');
		}
		else{
			$('#searchContainer').show();
			$('#searchBtn').hide();
			$('#search').hide();
			$('#resetBtn').show();
			$('#searchTable').show();
			$('#searchTitle').show();
			$("#searchString").html(item);
			$.ajax({
				type: "POST",
				url: "itemStatsData/searchItems.php",
				data: 'item='+item,
				cache: false,
				success: function(data) {
				$("#idSearch").html(data);
				$("#idSearch").DataTable( {
					destroy: true,
					scrollY: "600px",
					scrollX: true,
					scrollCollapse: false,
					paging: false,
					fixedColumns: false,
					order:[[4, "desc"]],
						order:[[2, "asc"]],
						
						columnDefs: [{
								"orderSequence": ["desc", "asc"], "targets": [ 4,5,6,7,8,9,10,11 ]
							},{
								"targets": 'no-sort', "orderable": false,	
							} ]
				} );
				},
				error: function(xhr, ajaxOptions, thrownError) {
						 alert(xhr.status);
						 alert(thrownError);
				}
			});
		}

}
function emptyId(clearValue)
{
	$('#'+clearValue).hide();
	$('#searchBtn').show();
	$('#search').show();
	$('#resetBtn').hide();
	$('#searchTitle').hide();
}

$(document).ready(function() {
	createDataTables('buyAverage',4);
	createDataTables('buyQuantity',5);
});
function createDataTables(type,sortColumn) {
		$("#"+type+"Table").DataTable( {
			destroy: true,
			scrollY: "600px",
			scrollX: true,
			scrollCollapse: false,
			paging: false,
			fixedColumns: false,
			order:[[sortColumn, "desc"]],
			columnDefs: [{
					"orderSequence": ["desc", "asc"], "targets": [ 4,5,6,7,8,9,10,11 ]
				},{
					"targets": 'no-sort', "orderable": false,	
				} ]
		} );
}
</script>

