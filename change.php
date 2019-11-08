<?php
/* updates a users password for an account on the site.
   This page expects to receive a password form via a post request.
*/
require "userSession.php";
require 'database.php';

$userName1 = trim($_POST['userName']);
$password = trim($_POST['pw']);

//If user name entered doesn't match User name in session exit
if ($userName != $userName1){
	$_SESSION['errorMsg'] = "user names do not match";
	header('location:modify.php');
	exit();
}

// connect to the database
if (!connectToDb('mypasswordsdontsteal')) {
	$_SESSION['errorMsg'] = "Sorry, we could not connect to the database.";
	header('location:modify.php');
	exit();
}

// modifying the password on the database
$pwHash = password_hash($password, PASSWORD_BCRYPT);
$sqlQuery = "UPDATE users SET password = '$pwHash' WHERE userName = '$userName'";
$result = $dbConnection->query($sqlQuery);
if (!$result) {
	$_SESSION['errorMsg'] = "There was a problem with the database: " . $dbConnection->error;
	closeConnection();
	header('location:modify.php');
	exit();
}

// everything worked, update the session info
closeConnection();
header('Location:index.php');
?>
