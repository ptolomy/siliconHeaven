<!DOCTYPE html>
<!--
	The NVIDIA page of the site. Provides an overview of NVIDIA content
-->
<?php
require 'userSession.php';
require 'pageElements.php';
?>
<html>
    <head>
        <title>Nvidia</title>
        <meta charset="UTF-8">
        <meta name="description" content="Silicon heaven About Nvidia">
        <meta name="keywords" content="what Nvidia does">
        <meta name="author" content="Gareth Tucker">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php writeCommonStyles(); ?>
    </head>
<body>
    <div id="Nvidia_container">
        <div id="Nvidia_header">

        </div>
        <?php displayMenu('Nvidia') ?><?php displaySignIn(); ?>
        <div id="Nvidia_content">
            <h1>Nvidia</h1>

              <p>Nvidia Corporation (/ɛnˈvɪdiə/ en-VID-ee-ə),[2] more commonly referred to as Nvidia (stylized as NVIDIA),<br>
              is an American technology company incorporated in Delaware and based in Santa Clara, California.[3]<br>
              It designs graphics processing units (GPUs) for the gaming and professional markets, as well as system on a chip units (SoCs)<br>
              for the mobile computing and automotive market. Its primary GPU product line, labeled "GeForce",<br>
              is in direct competition with Advanced Micro Devices' (AMD) "Radeon" products.<br>
              Nvidia expanded its presence in the gaming industry with its handheld Shield Portable, Shield Tablet and Shield Android TV.</p><br><br>
              <p>
              <iframe class="video" src="https://www.youtube.com/embed/F7ElMOiAOBI" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </p>
            <div id="Nvidia_subcontainer"><p>This image shows what the internal layout looks like of a GPU die.</p></div>
        </div>
        <?php displayFooter();?>
    </div>

</body>

</html>
