<?php
include('../config.php');
session_start();


$current_user=$_SESSION['uid'];
function getall(){
  //________________________________________________________
  //This function is to retrieve all the data from sellcar  and Listing tables where the car id is                 $_SESSION['editcar_id'], which refers to the car id   which the user want to edit by clicking the Edit button in mycars page.                                        
  //______________________________________________________
  include "../config.php";
$current_user=$_SESSION['uid'];

$sql="SELECT * FROM `User_Info` WHERE user_id = '$current_user';";


$result=mysqli_query($dbconnect,$sql);
if (mysqli_num_rows($result)>0) {
   return $result;
}

}

//___________+________+_________________________________


  // code...
  
function mempty() //This custom function returns true if all the args are empty and returns false when encounters a non empty argument
{
    foreach(func_get_args() as $arg)
        if(empty($arg))
            continue;
        else
            return false;
    return true;
}



if (isset($_POST['save'])) {
  
/*  if (!mempty($_POST['name'],
              $_POST['mobnum'],
              $_POST['phnum'],
              $_POST['state'],
              $_POST['city'],
              $_POST['stadd'],
              $_POST['pcode'],
              $_POST['password'],
              $_POST['email'])
              && isset($_POST['name'])
              && isset($_POST['mobnum'])
              && isset($_POST['phnum'])
              && isset($_POST['state'])
              && isset($_POST['city'])
              && isset($_POST['stadd'])
              && isset($_POST['pcode'])
             && isset($_POST['password']) 
             && isset($_POST['email'])) 

  
   {
    $name = $_POST['name'];
     $mobnum =$_POST['mobnum'];
     $phnum =$_POST['phnum'];
     $state =$_POST['state'];
     $city =$_POST['city'];
     $stadd =$_POST['stadd'];
     $pcode =$_POST['pcode'];
     $pass =$_POST['password'];
     $email =$_POST['email'];
     

$sql="SELECT Email FROM `User_Info` WHERE Email='$email' AND user_id!='$current_user';";
$result=mysqli_query($dbconnect,$sql);

if (mysqli_num_rows($result)>0) {
  header('location:EditProfile.php?error=This email is already registered!! Please try another⚠️');
  exit();
}else
  {
    $sql2="UPDATE `User_Info` u
      SET u.Name='$name',
          u.Email='$email',
          u.Password='$pass',
          u.`MobileNo.`='$mobnum',
          u.`PhoneNo.`='$phnum',
          u.State='$state',
          u.City='$city',
          u.Street_Address='$stadd',
          u.PostalCode='$pcode' WHERE user_id='$current_user'";
          
      header('location:EditProfile.php?success=Your Profile has been updated successfully✔️');
  
  }


}*/


if (!mempty($_POST['name'],
              $_POST['mobnum'],
              $_POST['phnum'],
              $_POST['state'],
              $_POST['city'],
              $_POST['stadd'],
              $_POST['pcode'],
              $_POST['password'],
              $_POST['email'])
              && isset($_POST['name'])
              && isset($_POST['mobnum'])
              && isset($_POST['phnum'])
              && isset($_POST['state'])
              && isset($_POST['city'])
              && isset($_POST['stadd'])
              && isset($_POST['pcode'])
             && isset($_POST['password']) 
             && isset($_POST['email'])) 

  
   {
    $name = $_POST['name'];
     $mobnum =$_POST['mobnum'];
     $phnum =$_POST['phnum'];
     $state =$_POST['state'];
     $city =$_POST['city'];
     $stadd =$_POST['stadd'];
     $pcode =$_POST['pcode'];
     $pass =$_POST['password'];
     $email =$_POST['email'];

$sql="SELECT Email FROM `User_Info` WHERE Email='$email' AND user_id!='$current_user';";
$result=mysqli_query($dbconnect,$sql);

if (mysqli_num_rows($result)>0) {
  header('location:EditProfile.php?error=This email is already registered!! Please try another⚠️');
  exit();
}else
  {
    $r1=mysqli_query($dbconnect,"UPDATE `User_Info` SET Name='$name' WHERE user_id='$current_user';");
    
    $r2=mysqli_query($dbconnect,"UPDATE `User_Info` SET Email='$email' WHERE user_id='$current_user';");
    
    $r3=mysqli_query($dbconnect,"UPDATE `User_Info` SET Password='$pass' WHERE user_id='$current_user';");
    
    $r4=mysqli_query($dbconnect,"UPDATE `User_Info` SET `MobileNo.`='$mobnum' WHERE user_id='$current_user';");
    
    $r5=mysqli_query($dbconnect,"UPDATE `User_Info` SET `PhoneNo.`='$phnum' WHERE user_id='$current_user';");
    
    $r6=mysqli_query($dbconnect,"UPDATE `User_Info` SET State='$state' WHERE user_id='$current_user';");
    
    $r7=mysqli_query($dbconnect,"UPDATE `User_Info` SET City='$city' WHERE user_id='$current_user';");
    
    $r8=mysqli_query($dbconnect,"UPDATE `User_Info` SET Street_Address='$stadd' WHERE user_id='$current_user';");
    
    $r9=mysqli_query($dbconnect,"UPDATE `User_Info` SET PostalCode='$pcode' WHERE user_id='$current_user';");
    
    if ($r1 && $r2 && $r3 && $r4 && $r5 && $r6 && $r7 && $r8 && $r9) {
      header('location:EditProfile.php?success=Your Profile has been updated successfully✔️');
    }else{
      header('location:EditProfile.php?error=Something went wrong ✖️');
    }
    
  }


   }
}
  

?>