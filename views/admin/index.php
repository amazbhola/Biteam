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
            <?php include 'inc/sidemenu.php'; ?>    
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <!-- breadcrumb -->
            <?php include 'inc/breadcrumb.php'; ?>  
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
                                <td><a href="delete.php?id=<?= $product_item['id']?>"><button class="btn btn-outline-danger me-2" onclick="return confirm('Are You Sure Delete This Item')">Delete</button></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>













    <?php include 'inc/footer.php'?>