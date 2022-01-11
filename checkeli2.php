<?php	
	include_once 'config5.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Check Employee Eligibility</title>
<link rel = "stylesheet" href = "styles/astyles.css"/>
<script>
</script>	
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
<body style = "padding:20px;5px;20px;0px;">
<br><br>
<center>
<div id="div1" style="height:1650px;width:700px;border:3px solid blue">


<fieldset>
<h1 style="color:blue">CHECK EMPLOYEE ELIGIBILITY.</h1>
<p><b>EMPLOYEE INFORMATION.</p>
<br/><br/>

	
  <table border=1>
  <tr>
    <th style="height:40px;width:350px">Employee id : </th>
   </tr>
   <tr>
    <td style="height:100px;width:350px">
	
<?php
			$empid = $_POST['empid'];
			$sql = "select * from eli where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($eli,$sql);
			$getRow = mysqli_fetch_row($results);
 			
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
				
			$count = mysqli_num_rows($results);  
              
            if($count == 1){  
				
			echo "<br>";
			echo "<h2><center>".$getRow['0']."</center></h2>";
			echo "<br>";								
            }  
            else{  
                echo "<h1> Validation failed. Invalid employee id.</h1>";  
            } 
			
?>

	
	</td>
   </tr>
   <tr>
    <th style="height:40px;width:350px">G.C.E. A Level Qualifications : </th>
   </tr>
   <tr>
    <td style="height:100px;width:350px">

<?php
			$empid = $_POST['empid'];
			$sql = "select * from eli where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($eli,$sql);
			$getRow = mysqli_fetch_row($results);
 			
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
				
			$count = mysqli_num_rows($results);  
              
            if($count == 1){  
				
			echo "<br>";
			echo "<h2><center>".$getRow['1']."</center></h2>";
			echo "<br>";								
            }  
            else{  
                echo "<h1> Validation failed. Invalid employee id.</h1>";  
            } 
			
?>

	</td>
   </tr>
   <tr>
    <th style="height:40px;width:350px">Degree Qualifications : </th>
   </tr>
   <tr>
    <td style="height:100px;width:350px">

<?php
			$empid = $_POST['empid'];
			$sql = "select * from eli where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($eli,$sql);
			$getRow = mysqli_fetch_row($results);
 			
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
				
			$count = mysqli_num_rows($results);  
              
            if($count == 1){  
				
			echo "<br>";
			echo "<h2><center>".$getRow['2']."</center></h2>";
			echo "<br>";								
            }  
            else{  
                echo "<h1> Validation failed. Invalid employee id.</h1>";  
            } 
			
?>

	</td>
   </tr>
   <tr>
    <th style="height:40px;width:350px">Work Experience : </th>
   </tr>
   <tr>
    <td style="height:100px;width:350px">

<?php
			$empid = $_POST['empid'];
			$sql = "select * from eli where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($eli,$sql);
			$getRow = mysqli_fetch_row($results);
 			
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
				
			$count = mysqli_num_rows($results);  
              
            if($count == 1){  
				
			echo "<br>";
			echo "<h2><center>".$getRow['3']."</center></h2>";
			echo "<br>";								
            }  
            else{  
                echo "<h1> Validation failed. Invalid employee id.</h1>";  
            } 
			
?>

	</td>
   </tr>
   <tr>
    <th style="height:40px;width:350px">Section : </th>
   </tr>
   <tr>
    <td style="height:100px;width:350px">

<?php
			$empid = $_POST['empid'];
			$sql = "select * from eli where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($eli,$sql);
			$getRow = mysqli_fetch_row($results);
 			
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
				
			$count = mysqli_num_rows($results);  
              
            if($count == 1){  
				
			echo "<br>";
			echo "<h2><center>".$getRow['4']."</center></h2>";
			echo "<br>";								
            }  
            else{  
                echo "<h1> Validation failed. Invalid employee id.</h1>";  
            } 
			
?>

	</td>
   </tr>
  
  
    <tr>
    <th style="height:40px;width:350px">Comments and approval : </th>
   </tr>
   <tr>
    <td style="height:100px;width:350px">

<?php
			$empid = $_POST['empid'];
			$sql = "select * from eli where Employee_id ='$empid' limit 1" ;  
            
			$results = mysqli_query($eli,$sql);
			$getRow = mysqli_fetch_row($results);
 			
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
				
			$count = mysqli_num_rows($results);  
              
            if($count == 1){  
				
			echo "<br>";
			echo "<h2><center>".$getRow['5']."</center></h2>";
			echo "<br>";								
            }  
            else{  
                echo "<h1> Validation failed. Invalid employee id.</h1>";  
            } 
			
?>

	</td>
   </tr>
   
  
</table>

<br/>
<div style="float:right">
<button style="height:60px;width:130px;border-radius:20px;background-color:blue"><a href="index2.html"><h5 style="color:white;">HOME</h5></a></button>
</div>

<br/><br/> 
</fieldset>
</div>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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