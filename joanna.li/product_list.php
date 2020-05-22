<?
    require_once "lib/php/functions.php";
    require_once "parts/templates.php";

    $pagelimit = 12;
    $pageoffset = isset($_GET['page'])?$_GET['page']:0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shop</title>
    
    <?php include "parts/meta.php" ?>

    <link rel="stylesheet" href="css/style.css?v=001"/>
    
    <style type="text/css">
        .sort{
            border: 1px solid #ccc;
            padding: 7px 13px;
            border-radius: 10px;
        }
        .list-search{
            float: right;
        }
    </style>

</head>
<body>
<div class="wrap">
    <? include "parts/navbar.php" ?>

    <h1 class="h1">Create your own garden at home</h1>
    <div class="container pad push-down">
        <div class="grid gap">
            <div class="col-xs-12">
                <div class="card-basic card-flat">
                   <!--  <div class="card-section">
                        <div>Filter</div>
                    </div>
                    <div class="card-section">
                        <div>Sort</div>
                    </div> -->
                    <div class="card-section">
                        <select class="sort">
                            <option value="1">Newest</option>
                            <option value="2">Oldest</option>
                            <option value="3">Most Expensive</option>
                            <option value="4">Least Expensive</option>
                        </select>
                         <form class="push-down list-search">
                            <input type="search" class="form-input hotdog" name="search" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-9 col-lg-10">
           
            <div class="grid gap xs-small md-medium product-list">
                
            </div>
        </div>
    </div>

</div>
<?php include "parts/footer.php" ?>    
    <script src="js/list.js"></script>
</body>
</html>