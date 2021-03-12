<?php

 
include '../../vendor/autoload.php';
use App\Controllers\ProductController;
 $pro_obj = new ProductController();

$pro_obj->DeleteProduct($_GET['id']);
