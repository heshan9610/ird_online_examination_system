<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "user details";


// Create connection
$user = new mysqli($servername, $username, $password, $db);
// Check connection
if ($user->connect_error) {
	die("Connection failed: " . $user->connect_error);
}
echo "Connected successfully";

?>