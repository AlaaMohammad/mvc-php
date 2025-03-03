<?php
require_once 'config/Database.php';
class Product
{

    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance();
    }

    public function getProducts(){
        $products = $this->conn->query("SELECT * FROM products");
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        }
        return null;
    }

}