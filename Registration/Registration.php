<?php include "../config.php";?>

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
  
  <link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.1.0/css/font-awesome.min.css" />
  
  <!-- Custom Styles -->
  <link rel="stylesheet" href="reg-style.css">
</head>

<body>
  <div class="head">
    <h1>Imperial Cars</h1>
  </div>
  
  <div class="container">
    <div class="Box">
      <div class="col-md-6 regicard">
        <div>
          
        </div>
        <h2>Register Now</h2>
 <?php if (isset($_GET['error'])) { ?>
	<p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>
  <?php } ?>
        
  <?php if (isset($_GET['success'])) { ?>
   <p class="success alert alert-success"><?php echo $_GET['success']; ?></p>
       <?php } ?>
        
        <form action="regval.php" class="row g-3 needs-validation" method="POST" id="myform" name="myform" novalidate>
          <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control inputfd" id="name" name="name" required>
            
             <div class="invalid-tooltip namerror">
               Please enter name.
             </div>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control inputfd" id="email" name="email"  required>
            
            
             <div class="invalid-tooltip">
               Please enter email.
             </div>
          </div>
          <div class="form-group">
            <label for="emailconf" class="form-label">Confirm Email</label>
              <input type="email" class="form-control inputfd" id="emailconf" name="emailconf" required>
                 
              <div class="invalid-tooltip">
                Please confirm Email.
              </div>
          
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control inputfd" id="password" name="password" required>
            <div class="invalid-tooltip">
              Please provide a valid password.
            </div>
            
          </div>
          <div class="form-group">
          <label for="passconf" class="form-label">Confirm Password</label>
          <input type="password" class="form-control inputfd" id="passconf" name="passconf" required>
          <div class="invalid-tooltip">
            Please confirm password.
          </div>
          
          </div>
          <div class="form-group">
          <label for="mnum" class="form-label">Mobile Number</label>
          <input type="number" class="form-control inputfd" id="mnum" name="mobnum" required>
          <div class="invalid-tooltip">
            Please provide a valid Mobile Number.
          </div>
          
          </div>
          <div class="form-group">
          <label for="phnum" class="form-label">Phone Number</label>
          <input type="number" class="form-control inputfd" id="phnum" name="phnum" required>
          <div class="invalid-tooltip">
            Please provide a valid Phone Number.
          </div>
          
          </div>
          <div class="form-group">
            <label for="state" class="form-label">State</label>
            <select class="form-select inputfd" id="state" name="state" required>
              <option selected disabled value="">Choose...</option>
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
            
          </div>
          <div class="form-group">
            <label for="city" class="form-label">City</label>
            <select class="form-select inputfd" id="city" name="city" required>
              <option selected disabled value="">Choose...</option>
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
            
          </div>
          <div class="form-group">
            <label for="saddress" class="form-label">Street Address</label>
            <input type="text" class="form-control inputfd" id="saddress" name="streetaddress" required>
            <div class="invalid-tooltip">
              Please provide a street address.
            </div>
            
          </div>
          <div class="form-group">
            <label for="pcode" class="form-label">Postal Code</label>
            <input type="number" class="form-control inputfd" id="pcode" name="pcode" required>
            <div class="invalid-tooltip ">
              Please provide a postal code.
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
          <button class="btn btn-primary" type="submit" name="reg_user">Register</button>
        </form>
        <span class="gotolog">
          <p>Already Have an account?</p> <a href="../Login/Login.php">Login</a>
        </span>
      </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

  <script src="regval.js"></script>
</body>

</html>


	