<html>
 <head>
 <title>Publishing Results</title>
 <link rel="icon" type="image/jpg" href="images/logo.jpg" />
 <link rel="stylesheet" href="styles/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <style>
	.publish{
		border: 2px solid black;
		border-radius: 10px;
		background: rgba(211,211,211,0.5);
		padding: 20px;
		width: 50%;
	}
	
	.Total{
		border: 2px solid black;
		border-radius: 10px;
		background: rgba(211,211,211,0.5);
		padding: 20px;
		width: 50%;
	}
	
	input[type=text]{
		width: 30%;
		padding: 12px 20px;
		margin: 20px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=reset]{
		width: 15%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]{
		width: 15%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		color: black;
		background-color: transparent;
		box-shadow: 0px 0px 10px rgb(147,28,246,0.5), 0px 0px 5px rgb(147,28,246,1);
	}

	input[type=reset]:hover {
		color: black;
		background-color: transparent;
		box-shadow: 0px 0px 10px rgb(147,28,246,0.5), 0px 0px 5px rgb(147,28,246,1);
	}

	<!--for different resolutions -->
	@media screen and (max-width: 600px) {
		.col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
		}
	}
 </style>
 
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
			<li class="menu"> <a class="active" href="#"> Publish </a> </li>
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
	<br>
	<hr class="hr1">
 
 </head>
 
 <body>
 
	<br><br><br>
	<center>
	<div class="publish">
		<h3>Employee Results Upload Page</h3>
		<form action="publishResults.php" method="post">
			
			<label for="empid">Employee ID: </label>
			<input type="text" id="empID" name="empID" placeholder="Input Employee ID.." required>
			<br>
			<label for="index">Index: </label>
			<input type="text" id="index" name="index" placeholder="Input Index..." required>

			<label for="results">Results: </label>
			<input type="text" id="results" name="results" placeholder="Input Results..(pass/fail)" required>
					
			<div>
				<input type="reset" value="Reset">
				<input type="submit" value="Submit">
			
			</div>
		</form>
	</div>
	</center>
	<br><br><br>
	
	<center>
	<div class="Total">
		<h3>Total Employees & Total Passes</h3>
		<form action="totalPassses.php" method="post">
			
			<div>
			<label for="Total">Total Employees : </label>
			<input type="text" id="totEmp" name="totEmp" placeholder="Total No. of Candidates.." required>

			<label for="passes">Total Passes: </label>
			<input type="text" id="totPass" name="totPass" placeholder="Total No. of Passes.." required>
			</div>
			
			
			<p style="color:red"><b>Enter how many no. of candidates are passed according to the Exam Level..<br>
			(Choose from Level 1 to Level 4....)</b></p>
			
			<label for="level1">Level 1 : </label>
			<input type="text" id="level1" name="level1" placeholder="No. of Level 1 passes.." required><br>
			<label for="level2">Level 2 : </label>
			<input type="text" id="level2" name="level2" placeholder="No. of Level 2 passes.." required><br>
			<label for="level3">Level 3 : </label>
			<input type="text" id="level3" name="level3" placeholder="No. of Level 3 passes.." required><br>
			<label for="level4">Level 4 : </label>
			<input type="text" id="level4" name="level4" placeholder="No. of Level 4 passes.." required>
			
			<div>
				<input type="reset" value="Reset">
				<input type="submit" value="Submit">
			
			</div>
		</form>
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
				
				<a href="index2n.html">Home</a><br>
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