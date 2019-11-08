<!DOCTYPE html>
<!--
	The AMD page of the site. Provides an overview of AMD content
-->
<?php
require 'userSession.php';
require 'pageElements.php';
?>
<html>
    <head>
        <title>AMD</title>
        <meta charset="UTF-8">
        <meta name="description" content="Silicon heaven AMD">
        <meta name="keywords" content="what AMD does">
        <meta name="author" content="Gareth Tucker">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php writeCommonStyles(); ?>
        <style>
          h1{
          color: lightblue;
        }
        </style>
    </head>
<body>
    <div id="AMD_container">
        <div id="AMD_header"></div>

<?php displayMenu('AMD') ?><?php displaySignIn(); ?>
        <div id="AMD_content">
            <h1>AMD</h1>

              <p>Advanced Micro Devices, Inc. (AMD) is an American multinational semiconductor company based in Santa Clara,<br>
              California that develops computer processors and related technologies for business and consumer markets.<br>
              While initially it manufactured its own processors, the company later outsourced its manufacturing, a practice known as fabless,<br>
              after GlobalFoundries was spun off in 2009. AMD's main products include microprocessors, motherboard chipsets,<br>
              embedded processors and graphics processors for servers, workstations and personal computers, and embedded systems applications.</p><br><br>
              <iframe class="video" src="https://www.youtube.com/embed/mnxC00pKiKc" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div id="amd_subcontainer"></div>
        </div>
<?php displayFooter();?>
        </div>

</body>

</html>
