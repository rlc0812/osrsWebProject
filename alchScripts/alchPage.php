<?php
include('calculateAlchProfit.php');
session_start();
?>

<!DOCTYPE html> 
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--Selfmade stylesheet for LoginPage-->
<link rel="stylesheet" type="text/css" href="../style.css">

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
	<a class="nav-link" href="../index.php"><img class="pr-1" src="../images/spell_icons/Teleport_to_House_icon.png">Home</a>
	</li>

	<li class="nav-item">
	<a class="nav-link" href="../loginPage.php">Login</a>
	</li>

	<li class="nav-item">
	<a class="nav-link" href="../accountManagement/registrationPage.php">Registration</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="../achievementDiary.php"><img class="pr-1" src="../images/Achievement_Diaries_icon.png">Achievement Diary</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="../pkingBuilds.php"><img class="pr-1 maxHeightIcon" src="../images/item_icons/Dragon_claws.png">Pking Builds</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="../equipsPage.php"><img class="pr-1" src="../images/untradeable_icons/Graceful_top.png">Useful Untradeable Items</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="../itemStatsData/grandExchange.php"><img class="pr-1" src="../images/coin_icons/Coins_250.png">Exchange</a>
	</li>
	<li class="nav-item active">
	<a class="nav-link" href="alchPage.php"><img class="pr-1" src="../images/spell_icons/High_Level_Alchemy_icon.png">High Alchemy Calculator</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="../slotPage.php"><img class="pr-1 maxHeightIcon" src="../images/Worn_equipment.png">Item Slot Tables</a>
	</li>
	<li class="nav-item">
 	<a class="nav-link" href="../cluescroll.php"><img class="pr-1 maxHeightIcon" src="../images/untradeable_icons/Clue_scroll_(master).webp">Clue Scroll Requirements</a>
  	</li>

</ul>
	<?php
	if(isset($_SESSION['u_userID'])){
		echo '
		<div class="text-left">
			<form action="../accountManagement/logout.inc.php" method="POST">
			<button type="submit" name="submit" class="submit btn-primary">Log Out</button>
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

<div class="container-fluid w-90">
	<div class="form-group text-right p-2">
		<input type="text" id="search" placeholder="Item name:">
		<input type="button" class="btn-primary" id = "searchBtn" name="submitButton" onclick="search();" value="Search for item"><br>
		<input type="button" class="btn-primary mt-1 hidden" id = "resetBtn" name="submitButton" onclick="originalTable();" value="Remove Search">
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center" id="columnbuyQuantity">
			<h1 class="text-center">High Alchemy Table</h1>
			<div class="container text-center" id="highAlchContainer">
				<?php
					calculateAlchProfit();
				?>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>


<script type="text/javascript">
function search() {
		var item = document.getElementById("search").value;

		$.ajax({
			type: "POST",
			url: "calculateAlchProfit.php",
			data: 'item='+item,
			cache: false,
			success: function(data) {
			$("#highAlchContainer").html(data);
			$("#resetBtn").removeClass("hidden");
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	}
</script>

<script type="text/javascript">
function originalTable() {
	var resetBool = document.getElementById("resetBtn").value;

		$.ajax({
			type: "POST",
			url: "calculateAlchProfit.php",
			data: 'resetBool='+resetBool,
			cache: false,
			success: function(data) {
			$("#resetBtn").addClass("hidden");
			$("#highAlchContainer").html(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	}
</script>