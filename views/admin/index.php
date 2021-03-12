<?php
   include '../../vendor/autoload.php';
   use App\Controllers\ProductController;
    $pro_obj = new ProductController();
    $proData = $pro_obj->getAllproducts();
?>
<?php include 'inc/header.php'; ?>
<!-- header end -->
    <!-- Navbar -->
<?php include 'inc/navbar.php';?>
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