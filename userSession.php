<?php
/* Manage access to the site through a secure PHP session.
*/
ini_set('session.use_strict_mode', 1);
session_start();

// determine if the session has a userName set or not
// if it has, then assign the session variables to equivalent 
// globals for easier access
if (isset($_SESSION['userName'])) {
	$userName = $_SESSION['userName'];
}

// if the current page is not the index page the userName variable must 
// have a non-empty value set for access to be allowed. If it doesn't then
// redirect the browser back to the home page
if (basename($_SERVER['PHP_SELF']) != 'index.php') {
	// if there is not userName set, redirect to the index.php
	if ($userName == '') {
		header('Location:index.php');
		exit();
	}
}
?>