/*
	A JS function for validating the username in the signin form.

*/
function validateRegForm(formName)
{
	"use strict";

	// a username begins with an uppercase letter and consists of letters
	var uNameRegex = /^[A-Z][A-Za-z]{1,29}$/;
	
	var emailRegex = /^[a-zA-Z0-9.!#$%&*+/=?^_{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	// get the form from the DOM
	var form = document.forms[formName];
	
	// get the form data and trim leading & trailing whitespace
	var username = form["userName"].value.trim();
	var emailAdd = form["email"].value.trim();
	var pw = form["pw"].value.trim();
	var pwcheck = form["pwcheck"].value.trim();
	
	// validate the pattern of characters
	if (!emailRegex.test(emailAdd)) {
		alert("This is not a valid email address");
		form["email"].focus();
		return false;
	}
	
	if (!uNameRegex.test(username)) {
		alert("A username must begin with an uppercase letter and contain only letters");
		form["userName"].focus();
		return false;
	}
	
	if (pw != pwcheck) {
		alert("Your password and password check do not match");
		form["pw"].focus();
		return false;
	}
	
	// everything was ok
	return true;
}
