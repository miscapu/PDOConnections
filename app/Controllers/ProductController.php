<?php
namespace App\Controllers;

// require autoload
require __DIR__."/../../vendor/autoload.php";

use App\Models\Product;


class ProductController{

    /**
     * @param null $id
     * @param null $name
     * @return mixed
     */
    public function getProducts( $id = null, $name = null  )
    {
        $productModel   =   new Product( 'products' );
//        if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST'  ):
//            $id     =   $_POST[ 'id' ];
//            $name   =   $_POST[ 'name' ];
//            endif;
        return $productModel->selectProducts( $id, $name  );
    }
}

// debug
//$instanceProductController  =   new ProductController();
//echo "<pre>";
//print_r( $instanceProductController->getProducts( 1, 'Miguel' ) );
//echo "</pre>";