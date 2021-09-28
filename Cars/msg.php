<?php 
include('../config.php');
session_start();
$current_user=$_SESSION['uid'];

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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  
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
      <a class="nav-link navia" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false" onclick="document.location= '../Home/Home.php';">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navia" id="Mycar-tab" data-bs-toggle="tab" data-bs-target="#mycar" type="button" role="tab" aria-controls="mycar" aria-selected="false" onclick="document.location = '../MyCars/mycars.php';">My Cars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navia" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="false" onclick="document.location='../Sell/sellcar.php';">Sell Your Car</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active navia" id="enq-tab" data-bs-toggle="tab" data-bs-target="#enq" type="button" role="tab" aria-controls="enq" aria-selected="false" onclick="document.location= '../Enquiry/Enquiry.php';">Enquiry</a>
    </li>
     <li class="nav-item">
       <a class="nav-link navia" id="editprof-tab" data-bs-toggle="tab" data-bs-target="#editpro" type="button" role="tab" aria-controls="editprof" aria-selected="false" onclick="document.location= '../Profile/EditProfile.php';">Edit Profile</a>
     </li>
      <li class="nav-item">
        <a class="nav-link navia" id="cars-tab" data-bs-toggle="tab" data-bs-target="#cars" type="button" role="tab" aria-controls="cars" aria-selected="false" onclick="document.location='../Cars/Cars.php';">Explore Cars</a>
      </li>
       <li class="nav-item">
          <a class="nav-link navia" id="logout-tab" data-bs-toggle="tab" data-bs-target="#logout" role="tab" aria-controls="logout" aria-selected="false" onclick="document.location='../logout.php';">logout</a>
       </li>
  </ul>
  

 <div class="banner-image">
    <div class="container pb-5">
      <div class="row py-5 align-items-center">
        <div class="col-lg-6">
          <h5 class="display-4 mb-4 font-weight-bold text-white">Let the Seller know your interest</h5>
          <p class="h5 aa mb-4 pb-3 text-white-50">
            The No.1 Plateform to Buy And Sell Used Cars
          </p>
          <div class="msg rounded-3">
             <?php if (isset($_GET['error'])) { ?>
             	<p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>
               <?php } ?>
                     
               <?php if (isset($_GET['success'])) { ?>
                <p class="success alert alert-success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
             
             
     <form action="msg.php" method="post" class="needs-validation" novalidate>
          <div class="mb-3">
        <label for="recipient-name" class="col-form-label">Recipient:</label>
       <input type="text" style="color:white;" disabled value="<?php echo($_SESSION['email']); ?>" class="form-control  border-light" id="recipient-name">
          </div>
       <div class="mb-3 textarea_wrap">
       <label for="message-text" class="col-form-label">Message:</label>
  <textarea style="color:white;" name='msg'  class="form-control border-light" id="message-text" required></textarea>
   <div class="invalid-tooltip">
     Dont' leave this field empty!!
     </div>
                   </div>
          <button type="submit" name="send" class="btn btn-primary">Send</button>
       </form>
            
          </div>
      </div>
    </div>
  </div>
  </div>
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="cars.js">
  </script>
</body>

</html>
<?php
if (isset($_POST['send'])) {
  
 $msg=$_POST['msg']; 
 $selected_car=$_SESSION['carId'];
 $seller=$_SESSION['sellerid'];
 $q2="SELECT `Name`,`MobileNo.` FROM `User_Info` WHERE `user_id`='$current_user'; ";
 $r2=mysqli_query($dbconnect,$q2);
 $row=mysqli_fetch_assoc($r2);
 $name=$row['Name'];
 $mobnum=$row['MobileNo.'];
 
 $q="INSERT INTO `Enquiries` (`user_id`,`messages`,`car_id`,`Name`,`MobileNo.`,`sellerid`) VALUES('$current_user','$msg','$selected_car','$name','$mobnum','$seller');";
 $r=mysqli_query($dbconnect,$q);
 echo('<script>alert("Message sent successfully")
 document.location="Cars.php"
 </script>');

   
 
}
?>