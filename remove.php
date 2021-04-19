  
<?php
//Removes selected items from cart
    include "connecting.php";
    $id = $_GET["id"];
    $sql = "DELETE FROM springsale WHERE saleID = '$id'";
    mysqli_query($mySQLI, $sql);
    header("Location: cart.php");
?>
