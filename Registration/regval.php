<?php 
    include "../config.php";
    session_start();
    	$name = $_POST['name'];
    	$pass = $_POST['password'];
    	$email = $_POST['email'];
    	$mobnum = $_POST['mobnum'];
    	$phnum = $_POST['phnum'];
    	$state = $_POST['state'];
    	$city = $_POST['city'];
    	$stadd = $_POST['streetaddress'];
    	$pcode = $_POST['pcode'];
    
    	//$user_data = 'email='. $email. '&name='. $name;
    
          $pass = md5($pass);
    
    	    $sql = "SELECT * FROM User_Info WHERE Email='$email' ";
    		$result = mysqli_query($dbconnect, $sql);
    
    		if (mysqli_num_rows($result) > 0) {
    			header("Location: Registration.php?error=The email is already registered! try another");
    	        exit();
    		}else {
               $sql2 = "INSERT INTO User_Info(`Name`, `Email`, `Password`,`MobileNo.`,`PhoneNo.`,`State`,`City`,`Street_Address`,`PostalCode`) VALUES('$name', '$email', '$pass', '$mobnum', '$phnum', '$state', '$city','$stadd', '$pcode')";
               $result2 = mysqli_query($dbconnect, $sql2);
               $_SESSION['uid']=mysqli_insert_id($dbconnect);
               
               if ($result2) {
               	 header("Location:Registration.php?success=Your account has been created successfully");
    	         exit();
               }else {
    	           	header("Location: Registration.php?error=unknown error occurred");
    		        exit();
               }
    		
    		}
    
?>
  