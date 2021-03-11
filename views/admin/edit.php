<?php

     include '../../vendor/autoload.php';
     use App\Controllers\ProductController;
     $pro_obj = new ProductController();
     $product_obj= $pro_obj->getProductByID($_GET['id']);
    //  ini_set('display_errors', 1);
    //  error_reporting(E_ALL);
   
   
    
     if (!empty($_POST)) {
        $insert = $pro_obj->saveData();
     }else {
         echo 'Empty Data';
     }

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP APP | DASHBOARD PAGE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-color fixed-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0">Brand</a>
        <input type="text" class="form-control form-control-primary w-100" placeholder="Search...">
        <ul class="navbar-nav mr-auto px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </nav>
    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 side-bg-color d-none d-md-block sidebar">
                <div class="left-sidebar">
                    <nav class="nav flex-column list-group">
                        <li class="nav-item bg-dark">
                            <a class="nav-link  text-white " href="#">
                                <ion-icon name="checkmark-done-outline"></ion-icon>
                                Post List
                            </a>
                            <a class="nav-link text-white active" href="#">
                                <ion-icon name="checkmark-done-outline"></ion-icon>
                                Post List
                            </a>
                            <a class="nav-link text-white " href="#">
                                <ion-icon name="checkmark-done-outline"></ion-icon>
                                Post List
                            </a>
                        </li>
                    </nav>
                </div>
            </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Create Post</a></li>
                    <li class="breadcrumb-item active">View post</li>
                </ol>
                <hr>
                <div class="container">
                    
                    <form method="post" action="" enctype="multipart/form-data">
                        <h3>Edit Products</h3>
                        <hr>
                        <?php if (isset($insert) && $insert) {?>
                        <div class="alert alert-success">
                            <p>Successfully Product Created</p>
                        </div>
                        <?php }?>
                        <?php if (isset($insert) && !$insert) {?>
                        <div class="alert alert-danger">
                            <p>Product Not Create</p>
                        </div>
                        <?php }?>
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="Product_name" id="" value="<?php echo $product_obj['Product_name'];  ?>" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description"  rows="3" ><?= $product_obj['description'];?></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group ml-3">
                                <label for="my-input">Product Price</label>
                                <input id="my-input" class="form-control" value="<?php echo $product_obj['product_price'];  ?>" type="number" name="product_price">
                            </div>
                            
                            <div class="form-group ml-4 px-4">
                                <label for="my-input">Brand</label>
                                <input id="my-input" class="form-control" value="<?php echo $product_obj['brand'];  ?>" type="text" name="brand">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group ml-3">
                                <label for="my-input">Product Color</label>
                                <input id="my-input" class="form-control" type="text"  name="color" value="<?php echo $product_obj['color'];  ?>">
                            </div>
                            
                            <div class="form-group ml-4 px-4">
                                <label for="my-input">Product Size</label>
                                <input id="my-input" class="form-control" type="text" name="product_size" value="<?php echo $product_obj['product_size'];  ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Product Image</label>
                            <input class="form-control form-control-lg" name="product_image" id="" type="file" value="<?php echo $product_obj['product_image'];  ?>" />
                        </div>
                        <button type="submit" class="btn btn-outline-success me-2">Submit</button>
                    </form>
                </div>
            </main>
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