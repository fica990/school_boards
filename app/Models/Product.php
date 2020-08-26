<?php


namespace App\Models;

use App\Support\DB;
use PDO;

class Product
{
    /**
     * @var DB
     */
    private $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function allProducts(): array
    {
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}