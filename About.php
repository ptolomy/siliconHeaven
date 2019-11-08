<!DOCTYPE html>
<!--
	The About page, shows what the site is about.
-->
<?php
require 'userSession.php';
require 'pageElements.php';
?>

<html>
    <head>
        <title>About</title>
        <meta charset="UTF-8">
        <meta name="description" content="Silicon heaven about">
        <meta name="keywords" content="what is a silicon wafer">
        <meta name="author" content="Gareth Tucker">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php writeCommonStyles(); ?>

    </head>
<body>
    <div id="container">
        <div id="header">

        </div>
<?php displayMenu('About') ?><?php displaySignIn(); ?>
        <div id="content">
            <h1>What are Silicon Wafers?</h1>

            <p> Below is a video showing the process of creating a silicon wafer</p><br>
          <div id="video">
          <iframe class="video"   src="https://www.youtube.com/embed/4Q_n4vdyZzc" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div><br><br>

            <p>Wafers are formed of highly pure (99.9999999% purity), nearly defect-free single crystalline material.<br>
              One process for forming crystalline wafers is known as Czochralski growth invented by the Polish chemist Jan Czochralski.<br>
              In this process, a cylindrical ingot of high purity monocrystalline semiconductor, such as silicon or germanium, called a boule,<br>
              is formed by pulling a seed crystal from a 'melt'. Donor impurity atoms, such as boron or phosphorus in the case of silicon,<br>
              can be added to the molten intrinsic material in precise amounts in order to dope the crystal,<br>
              thus changing it into n-type or p-type extrinsic semiconductor.</p><br>

             <p>Silicon wafers are available in a variety of diameters from 25.4 mm (1 inch) to 300 mm (11.8 inches). Semiconductor fabrication plants,<br>
                colloquially known as fabs, are defined by the diameter of wafers that they are tooled to produce.<br>
                The diameter has gradually increased to improve throughput and reduce cost with the current state-of-the-art fab using 300 mm,<br>
                with a proposal to adopt 450 mm. Intel, TSMC and Samsung are separately conducting research to the advent of 450 mm "prototype" (research) fabs,<br>
                though serious hurdles remain.<br><br>

                1-inch (25 mm)<br>
                2-inch (51 mm) with thickness 275 µm.<br>
                3-inch (76 mm) with thickness 375 µm.<br>
                4-inch (100 mm) with thickness 525 µm. Or 4.9 inch (125 mm) with thickness 625 µm.<br>
                150 mm (5.9 inch, usually referred to as "6 inch") with thickness 675 µm.<br>
                200 mm (7.9 inch, usually referred to as "8 inch") with thickness 725 µm.<br>
                300 mm (11.8 inch, usually referred to as "12 inch") with thickness 775 µm.<br>
                450 mm (17.7 inch) with thickness 925 µm (proposed).<br>
                675-millimetre (26.6 in) Unknown thickness. (Theroretical).</p><br>
                <p>n order to minimize the cost per die, manufacturers wish to maximize the number of dies that can be made from a single wafer;<br>
                dies always have a square or rectangular shape due to the constraint of wafer dicing. In general,<br>
                this is a computationally complex problem with no analytical solution,<br>
                dependent on both the area of the dies as well as their aspect ratio (square or rectangular) and other considerations<br>
                such as scribeline size and the space occupied by alignment and test structures. Note that gross DPW formulas account only<br>
                for wafer area that is lost because it cannot be used to make physically complete dies;<br>
                gross DPW calculations do not account for yield loss due to defects or parametric issues.<br>

                Nevertheless, the number of gross die per wafer (DPW) can be estimated starting with the first-order approximation or wafer-to-die area ratio,<br>
                <br></p>
                <div id="about_dpw"></div><br>

                <p><br>
                where {\displaystyle d} d is the wafer diameter (typically in mm) and {\displaystyle S} S the size of each die (mm2).<br>
                This formula simply states that the number of dies which can fit on the wafer cannot exceed the area of the wafer divided by the area of each individual die.<br>
                It will always overestimate the true best-case gross DPW, since it includes the area of partially patterned dies which do not fully lie on the wafer surface (see figure).<br>
                These partially patterned dies don't represent complete ICs, so they cannot be sold as functional parts.<br>
                <br>
                Refinements of this simple formula typically add an edge correction, to account for partial dies on the edge,<br>
                which in general will be more significant when the area of the die is large compared to the total area of the wafer.<br>
                In the other limiting case (infinitesimally small dies or infinitely large wafers), the edge correction is negligible<br>
                </p><br><br><br>
        </div>

<?php displayFooter();?>
    </div>

</body>
</html>
