<?php
	
	session_start();
	include_once 'config1.php';
	
?>

<! DOCTYPE html >
<html>
	<head>
	<title>Profile</title>
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
	<img src="images/profile2.png" class="profile">
		
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
<body>
<br>
<center>
<div id="div3" style="height:900px;width:1000px;border:3px solid blue"><center>

<br>

<div style="height:50px;width:1000px;">
<h1 style="color:blue">PERSONAL INFO</h1>
</div>

<div style="float:right;">
<form method="post" action="logoff.php">
<input name="logoff" type="submit" value="LOG OFF" style="height:60px;width:130px;margin:25px 20px;border-radius:20px;background-color:blue;color:white">
</div>
<div style="float:right;margin:1px">
<button style="height:60px;width:130px;margin:25px;border-radius:20px;background-color:blue"><a href="index2.html"><h5 style="color:white;">HOME</h5></a></button>
</div>

<div style="float:left;">
<img src="images/profile.png" style="height:140px;width:140px;margin:20px">
</div>
<br>
<div style="float:left;margin:2px">
<h2 style="margin:50px">Personalize your account</h2>
</div>
<br><br><br><br><br><br><br><br><br><br><br>

<div style="height:450px;width:450px;float:left;margin:30px;border:5px solid blue">
<legend><h3>Profile</h3></legend>
<br>
<div>
<image src="images/name.png" style="height:50px;width:50px;">

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from details1 where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['0']."</h4><h4>".$getRow['1']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from admdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['0']."</h4><h4>".$getRow['1']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from exdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['0']."</h4><h4>".$getRow['1']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from madetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['0']."</h4><h4>".$getRow['1']."</h4>";
			
				
?>

</div>

<div>
<image src="images/id.png"style="height:50px;width:50px">

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from details1 where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['2']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from admdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['2']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from exdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['2']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from madetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['2']."</h4>";
			
				
?> 

</div>
<div>
<image src="images/password.png" style="height:50px;width:50px">

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from details1 where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['6']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from admdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['6']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from exdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['6']."</h4>";
			
				
?>  

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from madetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['6']."</h4>";
			
				
?>  

</div>
</div>


<div style="height:450px;width:400px;float:left;margin:35px;border:5px solid blue">
<legend><h3>Contact</h3></legend>
<br>
<div>
<image src="images/tele.png" style="height:50px;width:50px">

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from details1 where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['5']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from admdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['5']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from exdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['5']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from madetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['5']."</h4>";
			
				
?> 

</div>
<div>
<image src="images/mail.png" style="height:50px;width:50px">

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from details1 where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['4']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from admdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['4']."</h4>";
			
				
?>
<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from exdetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['4']."</h4>";
			
				
?>

<?php
			$empid = $_POST['empid'];
			
			
			$sql = "select * from madetails where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($user,$sql);
			$getRow = mysqli_fetch_row($results);
 
			
			
			echo "<h4>".$getRow['4']."</h4>";
			
				
?>

</div>

</div>

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
<html>