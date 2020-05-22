<?
require_once "lib/php/functions.php";
require_once "parts/templates.php";

// $totalCartItems = getCartTotalItems();
// $totalCartPrice = getCartTotalPrice();

$cartItems = getCartItems();

// print_p($cartItems);

// print_p($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plant.store</title>
    <? include "parts/meta.php" ?>

    <link rel="stylesheet" href="css/style.css?v=001"/>



</head>
<body>
<div class="wrap">
    <? include "parts/navbar.php" ?>


    <h1 class="h1">Shopping Cart</h1>
    <div class="container">
        
        <div class="grid gap">
            <div class="col-xs-12 col-md-8">
                <div class="card flat">
                <?php
                echo array_reduce($cartItems,'cartListTemplate');
                ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="card flat">
                    <?= cartTotals() ?>
                    <div class="card-section">
                        <a href="product_checkout.php" class="form-button confirm">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>
    <div class="selbox">
      <h2 style="font-size:3.5vmin; font-family: 'Maven Pro', sans-serif; text-align: center; margin:auto; width:70%; color: #333333" >You May Also Like</h2>
       <br/>
        <br/>
      <ul class="clear">
        <li>
          <img src="images/7.png">
          <p class="bold">Aloe Vera </p>
        </li>
        <li>
          <img src="images/8.png">
          <p class="bold">Burro's Tail </p>
        </li>
        <li>
          <img src="images/9.png">
          <p class="bold">Cactus</p>
        </li>
      </ul>

      <div class="arr">
        <img src="images/icon/arrowleft.png" width="50">
        <img src="images/icon/arrowright.png" width="50">
      </div>

<?php include "parts/footer.php" ?>    
</div> 
</div>
</body>
</html>