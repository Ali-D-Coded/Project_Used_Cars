<?php
include "../config.php";
session_start();
$uid = $_SESSION['uid'];

function getall(){
  //________________________________________________________
  //This function is to retrieve all the data from sellcar  and Listing tables where the car id is                 $_SESSION['editcar_id'], which refers to the car id   which the user want to edit by clicking the Edit button in mycars page.                                        
  //______________________________________________________
  include "../config.php";
$current_user=$_SESSION['uid'];

$sql="SELECT City,PostalCode,Name,`MobileNo.`,Email FROM User_Info WHERE user_id='$current_user';";


$result=mysqli_query($dbconnect,$sql);
if (mysqli_num_rows($result)) {
   return $result;
}

}




if (isset($_POST['next'])) {
  // code...


$md = $_POST['mfgyr'];
$brand=$_POST['brand'];
$model =$_POST['model'];
$kmd =$_POST['kmd'];
$nofown =$_POST['nofown'];
$price =$_POST['price'];
$email=$_POST['email'];
$pcode=$_POST['pcode'];
$name=$_POST['name'];
$mobnum=$_POST['mobnum'];
$city=$_POST['city'];

$q="SELECT Email FROM User_Info WHERE Email='$email' AND user_id!='$uid';";
$r=mysqli_query($dbconnect,$q);
if (mysqli_num_rows($r)>0) {
  header('location:sellcar.php?error=This Email belongs to someone else, please try another');
  exit();
}else{


$sql="INSERT INTO `sellcar` (`City`,`Postal_code`,`Manu_year`,`Brand`,`Model`,`Kmsdriven`,`No_ofown`,`Price`,`Name`,`Mobileno`,`Email`,`user_id`) VALUES('$city','$pcode','$md','$brand','$model','$kmd','$nofown','$price','$name','$mobnum','$email','$uid');";

$result = mysqli_query($dbconnect, $sql);

$_SESSION['car_id']=mysqli_insert_id($dbconnect);
               
    if ($result) {
   header("Location:../Listing/ListingDetails.php");
    	exit();
    
    }else {
    		
    		echo "<h1> Error Occured!!</h1>".mysqli_error($dbconnect);
    		
    		   exit();
        }


}
}


?>