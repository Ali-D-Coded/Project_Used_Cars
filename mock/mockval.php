<?php
require('../config.php');
$model=$_POST['model'];
$city=$_POST['city'];

$year=$_POST['date'];

/*if(isset($_POST['search'])){

$q="SELECT sellcar.City,sellcar.Manu_year,sellcar.Model,sellcar.Price,Listing.Image FROM `sellcar` INNER JOIN Listing ON sellcar.car_id=Listing.car_id WHERE sellcar.City='$city' AND sellcar.Manu_year='$year' AND sellcar.Model='$model'; ";

$r=mysqli_query($dbconnect,$q);
if (mysqli_num_rows($r)>0){
  while($row=mysqli_fetch_assoc($r)){
    $img=$row['Image'];
    $mdl=$row['Model'];
    $cty=$row['City'];
    $yr=$row['Manu_year'];
    $price=$row['Price'];
    echo("
    

  <div class='col-md-4 g-3'>
      
            <div class='card-deck' style='color:black;'>
                  <div class='card'>
              <form action='Cars.php' method='post'>
                  <div class='img-wrap'>
                    <img class='card-img-top' src='../Car_Images/$img' alt='Card_image'>
                    </div>
                    <div class='card-body'>
                      <h5 class='card-title'>$mdl</h5>
                      <p class='card-text'>
                        <pre style='line-height:0;'>
                        <h6>City :$cty</h6>
                        <h6>Year :$yr</h6>
                        <h6>Price:$price</h6>
                        </pre>
                      </p>
                      <p class='card-text'><small class='text'></small></p>
                    </div>
                  </div><div class='bttn'>
         <input type='hidden' name='hiddenid' class='hiddenid'>
         <input type='hidden' name='hiddenmail' >
       <input type='hidden' name='hiddenuid'>
         <button type='submit' name='contact' class='btn btn-primary btn-sm contact'>
             Contact Seller
           </button>
          </form>
           </div>
                  </div>
                  </div>
  


");
  }
}else {
  echo('No cars');
}
}
*/

?>