<?php
session_start();
?>

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

		<li class="nav-item active">
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
		<li class="nav-item">
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
	echo '<h3 class="pb-4 pl-5">If you would like to switch accounts please log out first.</h3>';

}
?>

<div class="container whiteText pt-2">
	<div class="card p-4 ">
	<p>Welcome:</br>This is a personal project that is currently being worked to provide features for those who play the game Oldschool Runescape.</br> 
	This website should allow you to create a dashboard of up to 4 characters that you play allowing you to view their stats side by side.</br> 
	While you navigate through the site you will find various useful features that can aid you while you play Oldschool Runescape.</br>
	Enjoy!</p>
	</div>
</div>

<?php
if(!(isset($_SESSION['u_userID']))){
	echo '
	<div class="container-fluid p-3">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-8 col-sm-10 col-xs-12">
				<div class="blueBg">

					<form class="form-horizontal" action="accountManagement/login.inc.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="username">Username</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="password">Password</label>
							<div class="col-sm-12"> 
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
							</div>
						</div>

						<div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button><img src="images/TzTok-Jad.png" class="img-responsive jadPic pl-5">
								<p class="pt-1">Need an account?<a href="accountManagement/registrationPage.php"></br>Register now!</a></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>';
	
}
?>
<div class="footer">
<div class="container-fluid text-center">
		<p>OsrsBuilds</br>
		By Richard Chipman</p>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
 

 
</html>

<?php
?>