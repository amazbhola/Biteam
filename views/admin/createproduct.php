<?php

     include '../../vendor/autoload.php';
     use App\Controllers\ProductController;
     $pro_obj = new ProductController();
    //  ini_set('display_errors', 1);
    //  error_reporting(E_ALL);
    
     if (!empty($_POST)) {
        $insert = $pro_obj->saveData();
     }else {
         echo 'Empty Data';
     }
    
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
                    
                    <form method="post" action="" enctype="multipart/form-data">
                        <h3>Create Product</h3>
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
                            <input type="text" name="Product_name" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group ml-3">
                                <label for="my-input">Product Price</label>
                                <input id="my-input" class="form-control" type="number" name="product_price">
                            </div>
                            
                            <div class="form-group ml-4 px-4">
                                <label for="my-input">Brand</label>
                                <input id="my-input" class="form-control" type="text" name="brand">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group ml-3">
                                <label for="my-input">Product Color</label>
                                <input id="my-input" class="form-control" type="text" name="color">
                            </div>
                            
                            <div class="form-group ml-4 px-4">
                                <label for="my-input">Product Size</label>
                                <input id="my-input" class="form-control" type="text" name="product_size">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Product Image</label>
                            <input class="form-control form-control-lg" name="product_image" id="" type="file" />
                        </div>
                        <button type="submit" class="btn btn-outline-success me-2">Submit</button>
                    </form>
                </div>
            </main>
        </div>
    </div>











    <?php include 'inc/footer.php'?>