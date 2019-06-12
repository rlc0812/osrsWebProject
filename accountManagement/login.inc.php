<?php
error_reporting(E_ALL);
session_start();
if(isset($_POST['submit'])){
	include_once('../connect.inc');
	$conn= connectToDb();
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	//Error handling
	//Empty inputs
	if((empty($username))||(empty($password))){
		header("Location: ../loginPage.php?login=error"); 
		exit();
	}
	else
	{
		$conn = connectToDb();
		$stmt=$conn->prepare("SELECT userID, firstName, email, username, password FROM memberList WHERE username = (?)");
		$stmt->bind_param('s',$username);
		$stmt->execute();
		$stmt->store_result();
		
		if($stmt->num_rows < 1){
			header("Location: ../loginPage.php?login=error"); 
			exit();
		}
		else
		{
			$stmt->bind_result($userID, $firstName, $email, $usernameDB, $passwordDB);
			while ($stmt->fetch()) 
			{
				$assoc = array('userID'=>$userID, 'firstName'=>$firstName, 'email'=>$email, 'username'=>$usernameDB,'password'=>$passwordDB);	
				$hashCheck = (password_verify($password, $assoc['password']));
				if($hashCheck == false)
				{
					header("Location: ../loginPage.php?login=error"); 
					exit();
				}
				elseif($hashCheck == true)
				{
					//LOGIN SUCCESS HERE
					$_SESSION['u_firstName'] = $assoc['firstName'];
					$_SESSION['u_email'] = $assoc['email'];
					$_SESSION['u_userID'] = $assoc['userID'];
					$_SESSION['u_username'] = $assoc['username'];
						header("Location: ../index.php?login=success"); 
					exit();
				}
			}
			/*else
			{			
				header("Location: ../loginPage.php?login=error"); 
				exit();
			}*/
		}
	

	}
}
else{
	header("Location: ../loginPage.php?login=error"); 
	exit();
}
?>
