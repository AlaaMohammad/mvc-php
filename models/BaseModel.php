<?php

class BaseModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance();
    }

    public function getAll($tablename)
    {
        $stmt = $this->conn->query("SELECT * FROM $tablename");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}