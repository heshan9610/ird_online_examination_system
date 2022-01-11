<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "eligibility check";


// Create connection
$eli = new mysqli($servername, $username, $password, $db);
// Check connection
if ($eli->connect_error) {
	die("Connection failed: " . $eli->connect_error);
}
echo "Connected successfully";

?>