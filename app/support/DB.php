<?php


namespace App\Support;

use PDO;
use PDOException;

class DB
{
    protected $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        if (!isset($this->connection)) {
            $conn = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST;

            try {
                $this->connection = new PDO($conn, DB_USER, DB_PASS);
            } catch (PDOException $e) {
                echo $e->getMessage();
                die;
            }
        }

        return $this->connection;
    }
}