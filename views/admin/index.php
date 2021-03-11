<?php
   include '../../vendor/autoload.php';
   use App\Controllers\ProductController;
    $pro_obj = new ProductController();
    $proData = $pro_obj->getAllproducts();
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
                    <H2>Product List</H2>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($proData as $product_item) {?>
                            <tr>
                                <th scope="row"></th>
                                <td><?php echo $product_item['Product_name']; ?></td>
                                <td><?php echo $product_item['product_price']; ?></td>
                                <td><?php echo $product_item['product_image']; ?></td>
                                <td><a href="edit.php?id=<?= $product_item['id'] ?>"><button class="btn btn-outline-success me-2">Edit</button></a></td>
                                <td><a href=""><button class="btn btn-outline-danger me-2">Delete</button></a></td>
                            </tr>
                        <?php } ?>
                    
                        </tbody>
                    </table>
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