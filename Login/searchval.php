<?php
include('../config.php');


if (isset($_POST['search'])) {
header('location:searchresults.php');
       $model=$_POST['model'];
        $year=$_POST['date'];
        $city=$_POST['city'];

  

  
 function getall(){
    include "../config.php";
    
          $model=$_POST['model'];
            $year=$_POST['date'];
            $city=$_POST['city'];
  
  
  $sql="SELECT sellcar.car_id,
               sellcar.user_id,
               sellcar.City,
               YEAR(sellcar.Manu_year),
               sellcar.Model,
               sellcar.Price,
               sellcar.Email,
               Listing.Image,
               Listing.Remark
        FROM `sellcar` INNER JOIN Listing ON sellcar.car_id=Listing.car_id AND sellcar.user_id=Listing.user_id WHERE sellcar.City='$city' OR YEAR(sellcar.Manu_year)='$year' OR sellcar.Model='$model';";
  
  
  $result=mysqli_query($dbconnect,$sql);
  if (mysqli_num_rows($result)>0) {
     return $result;
  }
}


function showdata($img,$model,$city,$year,$price,$remark)
{
  
  $element="
  
     <div class='col-md-4 g-3'>
      
            <div class='card-deck' style='color:black;'>
                  <div class='card'>
              <form action='searchval.php' method='post'>
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
}


if (isset($_POST['contact'])) {
  header('location:Login.php');
}





?>