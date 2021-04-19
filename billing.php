<?php
 //Adding values to the billinginfo table
 session_start();
 $firstname = "";
 $lastname = "";
 $adr = "";
 $city="";
 $state = "";
 $zip="";
 $bid="";
         
include "connecting.php";
if(isset($_POST['cont_checkout'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$adr = $_POST['adr'];
$city= $_POST['city'];
$state = $_POST['state'];
$zip= $_POST['zip'];
}

    $sql = "INSERT INTO billinginfo (billingID, firstName, lastName, address, city, state, zipcode) VALUES ( '$bid','$firstname', '$lastname', '$adr', '$city', '$state', '$zip')";
    $run= mysqli_query($mySQLI, $sql);
  

 


    $mySQLI->close();
    header("Location: card.php");
?>
