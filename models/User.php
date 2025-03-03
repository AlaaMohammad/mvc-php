<?php
require_once 'config/Database.php';

class User
{
    private $conn;
    public function __construct() {
        $this->conn = Database::getInstance();
    }
    public function getUsers(){
        $users = $this->conn->query("SELECT * FROM users");
        $users = $users->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

}