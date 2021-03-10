<?php
   include '../vendor/autoload.php';
   use App\Controllers\ProductController;
    $pro_obj = new ProductController();
    $product_obj= $pro_obj->singledata($_GET['slug']);
    // echo "<pre>";
    // print_r($product_obj);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP APP | HOME PAGE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container mt-3">
        <h2>Single Product</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                        <img src="http://localhost/Biteam/day5/uploads/<?php echo $product_obj['product_image'];?>" class="w-25" alt="">
                            <div class="media-body ml-3">
                                <h3><?php echo $product_obj['Product_name'] ?></h3>
                                <h5>Product Price: <?php echo $product_obj['product_price'] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Product Description</h3>
                <p> <?php echo $product_obj['description'] ?></p>
                <div class="row">
                    <div class="col-6">
                        <p>Model: <p><?php echo $product_obj['Model'] ?></p>
                    </div>
                    <div class="col-6">
                        <p> SUK:<?php echo $product_obj['SKU'] ?></p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Brand : <?php echo $product_obj['brand'] ?></p>
                        <p>Quantity : <?php echo $product_obj['quantity'] ?></p>
                    </div>
                    <div class="col-6">
                        <p>Color : <?php echo $product_obj['color'] ?></p>
                        <p>Size : <?php echo $product_obj['product_size'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>