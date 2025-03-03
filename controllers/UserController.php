<?php
require_once 'models/User.php';
class UserController extends BaseController
{

    public function index()
    {
        $users = new User();
        $users = $users->getUsers();
        $title = 'Users';
        require_once 'views/users/show.view.php';
        view('users.show', compact('users','title'));

    }


    public function show($id)
    {
        echo "<h1>Showing user with ID: {$id}</h1>";
    }
}