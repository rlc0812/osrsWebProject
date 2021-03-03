<?php
include('alchScripts/calculateAlchProfit.php');
session_start();
?>

<!DOCTYPE html> 
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
	<title>OSRS Life: High Alchemy</Title>
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
	addActiveNav('alchNav');
	}
	</script>
	
<?php
if(isset($_SESSION['u_userID'])){
	include_once('sessionFunctions/loggedUser.php');
	welcomeMessage('3');
}
?>
<div class="container-fluid w-90">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-3 text-center blueBg border border-dark" id="columnbuyQuantity">
			<h1 class="text-center itemText2 pt-3">High Alchemy Table</h1>
				<div class="container p-0" id="alchContainer">
				<?php
					echo'<table id="alchTable" class="table table-bordered" style="width:100%">';
					echo '<td><div class="itemText2">Please wait while table loads.</div></td>';
					echo'</table>';
				 ?>
				</div>
		</div>
	</div>
</div>

</body>
</html>

<script type="text/javascript">
$( document ).ready(function(){
	var test='test';
		$.ajax({
			type: "POST",
			url: "alchScripts/calculateAlchProfit.php",
			data: '&table='+test,
			cache: false,
			success: function(data) {
				$("#alchTable").empty();
				$("#alchTable").html(data);
					dataTable = $("#alchTable").DataTable( {
					order:[[9, "desc"]],
					scrollY: "500px",
					scrollX: true,
					scrollCollapse: false,
					paging: false,
					fixedColumns: false,
					columnDefs: [{
							"orderSequence": ["desc", "asc"], "targets": [ 4,5,6,7,8 ]
						},{
							"targets": 'no-sort', "orderable": false,	
						  }  ]
				});
				setTimeout(function () {
         		 dataTable.draw();
  				 }, 200);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				 alert(xhr.status);
       				 alert(thrownError);
			}
		});
});
</script>



