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


$totalEmployees = $_POST['totEmp'];
$totalPasses = $_POST['totPass'];
$leve1Passes = $_POST['level1'];
$leve2Passes = $_POST['level2'];
$leve3Passes = $_POST['level3'];
$leve4Passes = $_POST['level4'];

$sql = "insert into pass(totEmp, totPass, level1, level2, level3, level4) values('$totalEmployees', '$totalPasses', '$leve1Passes', '$leve2Passes', '$leve3Passes', '$leve4Passes')";
if(mysqli_query($examres, $sql)){
		header("Location: examiner.php");//redirect
		echo "<script> alert ('Record inserted successfully') </script>";
		
	} else {
		echo "<script> alert ('Error in inserting the record') </script>";
	}
	
	mysqli_close($examres);

?>