<?php
namespace App\Controllers;

use App\Models\my_Database;
use App\Models\ProductModel;
    ini_set('display_errors', 1);
     error_reporting(E_ALL);
    // function for get and view Product from Database ===================================================
class ProductController{
    public function getAllproducts()
    {
        $databasedata = new ProductModel;
        $selectdata = $databasedata->selectdata("SELECT * FROM `products`" );
        return $selectdata;
    }
    // function for Single Products======================================================================
    public function singledata($slug)
    {
        $databasedata = new ProductModel;
        $selectdata = $databasedata->selectdata("SELECT * FROM `products` WHERE slug='$slug'" );
        return $selectdata[0];
    }
    // function for Edit Page  Products By ID ======================================================================
    public function getProductByID($id)
    {
        $productById = new ProductModel;
        $productDataById = $productById->selectdata("SELECT * FROM `products` WHERE id=$id" );
        return $productDataById[0];
    }
    // function for data delete By ID ===========================================================================
    public function DeleteProduct($id)
    {
        $productById = new ProductModel;
        $DeleteQuery = "DELETE FROM `products` WHERE id=$id";
        $result = $productById->deletedata( $DeleteQuery);
        if ($result) {
            header('location:index.php');
        }
       
    }
   
    // function for Data Entry into Database with Image upload=============================================
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
    public function UpdateData($id)
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

        $UpdateQuery = "UPDATE `products` SET`Product_name`='".$productName."', `product_price`=$productPrice, `slug`='".$productslug."', `description`='".$productDescription."',`brand`='".$productBrand."',`product_image`='".$fileName."',`color`='".$productColor."' WHERE id=$id"; 
        // print_r($UpdateQuery); exit;
        $datasave = new ProductModel;
        $result = $datasave->updateData($UpdateQuery);
         return $result;
        // print_r($result); exit;
    }


}