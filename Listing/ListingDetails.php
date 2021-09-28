<?php include "../config.php"; ?>

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
  <link rel="stylesheet" href="LD.css">
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
      <a class="nav-link active navia" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="true" onclick="document.location='../Sell/sellcar.php';">Sell Your Car</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navia" id="enq-tab" data-bs-toggle="tab" data-bs-target="#enq" type="button" role="tab" aria-controls="enq" aria-selected="false" onclick="document.location= '../Enquiry/Enquiry.php';">Enquiry</a>
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
  
  <div class="container">
    <div class="Box">
      <div class="col-md-6 regicard">
         <div class="info"><H3>Listing Details</H3></div>
         <?php if (isset($_GET['error'])) { ?>
         	<p class="error alert alert-danger"><?php echo $_GET['error']; ?>
         	</p>
           <?php } ?>
                 
           <?php if (isset($_GET['success'])) { ?>
            <p class="success alert alert-success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
         
        <form class="row g-3 needs-validation" method="POST" action="LDval.php" novalidate
        enctype="multipart/form-data">
          
          <div class="custom-file form-group">
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
           <input type="file" 
                  class="custom-file-input inputfd" 
                  id="validatedCustomFile" 
                  name="images"
                  required>
              <div class="invalid-tooltip">No File Chosen </div>
               <div class="valid-tooltip">Looks good!.</div>
            </div>
         
          <div class="form-group">
            <label for="validationCustom02" class="form-label">Fuel Type</label>
            <select class="form-select inputfd" 
                    id="validationCustom02" 
                    name="ftype"
                    required>
            <option selected disabled value="">Choose...</option>
            <option value="Petrol">Petrol</option>
            <option value="Diesel">Diesel</option>
            <option value="Electric">Electric</option>
            </select>
            <div class="invalid-tooltip">Please select fuel type</div>
             <div class="valid-tooltip">Looks good!</div>
          </div>
          <div class="form-group">
         <label for="validationCustom03" class="form-label">Color</label>
           <select class="form-select inputfd" 
                  id="validationCustom03" 
                  name="color"
                  required>
           <option selected disabled value="">Choose...</option>
          <option value="White">White</option>
           <option value="Black">Black</option>
           <option value="Red">Red</option>
           <option value="Blue">Blue</option>
           <option value="Green">Green</option>
           <option value="Yellow">Yellow</option>
            <option value="Grey">Grey</option>
           </select>
            <div class="invalid-tooltip">Please select color</div>
             <div class="valid-tooltip">Looks good!</div>
            </div>
            
          <div class="form-group">
            <label for="validationCustom04" class="form-label">Registeraion No.</label>
            <input type="text" 
                   class="form-control inputfd" 
                   id="validationCustom04" 
                   name="regno"
                   required>
            <div class="valid-tooltip">
              Looks good!
            </div>
             <div class="invalid-tooltip">
               Please enter the Registeraion number!.
             </div>
          </div>
          <div class="form-group">
            <label for="validationCustom05" class="form-label">Insurance Valid Till..</label>
              <input type="date" 
                    class="form-control inputfd" 
                    id="validationCustom05" 
                    name="insval"
                    required>
                 <div class="valid-tooltip">
                   Looks good!
                 </div>
              <div class="invalid-tooltip">
                Please don't skip this field!.
              </div>
          </div>
          
          <div class="form-group">
            <label for="validationTextarea" class="form-label">Tell the customer why they should buy your car</label>
            <textarea class="form-control inputfd" 
                      id="validationTextarea"  
                      name="remark"
                      required></textarea>
            <div class="invalid-tooltip">
              Please don't skip this field!.
            </div>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          
          <button class="btn btn-primary" name="addcar" type="submit">Post</button>
        </form>
       </div>
        </div>
           </div>
        </div>
      </div>
    </div>
    </div>
  
  
  <div class="tab-content fade show" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="LD.js">
  </script>
</body>

</html>