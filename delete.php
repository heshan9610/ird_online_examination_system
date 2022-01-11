<?php	


	include_once 'config1.php';
	
	$empid = $_GET["empid"];
	$result = mysqli_query($user,"delete from details1 where Employee_id='$empid'");
	
	header("Location: signupdisplay.php");

   

	

?>