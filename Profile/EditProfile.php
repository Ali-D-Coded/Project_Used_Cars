<?php include('profval.php'); ?>
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
  <link rel="stylesheet" href="prof.css">
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
      <a class="nav-link navia" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="false" onclick="document.location= '../Sell/sellcar.php';">Sell Your Car</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navia" id="enq-tab" data-bs-toggle="tab" data-bs-target="#enq" type="button" role="tab" aria-controls="enq" aria-selected="false" onclick="document.location= '../Enquiry/Enquiry.php';">Enquiry</a>
    </li>
     <li class="nav-item">
       <a class="nav-link active navia" id="editprof-tab" data-bs-toggle="tab" data-bs-target="#editpro" type="button" role="tab" aria-controls="editprof" aria-selected="false" href="#">Edit Profile</a>
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
        <div>
           <h5 class="display-6 mb-4 font-weight-bold text-white">Edit Your Profile</h5>
        </div>
         <?php if (isset($_GET['error'])) { ?>
        	<p class="error alert alert-danger"><?php echo $_GET['error']; ?>
              	</p>
           <?php } ?>
                               
           <?php if (isset($_GET['success'])) { ?>
             <p class="success alert alert-success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
          <!--___________________________________________-->
          
              <?php
               
              
                $show=getall();
                if (isset($show)) {
                  while($row=mysqli_fetch_array($show)){
                  
        
                ?>
          
        
        <form class="row g-3 needs-validation" method="POST" novalidate action="profval.php">
          <div class="form-group">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" 
                   class="form-control inputfd" 
                   id="validationCustom01" 
                   name="name" 
                   value="<?php echo($row['Name']); ?>">
            <div class="valid-tooltip">
              
            </div>
             <div class="invalid-tooltip">
               Please enter name.
             </div>
          </div>
          
          
          <div class="form-group">
          <label for="validationCustom06" class="form-label">Mobile Number</label>
          <input type="number" 
                 class="form-control inputfd" 
                 id="validationCustom06" 
                 name="mobnum" 
                 value="<?php echo($row['MobileNo.']); ?>"
                 >
          <div class="invalid-tooltip">
            Please provide a valid Mobile Number.
          </div>
          <div class="valid-tooltip">
            
          </div>
          </div>
          
          <div class="form-group">
          <label for="validationCustom07" class="form-label">Phone Number</label>
          <input type="number" 
                 class="form-control inputfd" 
                 id="validationCustom07" 
                 name="phnum"
                 value="<?php echo($row['PhoneNo.']); ?>"
                 >
          <div class="invalid-tooltip">
            Please provide a valid Phone Number.
          </div>
          <div class="valid-tooltip">
            
          </div>
          </div>
          
          <div class="form-group">
            <label for="validationCustom08" class="form-label">State</label>
            <select class="form-select inputfd" id="validationCustom08" name="state" >
              <option selected value="<?php echo($row['State']); ?>"><?php echo($row['State']); ?></option>
             <option value="Andhra Pradesh">Andhra Pradesh</option>
             <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
             <option value="Arunachal Pradesh">Arunachal Pradesh</option>
             <option value="Assam">Assam</option>
             <option value="Bihar">Bihar</option>
             <option value="Chandigarh">Chandigarh</option>
             <option value="Chhattisgarh">Chhattisgarh</option>
             <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
             <option value="Daman and Diu">Daman and Diu</option>
             <option value="Delhi">Delhi</option>
             <option value="Lakshadweep">Lakshadweep</option>
             <option value="Puducherry">Puducherry</option>
             <option value="Goa">Goa</option>
             <option value="Gujarat">Gujarat</option>
             <option value="Haryana">Haryana</option>
             <option value="Himachal Pradesh">Himachal Pradesh</option>
             <option value="Jammu and Kashmir">Jammu and Kashmir</option>
             <option value="Jharkhand">Jharkhand</option>
             <option value="Karnataka">Karnataka</option>
             <option value="Kerala">Kerala</option>
             <option value="Madhya Pradesh">Madhya Pradesh</option>
             <option value="Maharashtra">Maharashtra</option>
             <option value="Manipur">Manipur</option>
             <option value="Meghalaya">Meghalaya</option>
             <option value="Mizoram">Mizoram</option>
             <option value="Nagaland">Nagaland</option>
             <option value="Odisha">Odisha</option>
             <option value="Punjab">Punjab</option>
             <option value="Rajasthan">Rajasthan</option>
             <option value="Sikkim">Sikkim</option>
             <option value="Tamil Nadu">Tamil Nadu</option>
             <option value="Telangana">Telangana</option>
             <option value="Tripura">Tripura</option>
             <option value="Uttar Pradesh">Uttar Pradesh</option>
             <option value="Uttarakhand">Uttarakhand</option>
             <option value="West Bengal">West Bengal</option>
            </select>
            <div class="invalid-tooltip">
              Please select a state.
            </div>
            <div class="valid-tooltip">
              
            </div>
          </div>
          <div class="form-group">
            <label for="validationCustom09" class="form-label">City</label>
            <select class="form-select inputfd" id="validationCustom09" name="city">
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
            <label for="validationCustom10" class="form-label">Street Address</label>
            <input type="text" 
                   class="form-control inputfd" 
                   id="validationCustom10" 
                   name="stadd"
                   value="<?php echo($row['Street_Address']); ?>"
                   >
            <div class="invalid-tooltip">
              Please provide a street address.
            </div>
            <div class="valid-tooltip">
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="validationCustom11" class="form-label">Postal Cod</label>
            <input type="number" 
                   class="form-control inputfd" 
                   id="validationCustom11" 
                   name="pcode" 
                   value="<?php echo($row['PostalCode']); ?>"
                   >
            <div class="invalid-tooltip">
              Please provide a postal code.
            </div>
            <div class="valid-tooltip">
              
            </div>
          </div>
       <div class="form-group">
       <label for="validationCustom04" class="form-label">Password</label>
      <div class="form-check">
  <input type="radio" class="form-check-input" id="passcheck" name="radiopass" onclick="ShowHidePass()" >
    <input type="password" 
           style="display:none;" 
           class="form-control" 
           id="password" 
           name="password" 
           value="<?php echo($row['Password']); ?>"
           >
                     
    <div class="invalid-tooltip">
     Please provide a valid password.
       </div>
  <div class="valid-tooltip"></div>
                    </div>
                    </div>
                    
                    
<div class="form-group">
            <label for="email" class="form-label">Email</label>
            <div class="form-check">
         <input type="radio" class="form-check-input" id="emailcheck" name="radioemail" onclick="ShowHideEmail()" >
        <input type="email" 
               style="display:none;"
               class="form-control inputfd" 
               id="email" 
               name="email" 
               value="<?php echo($row['Email']); ?>"
               >
            
            <div class="invalid-tooltip">
              Please provide a valid email.
            </div>
            <div class="valid-tooltip">
              
            </div>
          </div>
          </div>
    
          <button class="btn btn-primary save" type="submit" name="save">Save Changes</button>
        </form>
    <?php }} ?>
        
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
 
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="edtprof.js">
  </script>
</body>

</html>