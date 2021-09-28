<?php
require('../config.php');

session_start();

$q="SELECT sellerid FROM `Enquiries` WHERE car_id=" ;



function getall(){
  include "../config.php";
$current_user=$_SESSION['uid'];
//$seller=$_SESSION['sellerid'];

$sql="SELECT e.Name,e.`MobileNo.`,e.messages,s.Model FROM `Enquiries` e INNER JOIN `sellcar` s ON e.car_id=s.car_id WHERE e.sellerid='$current_user' ;";


$result=mysqli_query($dbconnect,$sql);
if (mysqli_num_rows($result)>0) {
   return $result;
}

}
function showdata($name,$num,$model,$msg)
{
  
  $element="
          <div class='enquiry'>
                   <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                     <strong>$name &nbsp&nbsp $num &nbsp&nbsp$model</strong><br>
                     
                    $msg
                     
                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                   </div>
                 </div>
                 
    ";

  
  echo($element);
}

?>