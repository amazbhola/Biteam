<?php
    include '../vendor/autoload.php';
    use App\Controllers\ProductController;
    $pro_obj = new ProductController();
    $product_obj= $pro_obj->getAllproducts();
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
    <link rel="stylesheet" href="css/style.css">
    <style>
        .text-none {
            text-decoration: none !important;

        }

        a {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>Product List</h2>
        <hr>
        <div class="row">
            <?php foreach ($product_obj as $product) { ?>
            <div class="col-md-6 mt-3">
                <a href="product.php?slug=<?php echo $product['slug'];?>" class="text-none">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                               
                                <img src="http://localhost/Biteam/day5/uploads/<?php echo $product['product_image'];?>" class="h-25 w-25 p-3" alt="">
                                
                                <div class="media-body ml-3">
                                    <h2><?php echo $product['Product_name'];?></h2>
                                    <p><?php echo $product['product_price'];?></p>
                                    <h5><?php echo $product['description'];?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php }?>
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