<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "exam register";


// Create connection
$exam = new mysqli($servername, $username, $password, $db);
// Check connection
if ($exam->connect_error) {
	die("Connection failed: " . $exam->connect_error);
}
echo "Connected successfully";

?>