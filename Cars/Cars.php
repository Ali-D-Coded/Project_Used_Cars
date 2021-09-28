<?php include("../config.php");
include('carval.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <!-- HTML -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- Custom Styles -->
  <link rel="stylesheet" href="cars.css">
</head>

<body>
  <div class="head">
    <h1><i>Imperial Cars</i></h1>
  </div>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link navia" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false"  onclick="document.location= '../Home/Home.php';">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navia" id="Mycar-tab" data-bs-toggle="tab" data-bs-target="#mycar" type="button" role="tab" aria-controls="mycar" aria-selected="false" onclick="document.location = '../MyCars/mycars.php';">My Cars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navia" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="false" onclick="document.location= '../Sell/sellcar.php';">Sell Your Car</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navia" id="enq-tab" data-bs-toggle="tab" data-bs-target="#enq" type="button" role="tab" aria-controls="enq" aria-selected="false" onclick="document.location='../Enquiry/Enquiry.php';">Enquiry</a>
    </li>
     <li class="nav-item">
       <a class="nav-link navia" id="editprof-tab" data-bs-toggle="tab" data-bs-target="#editpro" type="button" role="tab" aria-controls="editprof" aria-selected="false" onclick="document.location=' ../Profile/EditProfile.php';">Edit Profile</a>
     </li>
      <li class="nav-item">
        <a class="nav-link active navia" id="cars-tab" data-bs-toggle="tab" data-bs-target="#cars" type="button" role="tab" aria-controls="cars" aria-selected="false" href="#">Explore Cars</a>
      </li>
       <li class="nav-item">
          <a class="nav-link navia" id="logout-tab" data-bs-toggle="tab" data-bs-target="#logout" role="tab" aria-controls="logout" aria-selected="false" onclick="document.location='../logout.php';">logout</a>
       </li>
  </ul>
  
  <div class="banner-image">
      
        <div class="container pb-5" style="margin: auto; padding-top:5rem;">
       
             <h5 class="display-4 mb-4 font-weight-bold text-white">Explore New Cars</h5>
       <div class="row row-cols-1 row-cols-md-6 g-6" >
         

 <!---------------------------------------------->
  
                    
   <?php
              
     $show=getall();
    if (isset($show)) {
    while($row=mysqli_fetch_array($show)){
         
      showdata($row['Image'],$row['Model'],$row['City'],$row['YEAR(sellcar.Manu_year)'],$row['Price'],$row['Remark'],$row['car_id'],$row['Email'],$row['user_id']);
           }
      }else {
          echo "<p class='info alert alert-info '>
          There is no cars for sale at the moment!
          </p>
          '";
        }
   
    ?>
          </div>
        </div>
  
  <!-- --------------------------------------->
 
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color:black;" id="staticBackdropLabel">Send Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form  method="post" action="carval.php">
          <div class="mb-3">
        <input type="hidden" class="msg-text">
           <textarea rows="5" style="border-color:#666771; height:100%" class="form-control" id="message-text" name="msg"></textarea>
             </div>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="send">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
 <!-- --------------------------------------->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script type="text/javascript" src="cars.js"></script>

</body>

</html>