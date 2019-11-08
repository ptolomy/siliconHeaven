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

		<script src="js/validatePForm.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="container">
            <div id="header"></div>
<?php displayMenu(HOME); ?>
            <div id="content" style="overflow:auto;">
			<h1>Update user</h1>
<?php
// if there is an error from the previous registration attempt then display it
if (isset($_SESSION['errorMsg'])) {
	$errorMsg = $_SESSION['errorMsg'];
	echo "<p>$errorMsg";
	unset($_SESSION['errorMsg']);
}
?>
			<form action="change.php" onsubmit="return validatePForm('passChangeForm');" name="modifyForm" method="post">
			<table class="twoColForm">
      <tr><td>Please enter user name:</td><td><input type="text" name="userName" required></td></tr>
			<tr><td>Please enter a password:</td><td><input type="password" name="pw" required></td></tr>
			<tr><td>Please retype your password:</td><td><input type="password" name="pwcheck" required></td></tr>
			<tr><td colspan="2"><input type="submit" value="Update"></td></tr>
			</table>
			</form>

			</div>

<?php displayFooter();?>

        </div>

    </body>
</html>
