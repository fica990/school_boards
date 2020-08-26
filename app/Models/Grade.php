<?php


namespace App\Models;

use PDO;
use App\Support\DB;

class Grade
{
    /**
     * @var DB
     */
    private $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function studentGrades($studentId)
    {
        $stmt = $this->db->getConnection()->prepare("SELECT grade FROM grades WHERE student_id = :student_id");
        $stmt->bindParam(':student_id', $studentId);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    }
}