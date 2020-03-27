<?php


namespace App\Models;

use App\Support\DB;
use PDO;

class Product extends DB
{
    public function __construct()
    {
        parent::__construct();
    }

    public function allProducts()
    {
        $stmt = $this->connection->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}