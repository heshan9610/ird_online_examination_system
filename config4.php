<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "contact forum";


// Create connection
$contact = new mysqli($servername, $username, $password, $db);
// Check connection
if ($contact->connect_error) {
	die("Connection failed: " . $contact->connect_error);
}
echo "Connected successfully";

?>