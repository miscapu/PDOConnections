<?php
// call autoload
require __DIR__."/vendor/autoload.php";



define( 'BASE_URL', 'http://localhost:8888/Projetos/Testes/2/' );
define( 'TITLE', 'Dashboard' );

// include dashboard view
include __DIR__."/app/Views/Pages/Dashboard.php";