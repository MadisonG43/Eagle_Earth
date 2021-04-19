<?php
 session_start();
include "connecting.php";
if(isset($_POST['checkout'])){
$co = $_POST['cardOwner'];
$cn = $_POST['cardNumber'];
$cvv = $_POST['cvv'];
}
//Inserting values into the database


    $sql = "INSERT INTO cardinfo (cardOwner, cardNumber, cvv) VALUES ('$co','$cn', '$cvv')";
    mysqli_query($mySQLI, $sql);
    $run= mysqli_query($mySQLI, $sql);
    $mySQLI->close();
    header("Location: storee.php");
?>
