/*
	A JS function for validating the username in the signin form.

*/
function validateUserName(formName)
{
	"use strict";

	// a username begins with an uppercase letter and consists of letters
	var uNameRegex = /^[A-Z][A-Za-z]{1,29}$/;

	// get the form from the DOM
	var form = document.forms[formName];
	
	// get the username and trim leading & trailing whitespace
	var username = form["userName"].value.trim();
	
	// validate the pattern of characters
	if (!uNameRegex.test(username)) {
		alert("A username must begin with an uppercase letter and contain only letters");
		form["userName"].focus();
		return false;
	}
	
	// everything was ok
	return true;
}
