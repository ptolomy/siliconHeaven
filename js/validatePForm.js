function validatePForm(formName){

  var pw = form["pw"].value.trim();
  var pwcheck = form["pwcheck"].value.trim();

  if (pw != pwcheck) {
    alert("Your password and password check do not match");
    form["pw"].focus();
    return false;
  }

  // everything was ok
  return true;
}
