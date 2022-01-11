<?php	
	include_once 'config4.php';
?>
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$sql = "insert into contactus(Name,Email,Phone,Subject,Message)values('$name','$email','$phone','$subject','$message')";
	if(mysqli_query($contact, $sql)){
		header("Location: index2.html");//redirect
		echo "<script> alert ('Record inserted successfully') </script>";
		
	} else {
		echo "<script> alert ('Error in inserting the record') </script>";
	}
	
	mysqli_close($contact);
?>