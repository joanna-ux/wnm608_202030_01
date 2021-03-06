<?
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";

    $data = getRows(makeConn(),
        "SELECT * FROM `products` 
        WHERE `id` = '{$_GET['id']}'"
        );
    $o = $data[0];
    $images = explode(",",$o->images);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store: Product Item</title>
    
    <?php include "parts/meta.php" ?>
      <link rel="stylesheet" href="css/style.css?v=001"/>

    <script src="js/item.js"></script>
</head>

<body>

<div class="wrap">
    <? include "parts/navbar.php" ?>
        <h1 class="h1">Product Item</h1>
        

    <div class="container">
        
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <div class="product-main">
                        <img src="img/store/<?= $o->main_image ?>" alt="">
                    </div>
                    <div class="product-thumbs">
                    <?=
                    array_reduce($images,function($r,$o){
                        return $r."<img src='img/store/$o'>";
                    })
                    ?>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-5">

                <form class="card soft flat" method="get" action="data/form_actions.php">

                    <div class="card-section">
<!-- style="color:#4c9851" -->
                        <h2 ><?= $o->title ?></h2>
                        <br/>

                        <div><?= $o->description ?></div>
                         <br/>
                          <br/>
                        <div class="product-description">
                            <div class="product-price">&dollar;<?= $o->price ?></div>
                        </div>
                    </div>

                    <div class="card-section">
                        <label class="form-label">Amount</label>
                        <select name="amount" class="form-input">
                            <!-- option*10>{$} -->
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>

                    <div class="card-section">
                        <input type="hidden" name="action" value="add-to-cart">
                        <input type="hidden" name="id" value="<?= $o->id ?>">
                        <input type="hidden" name="price" value="<?= $o->price ?>">
                        <input type="submit" class="form-button" value="Add To Cart">
                    </div>
                </form>

            </div>
        </div>
<!--  
        <br/>
        <div class="description">
            <h3>Description</h3>
            <div><?= $o->description ?></div> -->
        </div>
    </div>
</div>
<?php include "parts/footer.php" ?>     
</body>
</html>