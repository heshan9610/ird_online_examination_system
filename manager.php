<?php	
	include_once 'config4.php';
	
?>
<! DOCTYPE html >
<html>
<head>
	<title>Contact forum details</title>
	<link rel="stylesheet" href="styles/sgstyles.css">
	<script src="js/sgscript.js"></script>
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
			<li class="menu"> <a class="active" href="#"> View </a> </li>
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
<body>
<br><br><br>
<center>
<div id="div6" style="height:1200px;width:1300px;border:3px solid blue">
<br><br><br>
<h2>Contact forum details</h2>
<div class="contactdetails_table" style="border-style: groove; border-color: DarkBlue;">

	<table border="1" width="100%">
		<tr>
			<th class="col1">Name</th>
			<th class="col5">Email</th>
			<th class="col6">Phone</th>
			<th class="col7">Subject</th>
			<th class="col8">Message</th>
			
			
		</tr>
<?php
			$sql = "select * from contactus";
			$result = $contact-> query($sql);
			
			if($result->num_rows > 0){
				
				while($row = $result->fetch_assoc()){
				echo "<tr> <td>".$row["Name"]."</td> <td>".$row["Email"]."</td> <td>".$row["Phone"]."</td> <td>".$row["Subject"]."</td> <td>".$row["Message"]."</td> </tr>";
				}
			} else{
				
				echo "<script> alert ('No data to display') </script>";
				
			}
			echo "</table>";
			
			
?>		
</div>


</center>
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
