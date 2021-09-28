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
             Listing.Image,
             Listing.Remark 
      FROM `sellcar` INNER JOIN Listing ON sellcar.car_id=Listing.car_id AND sellcar.user_id=Listing.user_id WHERE sellcar.user_id='$current_user' AND Listing.user_id='$current_user';";


$result=mysqli_query($dbconnect,$sql);
if (mysqli_num_rows($result)>0) {
   return $result;
}

}
function showdata($img,$model,$city,$year,$price,$id,$remark)
{
  
  $element="
  <div class='col-md-4 g-3'>
        <form method='post' action='mycarsval.php'>
                  <div class='card-deck' style='color:black;'>
                    <div class='card'>
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
  <input type='hidden' name='hiddenid' value='$id'>
 <input type='submit' class='btn btn-primary btn-sm edit' name='edit' value='Edit'>
  <input type='submit' class='btn btn-danger btn-sm remove'  value='Remove' name='remove'>
             </div>
                    </div>
                    </form>
                    </div>
    ";

  
  echo($element);
}
$car_id=$_POST['hiddenid'];
$_SESSION['mycar']= $car_id;

if (isset($_POST['edit'])) {
  $_SESSION['editcar_id'] = $_POST['hiddenid'];
  header('Location:Editcar/editcar.php');
}

 if (isset($_POST['remove'])) {
   //I have set Listing table cascade delete to sellcar table. So as I remove the data according to a specific car_id from sellcar the data relating to that specific car_id in Listing table will also be deleted simultaneously. 
    $q="DELETE FROM `sellcar` WHERE car_id='$car_id';";
    mysqli_query($dbconnect,$q);
  
    header('location:mycars.php');
    echo "<script>
        window.location.reload();
        </script>";
  }else{
     "<script>
        alert('Error occured')
        </script>";
  }
  
 
?>