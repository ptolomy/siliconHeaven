<!DOCTYPE html>
<!--
The start page when the site launches
-->
<?php
require 'userSession.php';
require 'pageElements.php';
?>

<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="description" content="Silicon heaven main">
        <meta name="keywords" content="what the site contains">
        <meta name="author" content="Gareth Tucker">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php writeCommonStyles(); ?>

  		<script src="js/validateForm.js" type="text/javascript"></script>
  		<script type="text/javascript">
  		function displayError(msg) {
  			alert("Problem signing in: "+msg);
  		}
  		</script>
    </head>
    <body
<?php
  // Posts an error if a sign in error occured
	$errMsg = null;
	if (isset($_SESSION['errorMsg'])) {
		$errMsg = $_SESSION['errorMsg'];
		echo "onload='displayError(\"$errMsg\");'";
		unset($_SESSION['errorMsg']);
	}
?>
	>
        <div id="container">
            <div id="header"></div>
<?php displayMenu(HOME); ?><?php displaySignIn(); ?>
            <div id="content" style="overflow:auto;">
			             <h1>Silicon Heaven</h1>

        <button id="button1" value="larger" type="button" onclick="fontSize=Large">Larger</button>
        <button id="button2" vale="smaller" type="button" onclick="setFontSize()">Smaller</button>

      <p>The site aims to deliver an overview of what Silicon is and how it is<br>
        used in the computing industry</p><br>
      <p>In electronics, a wafer (also called a slice or substrate) is a thin slice of semiconductor,<br>
        such as a crystalline silicon (c-Si), used for the fabrication of integrated circuits and, in photovoltaics,<br>
        to manufacture solar cells. The wafer serves as the substrate for microelectronic devices built in and upon the wafer.<br>
        It and undergoes many microfabrication processes, such as doping, ion implantation, etching,<br>
        thin-film deposition of various materials, and photolithographic patterning. Finally,<br>
        the individual microcircuits are separated by wafer dicing and packaged as an integrated circuit.</p><br><br><br>

			</div>
<?php displayFooter();?>
        </div>

    </body>
</html>
