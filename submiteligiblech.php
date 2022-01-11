<?php	
	include_once 'config5.php';
?>
<?php
	
	$empid= $_POST["empid"] ;
	$al= $_POST["al"];
	$deg = $_POST["deg"];
	$wk = $_POST["wk"];
	$sec = $_POST["sec"];
	$apr = $_POST["apr"];
	
	$sql = "insert into eli(Employee_id,AL,Degree,Work,Section,Comments)values('$empid','$al','$deg','$wk','$sec','$apr')";
	if(mysqli_query($eli, $sql)){
		header("Location: profile.html");//redirect
		echo "<script> alert ('Record inserted successfully') </script>";
		
	} else {
		echo "<script> alert ('Error in inserting the record') </script>";
	}
	
	mysqli_close($user);
?>