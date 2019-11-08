<?php
/*
	Some simple database utilities. This file use two global variables to indicate the
  state of the connection to the database.
*/

/* When connected, the DB connection reference is stored in this variable */
$dbConnection = null;

/* If a connection has failed the error message will be stored here */
$dbErrorCode = null;

/*
	Connect to the named database using the default values for servername etc.
*/
function connectToDb($dbName)
{
	return connectToServerDb('localhost', 'root', 'root', $dbName);
}

/*
	Connect to a database, if the connection is successful stores a reference to the
	db connection, if db cannot be established sets errorcode.


	@param $serverName the name of the database serverName
	@param $userName the username to use to log in to the server
	@param $password the password to use to log in to the server
	@param $dbName the name of the database within the server

	@return true if the connection was established and false otherwise
*/
function connectToServerDb($serverName, $userName, $password, $dbName)
{
	global $dbConnection;
	global $dbErrorCode;

	$dbConnection = new mysqli($serverName, $userName, $password, $dbName);

	if ($dbConnection->connect_error) {
		$dbErrorCode = $dbConnection->connect_error;
		$dbConnection = null;
		return false;
	}

	$dbErrorCode = null;
	return true;
}

/*
	Close the database connection and set the $dbConnection variable to null.
*/
function closeConnection()
{
	global $dbConnection;
	global $dbErrorCode;

	if ($dbConnection) {
		$dbConnection->close();
		$dbConnection = null;
		$dbErrorCode = null;
	}
}

/*
	Sanitize a string so that it is safe to use in a SQL query. This requires a
   live connection to the database.
*/
function sanitizeString($input)
{
	global $dbConnection;

	if ($dbConnection) {
		return $dbConnection->real_escape_string(trim($input));
	}
}
?>
