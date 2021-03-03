<?php
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
	<title>OSRS Life: Login Page</Title>
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
	addActiveNav('loginNav');
	}
	</script>
	
<?php
if(isset($_SESSION['u_userID'])){
	include_once('sessionFunctions/loggedUser.php');
	welcomeMessage('5');
}
?>
<?php
if(isset($_SESSION['u_userID'])){
	echo '<h3 class="pt-4 pl-5">Signed in as user: <span class="text-primary">'.$_SESSION['u_firstName'].'</span></h3>';
	echo '<h3 class="pb-4 pl-5">If you would like to switch accounts please log out first.</h3>';

}
?>


<?php
if(!(isset($_SESSION['u_userID']))){
	echo '
	<div class="container-fluid p-3">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-10 col-xs-12">
            <div class="container pt-2 itemText2 text-center">
            <h2>Welcome back!</h2>
        </div>
				<div class="blueBg itemText2">

					<form class="form-horizontal" action="accountManagement/login.inc.php" method="POST" >
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
								<button type="submit" name="submit" id="submit" class="btn btn-primary itemText2">Login</button><img src="images/TzTok-Jad.png" class="img-responsive jadPic pl-5">
								<p class="pt-1">Need an account?<a href="registrationPage.php"></br>Register now!</a></p>
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
<div class="container-fluid pt-3 text-center">
		<p class="itemText2">Osrs Life</br>
		~ <span style="color:red">Richard Chipman</span></p>
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