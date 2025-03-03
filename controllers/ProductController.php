<?php
require_once 'models/Product.php';
class ProductController
{

    public function index()
    {
      require_once 'views/products/show.view.php';
    }

    public function show($id)
    {
        $product = new Product();
        $product = $product->find($id);
       // var_dump($product);
        require_once 'views/products/show.view.php';
    }
}