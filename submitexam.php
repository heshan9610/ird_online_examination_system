<?php	
	include_once 'config2.php';
?>
<?php
	$empid = $_POST["empid"];
	$examdate= $_POST["examdate"] ;
	$attempt = $_POST["attempt"];
	$level = $_POST["level"];
	
	$sql = "insert into details2(Employee_id,Date,Attempt,Level)values('$empid','$examdate','$attempt','$level')";
	if(mysqli_query($exam, $sql)){
		header("Location: exam.html");//redirect
		echo "<script> alert ('Record inserted successfully') </script>";
		
	} else {
		echo "<script> alert ('Error in inserting the record') </script>";
	}
	
	mysqli_close($exam);
?>