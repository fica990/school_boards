<?php


namespace App\Models;

use PDO;
use App\Support\DB;

class Board
{
    /**
     * @var DB
     */
    private $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getName($id)
    {
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM boards WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}