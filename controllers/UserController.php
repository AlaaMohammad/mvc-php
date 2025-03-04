<?php
require_once 'models/User.php';
require_once 'controllers/Controller.php';
class UserController extends Controller
{

    public function index()
    {
        $users = new User();
        $users = $users->getUsers();
        $title = 'Users';
        $this->render('product.index', [
            'products' => $products,
            'pageTitle' => 'All Products'
        ]);

    }


    public function show($id)
    {
        echo "<h1>Showing user with ID: {$id}</h1>";
    }
    public function create()
    {
        $this->render('users/create', ['title' => 'Create Product']);
    }
}