<?php	
	include_once 'config3.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Eligibility List</title>
 <link rel = "stylesheet" href = "styles/astyles.css"/>
  <link rel="icon" type="image/jpg" href="images/logo.jpg" />
 <link rel="stylesheet" href="styles/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="js/myScript.js"></script>
 
  <!--Logo, Profile and login buttons-->
 <div>
	<a href="index after logged in.html"><img src="images/logo.jpg" class="logo"></a>
	<div class="logBtn">
	<a href="profiledir.php"><img src="images/profile2.png" class="profile"></a>
		
		<!--Navigation-->
		<div class="nav"><br>
		<ul class="menu" align="center" >
			
			<li class="menu"> <a href="index2.html"> Home </a> </li>
			<li class="menu"> <a href="exam.html"> Exams </a> </li>
			<li class="menu"> <a href="result.html"> Results </a> </li>
			<li class="menu"> <a href="contactus.html"> Contact </a> </li>
			<li class="menu"> <a href="aboutus.html"> About us </a> </li>
			<div class="search">
				<form action="article.php" method="POST">
				<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
				<input id="text1" name="search" type="text" placeholder="Search..">
				</form>
			</div>
		</ul>
		</div>
	</div>
 </div>

 
</head>

<body><br><br><center>

<div id="div1" style="height:650px;width:1200px;border:3px solid blue">

<h1 style="color:blue">ABOUT ELIGIBILITY LIST</h1>
<br/><br/>

<center>
<h2>This page is mainly about the Eligibility list of IRD Bank online Banking Examination system.</h2></center>
<br/><br/>
<?php
			$sql = "select * from pass";
			$result = $examres-> query($sql);
			
	if($result->num_rows > 0){
				
				while($row = $result->fetch_assoc()){
					echo "<table border = '1' width = '50%'><tr><td>No of selected Employees: </td><td>".$row["totPass"]."</td></tr>";
					echo "<tr><td>No of total Employees: </td><td>".$row["totEmp"]."</td></tr></table>";
			}
}
					echo"<br><br><br>";
					
			$sql = "select * from pass";
			$result = $examres-> query($sql);
			
	if($result->num_rows > 0){
				
				while($row = $result->fetch_assoc()){
					echo "<table border = '2' width = '75%'><tr><td><center>Level</center></td><td><center>No. of Employees</center></td></tr>";
					echo "<tr><td>Level1</td><td>".$row["level1"]."</td></tr>";
					echo "<tr><td>Level2</td><td>".$row["level2"]."</td></tr>";
					echo "<tr><td>Level3</td><td>".$row["level3"]."</td></tr>";
					echo "<tr><td>Level4</td><td>".$row["level4"]."</td></tr></table>";
			}
}


?>

</center>


</div>
<br><br><br>
	<div class="footer-container">
		<hr>
		<div class="footer">
			<div class="footer-heading footer-1 option1 option2">
				<h2>About Us</h2>
				<p>IRD Banking Were With You <br> For 20 Years. <br> (Since 2001).</p>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
			</div>
			<div class="footer-heading footer-2 option1 option2">
				
				<h2>Quick Links</h2>
				
				<a href="index2.html">Home</a><br>
				<a href="exam.html">Exams</a><br>
				<a href="result.html">Results</a><br>
				<a href="library.html">Books & Library</a><br>
				<a href="bestCourses.html">Best Courses</a><br>
				<a href="#">Awards</a><br>
				
				
			</div>
			<div class="footer-heading footer-3 option2">
				<h2>Contact Us</h2>
				 <ul>
					<li>No 23/B, Pine Street 1, Colombo 3.</li><br>
					<li>IRDsupport@IRD.lk</li><br>
					<li>+(94)117878755</li><br>
					
				</ul> 	
			</div>
			<div class="footer-heading footer-4 option2">
				<h2>Maps</h2>
				<a href="https://goo.gl/maps/EXUFRzFMCEasMyH16"><img class="map" src="images/map.png" height="160px" width="250px"></a>
			</div>
		</div>
	<p class="bottom-text">All Right reserved by &copy;Group_01.02_01</p>
	</div>
	


</body>
</html> 