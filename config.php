<?php
$dbHost = 'localhost';
$dbName = 'Project_Used_Cars';
$dbUsername = 'root';
$dbPassword = 123;
$dbconnect= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
if (!$dbconnect) {
  die("Connection Error".mysqli_connect_error());
  
}/*
  function getall(){
  $current_user=$_SESSION['uid'];
  
  $sql="SELECT sellcar.car_id,sellcar.user_id,sellcar.City,YEAR(sellcar.Manu_year),sellcar.Model,sellcar.Price,Listing.Image FROM `sellcar` INNER JOIN Listing ON sellcar.car_id=Listing.car_id AND sellcar.user_id=Listing.user_id WHERE sellcar.user_id='$current_user' AND Listing.user_id='$current_user';";
  
  
  $result=mysqli_query($dbconnect,$sql);
  //$last_id=mysqli_insert_id($dbconnect);
  if (mysqli_num_rows($result)>0) {
     return $result;
  }
  
  }
  //>__________________________________________
  function showdata($img,$model,$city,$year,$price)
  {
    $element ="
    
    <div class='col-lg-4'>
       <div class='main'>
         <div class='img_main'>
           <img src='../Car_images/$img'>
           <div class='text'>
             <h3>Model : $model</h3>
             <h3>City : $city</h3>
             <h3>Year : $year</h3>
             <h3>Price : $price</h3>
             
           </div>
           
         </div>
       </div>
    </div>
    
    ";
    echo($element);
  }
  
*/
?>