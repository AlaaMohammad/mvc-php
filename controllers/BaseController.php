<?php

class BaseController
{
    public function view($view, $data = [])
    {
        require_once 'views/' . $view . '.view.php';
    }
}