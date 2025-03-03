<?php
require_once 'models/Product.php';
//require_once 'config/database.php';

try {
    $product = new Product();
    $products = $product->getProducts();
    //var_dump($products);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


require_once 'views/products/show.view.php';

?>