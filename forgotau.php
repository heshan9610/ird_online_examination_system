    <?php      
        include('config1.php');  
        $contactno = $_POST['contactno'];  
         
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($user, $username);  
            $password = mysqli_real_escape_string($user, $password);  
          
            $sql = "select *from details1 where Contact_no = '$contactno'";  
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
			
			
			
			  

			
	?>