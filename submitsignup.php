<?php	
	include_once 'config1.php';
?>
<?php
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$empid= $_POST["empid"] ;
	$nationalid= $_POST["nationalid"];
	$email = $_POST["email"];
	$contactno = $_POST["contactno"];
	$pwd = $_POST["pwd"];
	$cnfrmpwd = $_POST["cnfrmpwd"];

	$sql = "insert into details1(First_name,Last_name,Employee_id,National_id,Email,Contact_no,Password,Confirmed_password)values('$firstname','$lastname','$empid','$nationalid','$email','$contactno','$pwd','$cnfrmpwd')";
	if(mysqli_query($user, $sql)){
		header("Location: index2.html");//redirect
		echo "<script> alert ('Record inserted successfully') </script>";
		
	} else {
		
		echo "<script> alert ('Error in inserting the record') </script>";
		
	}
	
	mysqli_close($user);
?>