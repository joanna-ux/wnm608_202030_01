<?
include_once "../lib/php/functions.php";

$empty_product = (object)[
    "title" => "Peace Lily",
    "price" => "32",
    "category" => "Bonsai",
    "description" => "This is Peace Lily",
    "main_image" => "11.png",
    "images" => "11.png",
    "amount" => 23
];


// logic actions


try {
    // print_p([$_GET, $_POST]);
    $conn = makePDOConn();
    switch(@$_GET['action']) {
        case "update":
        $statement = $conn->prepare("UPDATE
            `products`
            SET
            `title` =?,
            `price` = ?,
            `category`=?,
            `description`=?,
            `main_image`=?,
            `images`=?,
            `amount`=?,
            `date_modify`=NOW()
            WHERE `id`=?
            ");
        $statement->execute([
            $_POST['title'],
            $_POST['price'],
            $_POST['category'],
            $_POST['description'],
            $_POST['main_image'],
            $_POST['images'],
            $_POST['amount'],
            $_GET['id']
        ]);

        header("location:{$_SERVER['PHP_SELF']}");
        break;

        case "create":

        $statement = $conn->prepare("INSERT INTO
            `products`
            (
                `title`,
                `price`,
                `category`,
                `description`,
                `main_image`,
                `images`,
                `amount`,
                `date_create`,
                `date_modify`
            )
            VALUES (?,?,?,?,?,?,?,NOW(),NOW())
            ");
        $statement->execute([
            $_POST['title'],
            $_POST['price'],
            $_POST['category'],
            $_POST['description'],
            $_POST['main_image'],
            $_POST['images'],
            $_POST['amount']
        ]);
        $id = $conn->lastInsertId();

        header("location:{$_SERVER['PHP_SELF']}");
        break;

        case "delete":

        $statement = $conn->prepare("DELETE FROM `products` WHERE `id`=?");
        $statement->execute([$_GET['id']]);

        header("location:{$_SERVER['PHP_SELF']}");

        default: break;
    }
} catch(PDOException $e) {
    die($e->getMessage());
}



/* TEMPLATES */

function makeListItemTemplate($carry,$item) {
    return $carry.<<<HTML
<div class='item-list display-flex'>
    <div class="flex-none" style="width:6em;">
        <div class="image-square">
            <img src="img/store/$item->main_image">
        </div>
    </div>
    <div class="flex-stretch">
        <div><strong>$item->title</strong></div>
        <div>$item->category</div>
    </div>
    <div class="flex-none">
        <div>[<a href='admin/?id=$item->id'>edit</a>]</div>
        <!-- <div>[<a href="product_item.php?id=$item->id">visit</a>]</div> -->
    </div>
</div>
HTML;
}

function makeProductForm($o) {
    $id = $_GET['id'];
    $addoredit = $id=='new' ? 'Add' : 'Edit';
    $createorupdate = $id=='new' ? 'create' : 'update';

echo <<<HTML
<div class="display-flex">
    <div class="flex-stretch">
        <a href="admin/">Back</a>
    </div>
    <div class="flex-none">
        [<a href="admin/?id=$id&action=delete">Delete</a>]
    </div>
</div>
<form class="card-basic" method="post" action="admin/?id=$id&action=$createorupdate">
    <h2>$addoredit Product</h2>
    <div class="form-control">
        <label class="form-label" for="title">Title</label>
        <input class="form-input" id="title" name="title" type="text" value="$o->title">
    </div>
    <div class="form-control">
        <label class="form-label" for="price">Price</label>
        <input class="form-input" id="price" name="price" type="number" value="$o->price" min="1" max="1000" step="0.01">
    </div>
    <div class="form-control">
        <label class="form-label" for="category">Category</label>
        <input class="form-input" id="category" name="category" type="text" value="$o->category">
    </div>
    <div class="form-control">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-input" id="description" name="description">$o->description</textarea>
    </div>
    <div class="form-control">
        <label class="form-label" for="main_image">Main Image</label>
        <input class="form-input" id="main_image" name="main_image" type="text" value="$o->main_image">
    </div>
    <div class="form-control">
        <label class="form-label" for="images">Other Images</label>
        <input class="form-input" id="images" name="images" type="text" value="$o->images">
    </div>
    <div class="form-control">
        <label class="form-label" for="amount">amount</label>
        <input class="form-input" id="amount" name="amount" type="text" value="$o->amount">
    </div>
    <div class="form-control">
        <input class="form-button" type="submit" value="Confirm">
    </div>
</form>
HTML;

}



/* layout */


$website_url = "/aau/wnm608/joanna.li/product_list";
$root_url = "http://".$_SERVER['HTTP_HOST'].$website_url;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Admin</title>
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="../lib/css/styleguide.css">
    <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../css/storetheme.css">
    <link rel="stylesheet" href="../css/style.css?v=001"/>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../lib/js/functions.js"></script>
    <script src="../js/templates.js"></script>


    <? include "../parts/meta.php";?>
</head>
<body>

<header class="header navbar">
    <div class="container display-flex">
        <div class="flex-stretch pad">
            <a href="home.php"><img src="images/icon/logo.png" class="logo"></a>
        </div>
        <nav class="nav menus">
            <ul class="display-flex">
                <li><a href="product_list.php">Store</a></li>
                <li><a href="admin/">List</a></li>
                <li><a href="admin/?id=new">Add New Product</a></li>
                <!--<li><a href="admin/index.php">Admin</a></li>-->
            </ul>
        </nav>
    </div>
</header>

    <div class="container">
        <div class="cardcard">
            <?
                if(isset($_GET['id'])) {
                    if($_GET['id']=="new") {
                        makeProductForm($empty_product);
                    } else {
                        $data = getData("SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'");
                        makeProductForm($data[0]);
                    }
                } else {
                    ?>
                    <h1 class="h1">Product List</h1>


                    <div class="itemlist">
                        <? 
                        $data = getData("SELECT * FROM `products`");
                        echo array_reduce($data,'makeListItemTemplate');
                        ?>

                    </div>
            <?
                }

            ?>

        </div>
    </div>
</body>
</html>