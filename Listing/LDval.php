<?php
include "../config.php";
session_start();

$image=$_FILES['images'];
$fuel=$_POST['ftype'];
$color=$_POST['color'];
$regno=$_POST['regno'];
$insure=$_POST['insval'];
$remark=$_POST['remark'];

$car_id =$_SESSION['car_id'];
$uid=$_SESSION['uid'];
//_____++__________+___________________


     

   
   $img_name = $_FILES['images']['name'];
   $img_size =$_FILES['images']['size'];
   $tmp_name =$_FILES['images']['tmp_name'];
   $error =$_FILES['images']['error'];
   
   if ($error === 0) {
     if ($img_size>9005000) {
       header("location:ListingDetails.php?error='Sorry, your file is too large'");
     }
     else{
       $img_ex= pathinfo($img_name,PATHINFO_EXTENSION);
       $img_ex_lc = strtolower($img_ex);
       
       $allowed_exs = array("jpg","jpeg","png");
       if (in_array($img_ex_lc,$allowed_exs)) {
           $new_img_name= uniqid("IMG-",true).'.'.$img_ex_lc;
           $img_upload_path = '../Car_images/'.$new_img_name;
           move_uploaded_file($tmp_name,$img_upload_path);
       }else{
         header("location:ListingDetails.php?error=' Unknown Error!!'");
       }
       
     }
   }else{
     header("location:ListingDetails.php?error=' Unknown Error!!'");
   }
//_______________________________________________________
    		
$sql ="SELECT * FROM `Listing` WHERE `RegNo`='$regno';";

 $result = mysqli_query($dbconnect, $sql);
    $rows= mysqli_num_rows($result);
    		if ($rows > 0) {
    			header("Location: ListingDetails.php?error=A car is already registered whith this register number! try another");
    	        exit();
    		}else {
              $sql2="INSERT INTO `Listing`(`Image`,`Fuel`,`Color`,`RegNo`,`Insurance`,`Remark`,`user_id`,`car_id`) VALUES('$new_img_name','$fuel','$color','$regno','$insure','$remark','$uid','$car_id');";
              $result= mysqli_query($dbconnect,$sql2);
              if ($result) {
             header("location:ListingDetails.php?success='Post successfull!✔️");
            //__________________________________________ 
             if ($_SERVER['REQUEST_METHOD'] =="POST") 
               {
                 if (isset($_POST['addcar'])) 
                 {
                   if (isset($_SESSION['cart'])) 
                   {
                     $_SESSION['cart'][] = array('$image' => $new_img_name);
                     
                   }
                 }
               }
               
                 		print_r($_SESSION['cart']);
          //_____________________________________       		
                exit();
              }else{
              header("location:ListingDetails.php?error='Something went wrong✖️");
             
             //echo "Error".mysqli_error($dbconnect);
               exit();
              }
    		}
    
  //_____________________________________________________
  
  
?>