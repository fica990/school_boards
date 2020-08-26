<?php


namespace App\Models;

use PDO;
use App\Support\DB;

class Student
{
    /**
     * @var DB
     */
    private $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getStudentData($id)
    {
        $stmt = $this->db->getConnection()->prepare("SELECT s.*, b.name as board_name FROM students s JOIN boards b ON s.board_id = b.id WHERE s.id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}