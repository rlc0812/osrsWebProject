<?php
if(isset($_POST['submit']))
{
	include_once('../connect.inc');
	$conn=connectToDb();
	$first=(mysqli_real_escape_string($conn,$_POST['firstName']));
	$email=(mysqli_real_escape_string($conn,$_POST['email']));
	$username=(mysqli_real_escape_string($conn,$_POST['username']));
	$password=(mysqli_real_escape_string($conn,$_POST['password']));

	//Begin error checking
	if( (empty($first)) || (empty($first)) || (empty($username)) || (empty($password)) )
	{
		//One of the fields is empty handle error
		//Empty error
		header("Location: registrationPage.php?registration=empty");
		exit();
	}
	else //Fields are not empty
	{
		//Check for valid first name
		if(!(preg_match("/^[a-zA-Z]*$/", $first))){
			header("Location: registrationPage.php?registration=invalid");
			exit();
		}
		else{
			//Check for valid email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: registrationPage.php?registrationPage=email");
				exit();	
			}
			else{
				//Begin blacklist check
				include_once('usernameBlacklist.php');
				$blackList = blackList();
				if(in_array($username,$blackList)){
					header("Location: registrationPage.php?registration=badusername");
					exit();	
				}
				else{
					//Check for existing username
					$conn = connectToDb();
					$stmt=$conn->prepare("SELECT username FROM memberList WHERE username=(?)");
					$stmt->bind_param('s',$username);
					$stmt->execute();
					$stmt->store_result();
					$resultCheck =($stmt->num_rows);
					if($resultCheck > 0){
						header("Location: registrationPage.php?registration=usernametaken");
						exit();	
					}
					else{
						$hashedPassword =(password_hash($password,PASSWORD_DEFAULT));
						//Insert user into database
						$conn = ConnectToDb();
						$stmt=$conn->prepare("INSERT INTO memberList (firstName,email,username,password) VALUES(?,?,?,?)");
						$stmt->bind_param('ssss',$first,$email,$username,$hashedPassword);
						$stmt->execute();
						header("Location: ../loginPage.php?registration=success");
						exit();	
						
					}
				}
			}	
		}
	}
}
else{
	//submit error
	header("Location: registrationPage.php?registrationPage=submiterror");
	exit();
}
?>
