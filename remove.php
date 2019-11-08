<!DOCTYPE html>
<!--
	Update a password
-->
<?php
require 'database.php';
require 'pageElements.php';

ini_set('session.use_strict_mode', 1);
session_start();
?>

<html>
    <head>
        <title>PHP Forms</title>
<?php writeCommonStyles(); ?>
		    </head>

    <body>
        <div id="container">
            <div id="header"></div>
<?php displayMenu(HOME); ?>
            <div id="content" style="overflow:auto;">
			<h1>Remove User</h1>
<?php
// if there is an error from the previous registration attempt then display it
if (isset($_SESSION['errorMsg'])) {
	$errorMsg = $_SESSION['errorMsg'];
	echo "<p>$errorMsg";
	unset($_SESSION['errorMsg']);
}
?>
			<form action="removeDB.php" onsubmit="return removeDBForm" name="removeForm" method="post">
			<table class="twoColForm">
      <tr><td>Please confirm user name:</td><td><input type="text" name="userName" required></td></tr>
			<tr><td colspan="2"><input type="submit" value="Confirm"></td></tr>
			</table>
			</form>

			</div>
<?php displayFooter();?>
        </div>

    </body>
</html>
