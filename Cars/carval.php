<?php

session_start();
 include "../config.php";
$current_user=$_SESSION['uid'];

function getall(){
  include "../config.php";
$current_user=$_SESSION['uid'];

$sql="SELECT sellcar.car_id,
             sellcar.user_id,
             sellcar.City,
             YEAR(sellcar.Manu_year),
             sellcar.Model,
             sellcar.Price,
             sellcar.Email,
             Listing.Image,
             Listing.Remark
      FROM `sellcar` INNER JOIN Listing ON sellcar.car_id=Listing.car_id AND sellcar.user_id=Listing.user_id WHERE sellcar.user_id!='$current_user' AND Listing.user_id!='$current_user';";


$result=mysqli_query($dbconnect,$sql);
//$last_id=mysqli_insert_id($dbconnect);
if (mysqli_num_rows($result)>0) {
   return $result;
}

}
function showdata($img,$model,$city,$year,$price,$remark,$carid,$email,$uid)
{
  
  $element="
  
     <div class='col-md-4 g-3'>
      
            <div class='card-deck' style='color:black;'>
                  <div class='card'>
              <form action='Cars.php' method='post'>
                  <div class='img-wrap'>
                    <img class='card-img-top' src='../Car_Images/$img' alt='Card_image'>
                    </div>
                    <div class='card-body'>
                      <h5 class='card-title'>$model</h5>
                      <p class='card-text'>
                        <pre style='line-height:0;'>
                        <h6>City :$city</h6>
                        <h6>Year :$year</h6>
                        <h6>Price:$price</h6>
                        </pre>
                      </p>
                      <p class='card-text'><small class='text'>$remark</small></p>
                    </div>
                  </div><div class='bttn'>
         <input type='hidden' name='hiddenid' class='hiddenid' value='$carid'>
         <input type='hidden' name='hiddenmail' value='$email'>
       <input type='hidden' name='hiddenuid' value='$uid'>
         <button type='submit' name='contact' class='btn btn-primary btn-sm contact'>
             Contact Seller
           </button>
          </form>
           </div>
                  </div>
                  </div>
  
  
  ";
  
  


  echo($element);
  
}

 if (isset($_POST['contact'])) {
      $_SESSION['carId']=$_POST['hiddenid'];
      $_SESSION['email']=$_POST['hiddenmail'];
      $_SESSION['sellerid']=$_POST['hiddenuid'];
      header('location:msg.php');
    }








//_____________________________________________________




//_____________________________________________________
?>


  