<?php	
	include_once 'config1.php';
	include_once 'config2.php';
?>
<! DOCTYPE html >
<html>
<head>
	<title>Login details</title>
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
			<li class="menu"> <a class="active" href="#"> Modify </a> </li>
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
<br>
<center>
<div id="div6" style="height:1200px;width:1400px;border:3px solid blue">
<br><br><br>
<h2>Employee Sign up details</h2>
<div class="userdetails_table" style="border-style: groove; border-color: DarkBlue;">

	<table border="1" width="100%">
		<tr>
			<th class="col1">First_name</th>
			<th class="col2">Last_name</th>
			<th class="col3">Employee_id</th>
			<th class="col4">National_id</th>
			<th class="col5">Email</th>
			<th class="col6">Contact_no</th>
			<th class="col7">Password</th>
			<th class="col8">Confirmed_Password</th>
			<th class="col9">Update</th>
			<th class="col10">Delete</th>
			
		</tr>
<?php
			$sql = "select * from details1";
			$result = $user-> query($sql);
			
			if($result->num_rows > 0){
				
				while($row = $result->fetch_assoc()){
				echo "<tr> <td>".$row["First_name"]."</td> <td>".$row["Last_name"]."</td> <td>".$row["Employee_id"]."</td> <td>".$row["National_id"]."</td> <td>".$row["Email"]."</td> <td>".$row["Contact_no"]."</td> <td>".$row["Password"]."</td> <td>".$row["Confirmed_password"]."</td> <td>
				<a href='update.php?empid=$row[Employee_id]'><input type='submit' style='height:25px;width:60px' name='edit' value='edit'></a></td><td><a href='delete.php?empid=$row[Employee_id]'><input type='submit' style='height:25px;width:70px' name='delete' value='delete' id='delete'></a></td></tr>";
				}				
			} else{
				
				echo "<script> alert ('No data to display') </script>";
				
			}
			echo "</table>";
			
			
?>		
</div>
<br><br>



<h2>Admin Sign up details</h2>
<div class="admindetails_table" style="border-style: groove; border-color: DarkBlue;">

	<table border="1" width="100%">
		<tr>
			<th class="col1">First_name</th>
			<th class="col2">Last_name</th>
			<th class="col3">Employee_id</th>
			<th class="col4">National_id</th>
			<th class="col5">Email</th>
			<th class="col6">Contact_no</th>
			<th class="col7">Password</th>
			<th class="col8">Confirmed_password</th>
			<th class="col9">Update</th>
			
			
		</tr>
<?php
			$sql = "select * from admdetails";
			$result = $user-> query($sql);//check availability
			
			if($result->num_rows > 0){
				
				while($row = $result->fetch_assoc()){
				echo "<tr> <td>".$row["First_name"]."</td> <td>".$row["Last_name"]."</td> <td>".$row["Employee_id"]."</td> <td>".$row["National_id"]."</td> <td>".$row["Email"]."</td> <td>".$row["Contact_no"]."</td> <td>".$row["Password"]."</td> <td>".$row["Confirmed_password"]."</td> <td>
				<a href='update.php?empid=$row[Employee_id]'><input type='submit' style='height:25px;width:60px' name='edit' value='edit'></a></td></tr>";
				}				
			} else{
				
				echo "<script> alert ('No data to display') </script>";
				
			}
			echo "</table>";
			
			
?>		
</div>
<br><br>



<h2>Examiner Sign up details</h2>
<div class="managerdetails_table" style="border-style: groove; border-color: DarkBlue;">

	<table border="1" width="100%">
		<tr>
			<th class="col1">First_name</th>
			<th class="col2">Last_name</th>
			<th class="col3">Employee_id</th>
			<th class="col4">National_id</th>
			<th class="col5">Email</th>
			<th class="col6">Contact_no</th>
			<th class="col7">Password</th>
			<th class="col8">Confirmed_password</th>
			<th class="col9">Update</th>
			
			
		</tr>
<?php
			$sql = "select * from exdetails";
			$result = $user-> query($sql);
			
			if($result->num_rows > 0){
				
				while($row = $result->fetch_assoc()){
				echo "<tr> <td>".$row["First_name"]."</td> <td>".$row["Last_name"]."</td> <td>".$row["Employee_id"]."</td> <td>".$row["National_id"]."</td> <td>".$row["Email"]."</td> <td>".$row["Contact_no"]."</td> <td>".$row["Password"]."</td> <td>".$row["Confirmed_password"]."</td> <td>
				<a href='update.php?empid=$row[Employee_id]'><input type='submit' style='height:25px;width:60px' name='edit' value='edit'></a></td></tr>";
				}				
			} else{
				
				echo "<script> alert ('No data to display') </script>";
				
			}
			echo "</table>";
			$user->close();
			
?>		
</div>
<br><br>





<button style="width:120px;height:60px;margin:20px;float:right;border-radius:10px;background-color:#0000FF;" >
			<a href="examapp.php"><h4 style="color:white">More</h4></a>
</button>



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




