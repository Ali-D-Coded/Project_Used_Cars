<?php include('sellval.php') ;
include('../config.php');

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
  <link rel="stylesheet" href="sell.css">
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
      <a class="nav-link active navia" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="true" >Sell Your Car</a>
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
     <div>
       <h5 class="display-6 mb-4 font-weight-bold text-white">Fill up the basic informations and get started</h5>
      </div>
      <div class="col-md-6 regicard">
    <!------------------+++-------------++++++---->
    <?php if (isset($_GET['error'])) { ?>
    	<p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>
      <?php } ?>
            
      <?php if (isset($_GET['success'])) { ?>
       <p class="success alert alert-success"><?php echo $_GET['success']; ?></p>
           <?php } ?>
  
  <?php 
  $show=getall();
   if (isset($show)) {
   while($row=mysqli_fetch_array($show)){
     
  ?>
           
  
    <!------++++++-------------------------------->
        
        <form action="sellval.php" class="row g-3 needs-validation" method="POST" novalidate>
           <div class="form-group">
                      <label for="validationCustom01" class="form-label">City</label>
          <select class="form-select inputfd" 
                  id="validationCustom09" 
                  name="city"
                  required>
                        <option selected value="<?php echo($row['City']); ?>"><?php echo($row['City']); ?></option>
                        <option value="Trivandrum">Trivandrum</option>
                        <option value="Thrissur">Thrissur</option>
                        <option value="Kozhikode">Kozhikode</option>
                        <option value="Alappuzha">Alappuzha</option>
                        <option value="Kollam">Kollam</option>
                        <option value="Kannur">Kannur</optiona>
                        <option value="Kottayam">Kottayam</option>
                        <option value="Palakkad">Palakkad</option>
                        <option value="Kochi">Kochi</option>
                        <option value="Malappuram">Malappuram</option>
                        <option value="Kasarkod">Kasarkod</option>
                        <option value="Pattanamthitta">Pattanamthitta</option>
                        <option value="Thalassery">Thalassery</option>
                        <option value="Kodungallur">Kodungallur</option>
                        <option value="Varkala">Varkala</option>
                        <option value="Neyyatinkaraa">Neyyatinkaraa</option>
                        <option value="Nilambur">Nilambur</option>
                        <option value="Tirur">Tirur</option>
                        <option value="Ponnani">Ponnani</option>
                        <option value="Koilandi">Koilandy</option>
                        <option value="Angamali">Angamali</option>
                        <option value="Thaliparamba">Thaliparamba</option>
                        <option value="Punalur">Punalur</option>    
                        </select>
                      <div class="invalid-tooltip">
                        Please select a city.
                      </div>
                      <div class="valid-tooltip">
                        
                      </div>
                    </div>
          <div class="form-group">
            
          <label for="validationCustom02" class="form-label">Postal Cod</label>
           <input type="number" 
                  class="form-control inputfd" 
                  id="validationCustom11" 
                  name="pcode"
                  min="6"
                  value="<?php echo($row['PostalCode']); ?>"
                  required>
           <div class="invalid-tooltip">
            Please provide a postal code.
            </div>
            <div class="valid-tooltip">
               
              </div>
          </div>
          <div class="info"><H3>Car information</H3></div>
          <div class="form-group">
            <label for="validationCustom03" class="form-label">MFG Year</label>
            <input type="date" 
                   class="form-control inputfd" 
                   id="validationCustom01" 
                   name="mfgyr" 
                   required>
            <div class="valid-tooltip">
              
            </div>
             <div class="invalid-tooltip">
               Please enter manufacture date.
             </div>
          </div>
          <div class="form-group">
            <label for="validationCustom04" class="form-label">Brand</label>
               <select class="form-select inputfd" 
                       id="validationCustom04" 
                       name="brand" 
                       required>
                          <option selected disabled value="">Choose...</option>
                         <option value="Suzuki">Suzuki</option>
                         <option value="Toyota">Toyota</option>
                         <option value="Hyundai">Hyundai</option>
                         <option value="Nissan">Nissan</option>
                         <option value="FIAT">FIAT</option>
                         <option value="BMW">BMW</option>
                         <option value="Audi">Audi</option>
                         <option value="RAM">RAM</option>
                         <option value="GMC">GMC</option>
                         <option value="Chevrolet">Chevrolet</option>
                         <option value="Volvo">Volvo</option>
                         <option value="Mercedes Benz">Mercedes Benz</option>
                         <option value="Porsche">Porsche</option>
                         <option value="Saab">Saab</option>
                         </select>
                        <div class="invalid-tooltip">
                          Please select a state.
                        </div>
                        <div class="valid-tooltip">
                          
                        </div>
          </div>
          <div class="form-group">
            <label for="validationCustom05" class="form-label">Model</label>
            <input type="text/number" 
                   class="form-control inputfd" 
                   id="validationCustom05" 
                   name="model"
                   required>
            <div class="valid-tooltip">
              
            </div>
             <div class="invalid-tooltip">
               Please enter the model number!.
             </div>
          </div>
          <div class="form-group">
            <label for="validationCustom06" class="form-label">KMs Driven</label>
              <input type="number" 
                     class="form-control inputfd" 
                     id="validationCustom06" 
                     name="kmd"
                     required>
                 <div class="valid-tooltip">
                   
                 </div>
              <div class="invalid-tooltip">
                Please don't skip this field!.
              </div>
          
          </div>
          <div class="form-group">
            <label for="validationCustom07" class="form-label">No. Of Owners</label>
            <input type="number" 
                   class="form-control inputfd" 
                   id="validationCustom07" 
                   name="nofown"
                   required>
            <div class="invalid-tooltip">
              Please don't skip this field!.
            </div>
            <div class="valid-tooltip">
              
            </div>
          </div>
          <div class="form-group">
          <label for="validationCustom08" class="form-label">Price Expected</label>
          <input type="number" 
                 class="form-control inputfd" 
                 id="validationCustom08" 
                 name="price"
                 required>
          <div class="invalid-tooltip">
            Please don't skip this field!.
          </div>
          <div class="valid-tooltip">
            
          </div>
          </div>
          
        <div class="info"><H3>Contact Details</H3></div>
          <div class="form-group">
          <label for="validationCustom09" class="form-label">Name</label>
          <input type="text" 
                 class="form-control inputfd" 
                 id="validationCustom09" 
                 name="name"
                 value="<?php echo($row['Name']); ?>"
                 required>
          <div class="invalid-tooltip">
            Please enter your name!.
          </div>
          <div class="valid-tooltip">
            
          </div>
          </div>
          <div class="form-group">
          <label for="validationCustom10" class="form-label">Mobile Number</label>
          <input type="number" 
                class="form-control inputfd" 
                id="validationCustom10" 
                name="mobnum"
                value="<?php echo($row['MobileNo.']); ?>"
                required>
          <div class="invalid-tooltip">
            Please provide a Mobile Number.
          </div>
          <div class="valid-tooltip">
            
          </div>
          </div>
         
          <div class="form-group">
            <label for="validationCustom11" class="form-label">Email </label>
            <input type="email" 
                   class="form-control inputfd" 
                   name="email" 
                   value="<?php echo($row['Email']); ?>"
                   id="validationCustom11" 
                   required>
            <div class="invalid-tooltip">
              Please provide your email address.
            </div>
            <div class="valid-tooltip">
              
            </div>
          </div>
          
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-tooltip">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <button class="btn btn-primary" name="next" type="submit">Next</button>
        </form>
  <?php } } ?>      
  
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
  <script src="sell.js">
  </script>
</body>

</html>