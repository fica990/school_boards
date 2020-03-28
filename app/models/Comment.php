<?php


namespace App\Models;

use App\Support\DB;
use PDO;

class Comment
{
    /**
     * @var DB
     */
    private $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function allComments($activeOnly = false): array
    {
        if ($activeOnly) {
            $stmt = $this->db->getConnection()->prepare("SELECT * FROM comments WHERE status = 1 ORDER BY date_created DESC");
        } else {
            $stmt = $this->db->getConnection()->prepare("SELECT * FROM comments ORDER BY date_created DESC");
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveComment(array $data): bool
    {
        $stmt = $this->db->getConnection()->prepare("INSERT INTO comments (title, email, text) VALUES (:title, :email, :text)");

        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':text', $data['text']);

        return $stmt->execute();
    }

    public function toggleComment(array $data): bool
    {
        $stmt = $this->db->getConnection()->prepare("UPDATE comments SET status = :status WHERE id = :comment_id");

        $stmt->bindParam(':status', $data['value']);
        $stmt->bindParam(':comment_id', $data['comment_id']);

        return $stmt->execute();
    }
}