<?php
require_once 'models/Product.php';
require_once 'controllers/Controller.php';
class ProductController extends Controller
{

    public function index()
    {
        $title = 'Products';
        $product = new Product();
        $products = $product->all();
        //dd($products);
        $this->render('products/show', ['products' => $products,'title'=>$title]);
    }

    public function show($id)
    {
        $product = new Product();
        $product = $product->find($id);
       // var_dump($product);
        require_once 'views/products/show.php';
    }


}