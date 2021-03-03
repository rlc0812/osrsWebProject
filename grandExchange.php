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
<?php
include_once('nav.php');
include_once('nav.js');
?>
</div>
	<!--Highlight the div-->
	<script type="text/javascript">
	window.onload = function(){
	addActiveNav('exchangeNav');
	}
	</script>
	
<?php
if(isset($_SESSION['u_userID'])){
	include_once('sessionFunctions/loggedUser.php');
	welcomeMessage('3');
}
?>

<div class="container-fluid pt-2">
	<div class="form-group text-right">
		<input type="text" id="search" placeholder=" Item name:">
		<input type="button" class="btn-primary itemText2" id ="searchBtn" name="submitButton" onclick="search();" value="Search for item">
		<input type="button" class="btn-primary mt-1 hidden itemText2" id = "resetBtn" name="submitButton" onclick="emptyId('searchTable');" value="Remove Search">
	</div>
	<h1 class="text-center p-2 itemText2">Grand Exchange Tracker</h1>
		<div id="searchTitle" class="col-12 col-sm-12 col-md-12 col-lg-12 w-100 blueBg border border-dark mb-5 hidden">
			<h3 class="itemText2 text-center">Searching For<div id="searchString" class="itemText"></div></h3>
			<table id="idSearch" class="table nowrap table-bordered text-center" style="width:100%">
			</table>
		</div>
  		<div class="col-12 col-sm-12 col-md-12 col-lg-12 w-100 blueBg border border-dark mb-5">
  			<h3 class="pt-3 text-center itemText2">Most Expensive Items</h3>
 			 <div class="container-fluid p-0" id="containerbuyAverage">
				<?php
					getItemList('buyAverage',10);
				
				?>
 			 </div>
		</div>
 		<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-left blueBg border border-dark" id="columnbuyQuantity">
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

