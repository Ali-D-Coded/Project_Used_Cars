<?php 
session_start(); 
include "../config.php";

	$email = $_POST['email'];
	$pass = $_POST['password'];

		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM User_Info WHERE Email='$email' AND Password='$pass'";

		$result = mysqli_query($dbconnect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			
          if ($row['Email'] === $email && $row['Password'] === $pass) {
            	$_SESSION['Email'] = $row['Email'];
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['uid'] = $row['user_id'];
            	header("Location: ../Home/Home.php");
		        exit();
            }else{
				header("Location:Login.php?error=Incorect User name or password");
		        exit();
            }
		}else{
			header("Location: Login.php?error=Incorect Email or password");
	        exit();
	        
	        
		}
		?>
	
	