<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "exam result";


// Create connection
$examres = new mysqli($servername, $username, $password, $db);
// Check connection
if ($examres->connect_error) {
	die("Connection failed: " . $examres->connect_error);
}
echo "Connected successfully";

?>