<?php
#!/usr/bin/php -q
require('../connect.inc');
require_once('itemApiCall.php');
$conn=connectToDb();

$stmt=$conn->prepare("SELECT username from rank");
$stmt->execute();
//$result=$stmt->get_result();
$stmt->bind_result($username);

$characterList = [];
while ($stmt->fetch()){
	addingUser($username);
	echo("Updated stats for:".$username."\n");
}
?>