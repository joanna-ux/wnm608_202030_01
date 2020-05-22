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
    <title>Check Out</title>
    <? include "parts/meta.php" ?>

    <link rel="stylesheet" href="css/style.css?v=001"/>



</head>

<body>

<div class="wrap">
    <? include "parts/navbar.php" ?>

    <div class="container">


            <h1 class="h1">Product Checkout</h1>
            <div class="card soft">

        <div class="section2check row"> 
            <div class="left-col_check col-xs-12 col-lg-6">
                <div class="checkout-info">

            <form>
                        <h2>Shipping Info</h2>
                        <input type="text" placeholder="Joanna">
                        <input type="text" placeholder="Street Address">
                        <input type="text" placeholder="City">
                        <input type="text" placeholder="Zip code">
                        <input type="text" placeholder="Phone number">
            <br/>
            <br/>
                        <h2>Payment Info</h2>
                        <input type="text" placeholder="Card number">
                        <input type="text" placeholder="Name on Card">
                        <input type="text" placeholder="Expire Date (MM/YY)">
                        <input type="text" placeholder="CVV">
            </form>

            <br/>



         </div> 
     </div>
 </div>
             <div>
                <a class="form-button" href="product_confirmation.php">Confirm Purchase</a>
            </div>

            <br/>
            <br/>

 </div>



        </div>  


    </div>  


</div>
    <?php include "parts/footer.php" ?> 
</body>
</html>