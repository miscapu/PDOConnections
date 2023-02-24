<?php
// call autoload
require __DIR__."/vendor/autoload.php";

use App\Controllers\ProductController;

$instanceProductController  =   new ProductController();

//if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ):

    $products   =   $instanceProductController->getProducts( 1, 'Miguel' );





define( 'BASE_URL', 'http://localhost:8888/Projetos/Testes/2/' );
define( 'TITLE', 'Dashboard' );

// include dashboard view
include __DIR__."/app/Views/Pages/Dashboard.php";