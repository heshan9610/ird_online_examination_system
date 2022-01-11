<?php
	include 'search.php';
?>

<html>
 <head>
 <title>IRD Banking</title>
 <link rel="icon" type="image/jpg" href="images/logo.jpg" />
 <link rel="stylesheet" href="styles/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <style>
 
.search-container{
	background: rgba(211,211,211,0.5);
	border: 2px solid black;
	border-radius: 10px;
	width: 900px;
	padding: 30px;
}

.article-box{
	padding-bottom: 30px;
	width: 100%;
}

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
 
  <!--Logo, Profile and login buttons-->
 <div>
	<a href="index.html"><img src="images/logo.jpg" class="logo"></a>
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
				
			</div>
		</ul>
		</div>
	</div>
 </div>
	<br>
	<hr class="hr1">
 
 </head>
 
 <body>
	<br><br>
	<center>
	<div class="search-container">
		<?php 
			if(isset($_POST['submit-search'])) {
				$search = mysqli_real_escape_string($con, $_POST['search']);
				$sql = "SELECT * FROM article WHERE title LIKE '%$search%' OR para LIKE '%$search%' OR a_date LIKE '%$search%'";
			
				$result = mysqli_query($con, $sql);
				$queryResult = mysqli_num_rows($result);
				
				echo "<p style='color:red'><b>There are ".$queryResult." Results !</b></p>";
				
				if ($queryResult > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div class='article-box'>
						<h4>".$row['title']."</h4>
						<p>".$row['para']."</p>
						<p>".$row['a_date']."</p>
					</div>";
					}
				}else{
					echo "<h3 style='color:red'>There are No Results Matching Your Search..!</h3>";
				}
			}
		
		?>
		<button class="okBtn" type="submit" name="ok"><a href="index2.html">Ok..!</a></button>
	</div>
	</center>
	<br><br><br>
	
	<!--Footer-->
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