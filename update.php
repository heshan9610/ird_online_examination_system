<?php	
	include_once 'config1.php';

?>




<?php
//check whether form is submitted and then redirect to same page
if(isset($_POST['update'])){
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$empid = $_POST["empid"] ;
	$nationalid= $_POST["nationalid"];
	$email = $_POST["email"];
	$contactno = $_POST["contactno"];
	$pwd = $_POST["pwd"];
	$cnfrmpwd = $_POST["cnfrmpwd"];
	

    $result = mysqli_query($user,"UPDATE details1 SET First_name='$firstname', Last_name='$lastname', National_id='$nationalid', Email='$email', Contact_no='$contactno', Password='$pwd', Confirmed_password='$cnfrmpwd' WHERE Employee_id='$empid'");
	
	
	
	header("Location:signupdisplay.php");
	}
	
?>







<?php
 //display data
	$empid = $_GET["empid"];
	
	$result=mysqli_query($user, "SELECT * FROM details1 WHERE Employee_id='$empid'");

while($row=mysqli_fetch_array($result))	
{
	$firstname = $row['First_name'];
	$lastname = $row['Last_name'];
	$empid = $row["Employee_id"];
	$nationalid= $row['National_id'];
	$email = $row['Email'];
	$contactno = $row['Contact_no'];
	$pwd = $row['Password'];
	$cnfrmpwd = $row['Confirmed_password'];

}
	
	
?>



<?php
//check whether form is submitted and then redirect to same page
if(isset($_POST['update'])){
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$empid = $_POST["empid"] ;
	$nationalid= $_POST["nationalid"];
	$email = $_POST["email"];
	$contactno = $_POST["contactno"];
	$pwd = $_POST["pwd"];
	$cnfrmpwd = $_POST["cnfrmpwd"];
	

    $result = mysqli_query($user,"UPDATE admdetails SET First_name='$firstname', Last_name='$lastname', National_id='$nationalid', Email='$email', Contact_no='$contactno', Password='$pwd', Confirmed_password='$cnfrmpwd' WHERE Employee_id='$empid'");
	
	
	
	header("Location:signupdisplay.php");
	}
	
?>







<?php
 //display data
	$empid = $_GET["empid"];
	
	$result=mysqli_query($user, "SELECT * FROM admdetails WHERE Employee_id='$empid'");

while($row=mysqli_fetch_array($result))	
{
	$firstname = $row['First_name'];
	$lastname = $row['Last_name'];
	$empid = $row["Employee_id"];
	$nationalid= $row['National_id'];
	$email = $row['Email'];
	$contactno = $row['Contact_no'];
	$pwd = $row['Password'];
	$cnfrmpwd = $row['Confirmed_password'];

}
	
	
?>


<?php
//check whether form is submitted and then redirect to same page
if(isset($_POST['update'])){
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$empid = $_POST["empid"] ;
	$nationalid= $_POST["nationalid"];
	$email = $_POST["email"];
	$contactno = $_POST["contactno"];
	$pwd = $_POST["pwd"];
	$cnfrmpwd = $_POST["cnfrmpwd"];
	

    $result = mysqli_query($user,"UPDATE exdetails SET First_name='$firstname', Last_name='$lastname', National_id='$nationalid', Email='$email', Contact_no='$contactno', Password='$pwd', Confirmed_password='$cnfrmpwd' WHERE Employee_id='$empid'");
	
	
	
	header("Location:signupdisplay.php");
	}
	
?>







<?php
 //display data
	$empid = $_GET["empid"];
	
	$result=mysqli_query($user, "SELECT * FROM exdetails WHERE Employee_id='$empid'");

while($row=mysqli_fetch_array($result))	
{
	$firstname = $row['First_name'];
	$lastname = $row['Last_name'];
	$empid = $row["Employee_id"];
	$nationalid= $row['National_id'];
	$email = $row['Email'];
	$contactno = $row['Contact_no'];
	$pwd = $row['Password'];
	$cnfrmpwd = $row['Confirmed_password'];

}
	
	
?>



<! DOCTYPE html >
<html>
<head>
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
			
			<li class="menu"> <a href="index after logged in.html"> Home </a> </li>
			<li class="menu"> <a href="Exams.html"> Exams </a> </li>
			<li class="menu"> <a href="Reuslts.html"> Results </a> </li>
			<li class="menu"> <a href="Contact.html"> Contact </a> </li>
			<li class="menu"> <a href="About.html"> About us </a> </li>
			<div class="search">
				<form action="search.php" method="POST">
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
<div class="edit_userdetails_table" style="border-style:groove;border-color:DarkBlue;">
<form action="update.php" method="POST" name="update user">
	<table border="0" width="25%">
		<tr>
			<td>First name</td>
			<td><input type="text" style="width:130px;height:40px" name="firstname" value="<?php echo "$firstname"; ?>" required></td>
		</tr>
		<tr>
			<td>Last name</td>
			<td><input type="text" style="width:130px;height:40px" name="lastname" value="<?php echo "$lastname"; ?>" required></td>
		</tr>
		
		<tr>
			<td>National id</td>
			<td><input type="text" style="width:130px;height:40px" name="nationalid" value="<?php echo "$nationalid"; ?>" required></td>
		</tr>
		<tr>
			<td>E mail</td>
			<td><input type="email" style="width:130px;height:40px" name="email" value="<?php echo "$email"; ?>" required></td>
		</tr>
		<tr>
			<td>Contact no</td>
			<td><input type="text" style="width:130px;height:40px" name="contactno" value="<?php echo "$contactno"; ?>" placeholder></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" style="width:130px;height:40px" name="pwd" value="<?php echo "$pwd"; ?>" required></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" style="width:130px;height:40px" name="cnfrmpwd" value="<?php echo "$cnfrmpwd"; ?>" required></td>
		</tr>
		<tr>
			<td><input type="hidden" name="empid" value="<?php echo $_GET["empid"] ?>" ></td>
			<td><input type="submit" style="height:30px;width:100px;" name="update" value="update"></td>
			
		</tr>	
		</table>
		
</form>
</div>
</center>
<br>
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
				
				<a class="active" href="index after logged in.html">Home</a><br>
				<a href="#">Exams</a><br>
				<a href="#">Results</a><br>
				<a href="#">Books & Library</a><br>
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