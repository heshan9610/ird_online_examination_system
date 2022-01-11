

<?php
	
	session_start();
	include_once 'config1.php';
	
?>



<! DOCTYPE html >
<html>
<body>
<center>
<div id="div6" style="height:1200px;width:1300px;border:3px solid blue;background-color:#AFDCEC;">


    <?php      
        include('config1.php');  
        $username = $_POST['username'];  
        $password = $_POST['password'];  
          
        
          
            $sql = "select *from details1 where Employee_id = '$username' and Password = '$password'";  
            $result = mysqli_query($user, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
				
				header("Location: index2.html");
                echo "<h1><center> Login successfull </center></h1>";  
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            } 



			$sql = "select *from admdetails where Employee_id = '$username' and Password = '$password'";  
            $result = mysqli_query($user, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
				header("Location: signupdisplay.php");
                echo "<h1><center> Login successfull </center></h1>";  
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }   




			$sql = "select *from exdetails where Employee_id = '$username' and Password = '$password'";  
            $result = mysqli_query($user, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
				header("Location: examiner.php");
                echo "<h1><center> Login successfull </center></h1>";  
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }   

			
			
			
			$sql = "select *from madetails where Employee_id = '$username' and Password = '$password'";  
            $result = mysqli_query($user, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
				header("Location: manager.php");
                echo "<h1><center> Login successfull </center></h1>";  
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }   
			
			
			
    ?> 
	
</div>
</center>
</body>
</html>