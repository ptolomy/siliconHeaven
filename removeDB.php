<?php
/* Register for an account on the site.
   This page expects to receive a registration form via a post request.
*/
require "userSession.php";
require 'database.php';


$userName1 = trim($_POST['userName']);

//If user name entered doesn't match user name in session return
if ($userName != $userName1){
	$_SESSION['errorMsg'] = "user names do not match";
	header('location:remove.php');
	exit();
}

// connect to the database
if (!connectToDb('mypasswordsdontsteal')) {
	$_SESSION['errorMsg'] = "Sorry, we could not connect to the database.";
	header('location:remove.php');
	exit();
}

// modifying the password on the database
$sqlQuery = "DELETE FROM users WHERE userName = '$userName'";
$result = $dbConnection->query($sqlQuery);
if (!$result) {
	$_SESSION['errorMsg'] = "There was a problem with the database: " . $dbConnection->error;
	closeConnection();
	header('location:remove.php');
	exit();
}

// everything worked, update the session info
closeConnection();
$_SESSION['userName'] = $userName;
session_unset();
session_destroy();
header('Location:index.php');
?>
