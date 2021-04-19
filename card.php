<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">
<div class="topnav">
     <a href=storee.php>Back to Store</a>
   </div>
<body>
</div>
 
         
         
          <style>
          h2{
            font-size: 3vw;
          }
          </style>
<!-- CardInfo form-->
          <div class="col-50">
            <h3>Payment</h3>
            </div>
            <?php
            $co = "";
            $cn = "";
            $cvv = "";
            ?>
            <form action="cardinfo.php" method="post">
            <label for="cardOwner">Name on Card</label>
            <input type="text" name="cardOwner"   placeholder= "<?php echo "DO NOT USE REAL INFO"?>" />
            <label for="cardNumber">Credit card number</label>
            <input type="text" name="cardNumber" placeholder= "<?php echo "DO NOT USE REAL INFO"?>" />
            <label for="cardExpiration">Exp</label>
            <input type="text" name="cardExpiration"  placeholder= "<?php echo "DO NOT USE REAL INFO"?>" />

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv"  placeholder= "<?php echo "DO NOT USE REAL INFO"?>" />
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <button type="submit" name="checkout" class="btn"  >Checkout</button>
      </form>
    </div>
  </div>
  </div>
 

       </body> 
</html>
