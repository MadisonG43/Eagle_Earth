<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">
<div class="topnav">
     <a href=storee.php>Back to Store</a>
   </div>
<body>
</div>
 
<?php
            
            include "connecting.php";
            // Setting value for total price
            $tp= 0;
            //Getting data from the customers & products tables
            $customerID=$_SESSION['customerID'];
            $sql="SELECT * FROM springsale WHERE customerID= '$customerID'";
            $result = mysqli_query($mySQLI, $sql);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
              while($row = mysqli_fetch_assoc($result)) { 
                $quantity = $row["quantity"];
                $pid = $row["productID"];
                $id = $row["saleID"];
                $sql = "SELECT * FROM products WHERE productID = '$pid'";
                $rslt = mysqli_query($mySQLI, $sql);
                $rw = mysqli_fetch_assoc($rslt);
               $image = $rw["image"];
               $productName = $rw["productName"];
               $price = $rw["price"];
                $show = "yes";
                //Putting quantities and prices together
                $total = $quantity * $price;
                //Displays cart items
                include "placements.php";

                }
                 }   else{
                echo "<br> <h2>Any items you add to your cart will appear here</h2> <br>";
            }

           
            
            
      
?>
 <h4> Total:<?php echo $tp;?></h4>
 <!--Billing Address form-->
 <center>
<div class="row">
<form action="billing.php" method="post">
            <h3>Billing Address</h3>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" required/>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" required/>
            <label for="adr">Address</label>
            <input type="text" name="adr"  required/>
            <label for="city">City</label>
            <input type="text" name="city" required/>
                <label for="state">State</label>
                <input type="text" name="state" required/>
                <label for="zip">Zipcode</label>
                <input type="text" name="zip" required/>
            </div>
          </div>
          <button type="submit" name="cont_checkout" class="btn"  >Continue to Checkout</button>
          </form>
          </center>

          
          <style>
          h2{
            font-size: 3vw;
          }

          form{
            font-size: 3vw;
          }
          </style>

          

       </body> 
</html>
