

<?php	
	session_start();
	include_once 'config1.php';
	
?>


<! DOCTYPE html >
<html>
	<head>
	<title>Login</title>
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
			
			<li class="menu"> <a href="index.html"> Home </a> </li>
			<li class="menu"> <a href="#"> Exams </a> </li>
			<li class="menu"> <a href="#"> Results </a> </li>
			<li class="menu"> <a href="#"> Contact </a> </li>
			<li class="menu"> <a href="#"> About us </a> </li>
			<div class="search">
				<form action="#" method="POST">
				<button type="submit"><i class="fa fa-search"></i></button>
				<input id="text1" type="text" placeholder="Search..">
				</form>
			</div>
		</ul>
		</div>
	</div>
 </div>
	</head>
<body>
<br><br>
<center>
<div id="div2" style="height:550px;width:620px;border:3px solid blue">
<form action="loginau.php" style="border:1px" method = "POST">
<br>

<div>
<center><h1 style="color:blue">LOGIN</h1></center>
</div>

<div><center>
<input type="text" placeholder="Username"   style="height:50px;width:450px;border-radius:3px" name="username" required>
</center></div>
<br>


<div><center>
<input type="password" placeholder="Password"   style="height:50px;width:450px;border-radius:3px" name="password" required>
</center></div>

<br><br>
<div style="float:right">
<a href="forgot.html" style="margin:20px">forgot password?</a>
</div><br><br>


<div><div style="float:left;">
<input type="checkbox" style="margin:30px" name="checkbox">Remember me
</div>
<input type="submit" class="submitBtn" id="login" name="login" style="height:50px;width:300px;color:white;float:right;margin:20px;border-radius:3px" value="Login">
</div>

<br><br><br><br><br>
<div>
If you haven't registered click <a href="signup.html">here</a>
</div>
<br>
<div><center>
<button class="submitBtn" id="submitBtn" style="height:50px;width:400px;border-radius:3px" value="Sign Up with Google"><a href="https://www.google.com"><h4 style="color:white">Sign Up with Google</h4></a></button>
</center></div>

</form>


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
				
				<a href="index.html">Home</a><br>
				<a href="#">Exams</a><br>
				<a href="#">Results</a><br>
				<a href="#">Books & Library</a><br>
				<a href="#">Best Courses</a><br>
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