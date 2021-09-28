   
   
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
     <link rel="stylesheet" href="../Login/login-style.css">
   </head>
   
   <body>
   
   <div class="col-md-6 searchcard" >
              
              <h2>Search</h2>
   <form action="mockval.php" class="row g-3 needs-validation" method="post" novalidate>
        <div class="form-group">
     <label for="valifationCustomSelect"> Model</label>
      <input type="text" class="form-control" name="model">        
  <!--<select class="form-select inputfd" id="validationCustomSelect" required>
  <option selected disabled value="">Select Preferred Model </option>
  <option value="1-Series-bmw">1 Series BMW</option>
  <option value="100-audi">100 AUDI</option>
  <option value="124-S-fiat">124 Spider FIAT</option>
  <option value="1500-ccc-ram">1500 Classic Crew Crab Ram</option>
  <option value="1500-cc-gmc">1500 Club Coupe GMC</option>
  <option value="1500-exc-chev">1500 Extended Cab Cheverolet</option>
  <option value="200SX-nissan">200SX Nissan</option>
  <option value="240-volvo">240 Volvo</option>
  <option value="300CE-benz">300CE Mercides Benz</option>
  <option value="911-porsche">911 Porsche</option>
</select>
  
  <div class="invalid-tooltip">This field cannot be empty</div/>
  <div class="valid-tooltip"></div>-->

                </div>
                <div class="form-group">
                  <label>Year</label>
                   <input type="date" name="date" class="form-control" required>
                   <div class="valid-tooltip"></div>
                   <div class="invalid-tooltip">This field cannot be empty</div/>
                </div>
                 <div class="form-group">
                      <label for="validationCustom09" class="form-label">City</label>
     <select class="form-select inputfd" id="validationCustom09" name="city" required>
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
                                <div class="valid-tooltip">
                                  
                                </div>
                              </div>
                
              </form>
              </div>
              
              
              
              
  
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

  <script src="loginval.js">
    
  </script>
</body>
</html>