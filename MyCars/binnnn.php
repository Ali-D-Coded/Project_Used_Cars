      
        <img class="card-img-top" src="../Car_images/<?php echo($_SESSION['image']);  ?>" alt="Card image cap">
            
             <div class="card-body">
         <h5 class="card-title"><?php echo($_SESSION['model']); ?></h5>
           <p class="card-text">
           <pre style="line-height:0;">
           <h6>City :<?php echo($_SESSION['city']); ?> </h6>
           <h6>Year :<?php echo($_SESSION['mfgyr']);  ?></h6>
        ;  <h6>Price: <?php echo($_SESSION['price']); ?> </h6>
           </pre>
             </p>
     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div><div class="bttn">
            <button type="submit" class="btn btn-primary btn-sm edit" onclick="document.location='../Editcar/editcar.php'"> Edit</button>
             <button type="submit" class="btn btn-primary btn-sm delete"> Delete</button></div>
                    </div>
                    </div>