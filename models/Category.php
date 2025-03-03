<?php

class Category extends BaseModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance();
    }


}