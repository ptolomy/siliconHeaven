<!DOCTYPE html>
<!--
	The CONTACT page of the site. Provides an overview of CONTACT content
-->
<?php
require 'userSession.php';
require 'pageElements.php';
?>

<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="description" content="Silicon heaven Contact">
        <meta name="keywords" content="How to contact us">
        <meta name="author" content="Gareth Tucker">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php writeCommonStyles(); ?>
    </head>
    <body>
        <div id="container">
            <div id="header"></div>

<?php displayMenu('CONTACT'); ?><?php displaySignIn(); ?>

            <div id="content" style="overflow:auto;">

			<h1>Contact Us</h1>

			<p>If you want to contact us about anything follow these steps.<br><br>
        Step 1 - Jump then flail around wildly for approximately 15 minutes.<br>
        Step 2 - Repeat step 1 as required or until satsified it didn't work.<br>
        Step 3 - Scream as loud as you can, be sure that others notice this, they will go and get help...they aren't running away because you look crazy.<br>
        Step 4 - If step 3 didn't work (cause you enough shame) you can always try step 1 and 3 together.<br><br>
        If these steps should fail which it likely will you may find yourself being taken out in a straight jacket because reasons....<br><br>
        Step 7 - Feel free to email or visit the office.<br>
        <p>Steps 5 and 6 were removed as they may have caused unnessary mental trauma</p>

			</div>
<?php displayFooter();?>
        </div>

    </body>
</html>
