<?php

// require_once 'Product.php';
// require_once 'CDMusic.php';
// require_once 'CDCabinet.php';

spl_autoload_register(function( $class )
{
   require_once __DIR__ . '/Produk/' . $class . '.php';
});