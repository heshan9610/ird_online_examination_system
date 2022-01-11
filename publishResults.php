
<?php	
	include_once 'config3.php';
?>



<style>
.okBtn{
	width:70px;
	height:30px;
	cursor: pointer;
	
	border-radius: 15px;
	transition: all 0.5s ease-in-out;	
}

.okBtn:hover{
	color: black;
	background-color: transparent;
	box-shadow: 0px 0px 10px rgb(147,28,246,0.5), 0px 0px 5px rgb(147,28,246,1);
}

a {
	text-decoration: none;
}
</style>
<?php


$empid = $_POST['empID'];
$index = $_POST['index'];
$results = $_POST['results'];

	$sql = "insert into result1(Employee_id,Index_no,Result)values('$empid','$index','$results')";
	if(mysqli_query($examres, $sql)){
		header("Location: examiner.php");//redirect
		echo "<script> alert ('Record inserted successfully') </script>";
		
	} else {
		echo "<script> alert ('Error in inserting the record') </script>";
	}
	
	mysqli_close($examres);

?>