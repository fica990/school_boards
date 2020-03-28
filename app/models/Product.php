<?php


namespace App\Models;

use App\Support\DB;
use PDO;

class Product
{
    /**
     * @var $connection DB
     */
    private $connection;

    public function __construct()
    {
        $this->connection = DB::getInstance();
    }

    public function allProducts()
    {
        $stmt = $this->connection->getConnection()->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}