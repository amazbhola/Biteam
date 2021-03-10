<?php
namespace App\Controllers;
use App\Models\ProductModel;
    ini_set('display_errors', 1);
     error_reporting(E_ALL);
class ProductController{
    public function getAllproducts()
    {
        $databasedata = new ProductModel;
        $selectdata = $databasedata->selectdata("SELECT * FROM `products`" );
        return $selectdata;
    }
    public function singledata($slug)
    {
        $databasedata = new ProductModel;
        $selectdata = $databasedata->selectdata("SELECT * FROM `products` WHERE slug='$slug'" );
        return $selectdata[0];
    }
    public function saveData()
    {
        $currentDir = __DIR__.'/../../uploads'; 
        
        $fileName = $_FILES['product_image']['name'];
        $fileName = date('ymdhi').'_'.$fileName;
        $fileTemPath = $_FILES['product_image']['tmp_name'];
        move_uploaded_file($fileTemPath,$currentDir.'/'.$fileName);
        
        $productData = $_POST;
        $productName = $productData['Product_name'];
        $productDescription = $productData['description'];
        $productPrice = $productData['product_price'];
        $productBrand = $productData['brand'];
        $productColor = $productData['color'];
        $productslug = date('d-m').'_'.$productName;
        $insertQuery = "INSERT INTO `products`( `Product_name`, `product_price`, `slug`, `description`,`brand`,`product_image`,`color` ) 
        VALUES( '".$productName."',
                $productPrice,
                '".$productslug."',
                '".$productDescription."',
                '".$productBrand."',
                '".$fileName."',
                '".$productColor."')";
        
        
        $datasave = new ProductModel;
        $result = $datasave->insertdata($insertQuery);
        return $result;
        //print_r($result); exit;
    }
}