<?php
/*
Displays the menu and who is signed in
*/

/*
	Constants define the menu on the site.
	The values match up with the menu items stored in the array.
*/
const HOME = 0;
const ABOUT = 1;
const AMD = 2;
const NVIDIA = 3;
const CONTACT = 4;

function writeCommonStyles()
{
?>
<link href="css/stylemy.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<?php
}
/*
	Display the menu in a page.
*/
function displayMenu($section)
{
	$menuItems = array('<a href="index.php" id="Home">Home</a>',
					   '<a href="about.php" id="About">About</a>',
						 '<a href="AMD.php" id="AMD">AMD</a>',
						 '<a href="Nvidia.php" id="Nvidia">Nvidia</a>',
					   '<a href="contact.php" id="Contact">Contact</a>');
	// write the structure of the menu
	echo '<div id="menu">
			<div class="menuBackground">
				<ul class="dropDownMenu">';

	// write each menu item
	$menuCount = count($menuItems);
	for ($i = 0; $i < $menuCount; $i++) {
		echo "\n<li";
		if ($section == $i) { // if an item is selected, add the correct class spec
			echo " class='selected'";
		}
		echo ">" . $menuItems[$i];
	}

	// write the closing structure of the menu
	echo "\n</ul>
			</div>
		</div>";
}

/*
	Display the footer information.
*/
function displayFooter()
{
	echo "<div id='footer'>Silicon Heaven <span id='cctext'>&copy; Gareth Tucker</span></div>";
}

/*
		Display the user form. If the user has not signed in, then this will be a sign-in
    form asking for their name. If they are signed in, it will be a sign-out form.
*/
function displaySignIn()
{
	//  global variable
	global $userName;
	// if there is no username set then we need to offer the sign in form or registration link
	if ($userName == '') {
		echo '<span id="signin"><form action="processSignIn.php" name="signInForm" onsubmit="return validateUserName(\'signInForm\');" method="post"><table border="0"><tr><td align="right">Please enter your user name:</td><td><input type="text" name="userName" required></td></tr><tr><td align="right">Password:</td><td><input type="password" name="pw" required></td></tr><tr><td colspan="2" align="right"><input type="submit" value="Sign In!"></td></tr></table></form><br>or <a href="registration.php">register here...</a></span>';
	}
	else { // otherwise, we offer the sign out form edit password form and remove account form.
		echo '<span id="signout"><form action="processSignOut.php" method="post">Welcome ' . $userName . ' <input type="submit" value="Sign Out"></form></span>';
		echo '<span id="changePassword"><form action="modify.php" method="post">Change password &ensp;&nbsp;&nbsp; <input type="submit" value="here"></form></span>';
		echo '<span id="Delete account"><form action="remove.php" method="post">Delete Account &ensp;&ensp;&ensp;&nbsp; <input type="submit" value="Confirm"></form></span>';
	}
}
// function that would change the font size on button click located on index.php.
function setFontSize()
{
}
?>
