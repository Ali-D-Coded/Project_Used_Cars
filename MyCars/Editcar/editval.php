<?php
include('../../config.php');
session_start();


$current_car=$_SESSION['editcar_id'];
function getall(){
  //________________________________________________________
  //This function is to retrieve all the data from sellcar  and Listing tables where the car id is                 $_SESSION['editcar_id'], which refers to the car id   which the user want to edit by clicking the Edit button in mycars page.                                        
  //______________________________________________________
  include "../../config.php";
$current_car=$_SESSION['editcar_id'];

$sql="SELECT * FROM `sellcar` INNER JOIN Listing ON sellcar.car_id=Listing.car_id AND sellcar.user_id=Listing.user_id WHERE sellcar.car_id='$current_car' AND Listing.car_id='$current_car';";


$result=mysqli_query($dbconnect,$sql);
if (mysqli_num_rows($result)>0) {
   return $result;
}

}

//________________________________________________

//$image=$_FILES['images'];
/*if (!mempty($_POST['city'] && isset($_POST['city']),
          $_POST['pcode'],
          $_POST['mfgyr'],
          $_POST['brand'],
          $_POST['model'],
          $_POST['kmd'],
          $_POST['nofown'],
          $_POST['price'],
          $_POST['name'],
          $_POST['mobnum'],
          $_POST['email'],
          $_POST['fuel'],
          $_POST['colour'],
          $_POST['regno'],
          $_POST['insval'],
          $_POST['remark']

)) {
  $md = $_POST['mfgyr'];
   $brand =$_POST['brand'];
   $model =$_POST['model'];
   $kmd =$_POST['kmd'];
   $nofown =$_POST['nofown'];
   $price =$_POST['price'];
   $email =$_POST['email'];
   $pcode =$_POST['pcode'];
   $name =$_POST['name'];
   $mobnum =$_POST['mobnum'];
   $city=$_POST['city'];
   
   $fuel=$_POST['fuel'];
    $color=$_POST['colour'];
    $regno=$_POST['regno'];
    $insure=$_POST['insval'];
    $remark=$_POST['remark'];
    
//______________________________________________

if (!empty($_FILES['images']) && isset($_FILES['images'])) {
  
  $img_name = $_FILES['images']['name'];
     $img_size =$_FILES['images']['size'];
     $tmp_name =$_FILES['images']['tmp_name'];
     $error =$_FILES['images']['error'];
     
     if ($error === 0) {
       if ($img_size>9005000) {
         header("location:editcar.php?error='Sorry, your file is too large'");
       }
       else{
         $img_ex= pathinfo($img_name,PATHINFO_EXTENSION);
         $img_ex_lc = strtolower($img_ex);
         
         $allowed_exs = array("jpg","jpeg","png");
         if (in_array($img_ex_lc,$allowed_exs)) {
             $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
             $img_upload_path = '../../Car_images/'.$new_img_name;
             move_uploaded_file($tmp_name,$img_upload_path);
         }else{
           header("location:editcar.php?error=' Error uploading image!!'");
         }
         
       }
     }else{
       header("location:editcar.php?error=' Unknown image Error!!'");
     }
}else{
  echo "Image is not set or is empty";
}
   
    

 if (mysqli_num_rows(mysqli_query($dbconnect,"SELECT * FROM `sellcar` t1 JOIN `Listing` t2 ON t1.car_id=$current_car AND t2.car_id=$current_car ;"))>0) 
 {
   $sql2="UPDATE `sellcar` t1 JOIN `Listing` t2
             ON t1.car_id ='$current_car' AND t2.car_id = '$current_car'
            SET t1.City = '$city',
                t1.Postal_code = '$pcode',
                t1.Manu_year = '$md',
                t1.Brand = '$brand',
                t1.Model = '$model',
                t1.Kmsdriven = '$kmd',
                t1.No_ofown = '$nofown', 
                t1.Price = '$price',
                t1.Name = '$name',
                t1.Mobileno = '$mobnum',
                t1.Email = '$email',
                
                t2.Image = '$new_img_name',
                t2.Fuel = '$fuel',
                t2.Color = '$color',
                t2.RegNo = '$regno',
                t2.Insurance = '$insure',
                t2.Remark = '$remark' ;";
          
     $result2=mysqli_query($dbconnect,$sql2);
     if ($result2) {
       header("location:editcar.php?success='Car informations updated successfully!✔️");
     }else{
       header("location:editcar.php?error='Something went wrong'");
     }
 }else{
   echo "There is no records to update";
 }

}
//_______________________________________________________
$sql ="SELECT `RegNo` FROM `Listing` WHERE `car_id`!='$current_car' AND `RegNo`='$regno';";

 $result = mysqli_query($dbconnect, $sql);
    $rows= mysqli_num_rows($result);
    		if ($rows > 0) {
    			header("Location: editcar.php?error=A car is already registered whith this register number! try another");
    	        exit();
    		}//else {
            //  $sql2="INSERT INTO `Listing`(`Image`,`Fuel`,`Color`,`RegNo`,`Insurance`,`Remark`,`user_id`,`car_id`) VALUES('$new_img_name','$fuel','$color','$regno','$insure','$remark','$uid','$car_id');";
              //$result= mysqli_query($dbconnect,$sql2);
              //if ($result) {
           //  header("location:editcar.php?success='Post successfull!✔️");
                
             // }
    		  
    		//}*/
    		
   /* $md = $_POST['mfgyr'];
    $brand =$_POST['brand'];
    $model =$_POST['model'];
    $kmd =$_POST['kmd'];
    $nofown =$_POST['nofown'];
    $price =$_POST['price'];
    $email =$_POST['email'];
    $pcode =$_POST['pcode'];
    $name =$_POST['name'];
    $mobnum =$_POST['mobnum'];
    $city=$_POST['city'];
    
    $fuel=$_POST['fuel'];
     $color=$_POST['colour'];
     $regno=$_POST['regno'];
     $insure=$_POST['insval'];
     $remark=$_POST['remark'];
     
 Brand = '$brand',
                 t1.Model = '$model',
                 t1.Kmsdriven = '$kmd',
                 t1.No_ofown = '$nofown', 
                 t1.Price = '$price',
                 t1.Name = '$name',
                 t1.Mobileno = '$mobnum',
                 t1.Email = '$email',
                 
                 t2.Image = '$new_img_name',
                 t2.Fuel = '$fuel',
                 t2.Color = '$color',
                 t2.RegNo = '$regno',
                 t2.Insurance = '$insure',
                 t2.Remark = '$remark' ;";
 */
 
 
 
 
 if (isset($_POST['city']) && !empty($_POST['city'])) {
   $city=$_POST['city'];
   $q1="UPDATE `sellcar` SET City='$city'";
  $r1= mysqli_query($dbconnect,$q1);
 }
 if (isset($_POST['pcode']) && !empty($_POST['pcode'])) {
   $pcode=$_POST['pcode'];
    $q2="UPDATE `sellcar` SET Postal_code='$pcode'";
    $r2=mysqli_query($dbconnect,$q2);
  }
  if (isset($_POST['mfgyr']) && !empty($_POST['mfgyr'])) {
    $md=$_POST['mfgyr'];
     $q3="UPDATE `sellcar` SET Manu_year = '$md' ";
    $r3= mysqli_query($dbconnect,$q3);
   }
   if (isset($_POST['brand']) && !empty($_POST['brand'])) {
     $brand=$_POST['brand'];
      $q4="UPDATE `sellcar` SET Brand = '$brand'";
     $r4= mysqli_query($dbconnect,$q4);
    }
    if (isset($_POST['model']) && !empty($_POST['model'])) {
      $model=$_POST['model'];
       $q5="UPDATE `sellcar` SET Model = '$model'";
      $r5= mysqli_query($dbconnect,$q5);
     }
     if (isset($_POST['kmd']) && !empty($_POST['kmd'])) {
       $kmd=$_POST['kmd'];
        $q6="UPDATE `sellcar` SET Kmsdriven = '$kmd'";
       $r6= mysqli_query($dbconnect,$q6);
      }
      if (isset($_POST['nofown']) && !empty($_POST['nofown'])) {
        $nofown=$_POST['nofown'];
         $q7="UPDATE `sellcar` SET No_ofown = '$nofown'";
        $r7= mysqli_query($dbconnect,$q7);
       }
    if (isset($_POST['price']) && !empty($_POST['price'])) {
      $price=$_POST['price'];
       $q8="UPDATE `sellcar` SET Price = '$price'";
       $r8=mysqli_query($dbconnect,$q8);
     }
    if (isset($_POST['name']) && !empty($_POST['name'])) {
      $name=$_POST['name'];
       $q9="UPDATE `sellcar` SET Name = '$name'";
       $r9=mysqli_query($dbconnect,$q9);
     }
     if (isset($_POST['mobnum']) && !empty($_POST['mobnum'])) {
       $mobnum=$_POST['mobnum'];
        $q10="UPDATE `sellcar` SET Mobileno = '$mobnum'";
        $r10=mysqli_query($dbconnect,$q10);
      }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
      $email=$_POST['email'];
       $q11="UPDATE `sellcar` SET Email='$email'";
      $r11= mysqli_query($dbconnect,$q11);
     }
   
   // if (isset($_POST['images']) && !empty($_POST['images'])) {}
   
      if (!empty($_FILES['images']) && isset($_FILES['images'])) {
         
         $img_name = $_FILES['images']['name'];
            $img_size =$_FILES['images']['size'];
            $tmp_name =$_FILES['images']['tmp_name'];
            $error =$_FILES['images']['error'];
            
            if ($error === 0) {
              if ($img_size>9005000) {
                header("location:editcar.php?error='Sorry, your file is too large'");
              }
              else{
                $img_ex= pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                
                $allowed_exs = array("jpg","jpeg","png");
                if (in_array($img_ex_lc,$allowed_exs)) {
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = '../../Car_images/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);
                }else{
                  header("location:editcar.php?error=' Error uploading image!!'");
                }
                
              }
            }else{
              header("location:editcar.php?error='Image is not set!!'");
            }
       $q12="UPDATE `Listing` SET Image = '$new_img_name'";
       $r12=mysqli_query($dbconnect,$q12);
       }/*else{
         echo "Image is not set or is empty".mysqli_connect_error();
       }*/
       
     
    if (isset($_POST['fuel']) && !empty($_POST['fuel'])) {
           $fuel=$_POST['fuel'];
            $q13="UPDATE `Listing` SET Fuel = '$fuel'";
            $r13=mysqli_query($dbconnect,$q13);
        }
    if (isset($_POST['colour']) && !empty($_POST['colour'])) {
      $color=$_POST['colour'];
       $q14="UPDATE `Listing` SET Color='$color'";
      $r14= mysqli_query($dbconnect,$q14);
     }
    if (isset($_POST['regno']) && !empty($_POST['regno'])) {
      $regno=$_POST['regno'];
       $q15="UPDATE `Listing` SET RegNo = '$regno'";
      $r15= mysqli_query($dbconnect,$q15);
     }
    if (isset($_POST['insval']) && !empty($_POST['insval'])) {
      $insure=$_POST['insval'];
       $q16="UPDATE `Listing` SET Insurance = '$insure'";
       $r16=mysqli_query($dbconnect,$q16);
     }
    if (isset($_POST['remark']) && !empty($_POST['remark'])) {
      $remark=$_POST['remark'];
      $q17="UPDATE `Listing` SET Remark='$remark'";
     $r17=  mysqli_query($dbconnect,$q17);
     }
     
    if (($r1 && $r2 && $r3 && $r4 && $r5 && $r6 && $r7 && $r8 && $r9 && $r10 && $r11 && $r12 && $r13 && $r14 && $r15 && $r16 && $r17)===true) {
      header("location:editcar.php?success='Car informations updated successfully!✔️");
    }else{
      //error_reporting(E_ALL ^ E_NOTICE);
      echo('error').mysqli_connect_error();
      header("location:editcar.php?error='Something went wrong'");
    }
    
    		echo($r1);
    		





?>