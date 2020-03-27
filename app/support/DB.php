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
            $configs = include_once __DIR__ . '/../config/config.php';

            $conn = "mysql:dbname=" . $configs['db_name'] . ";host=" . $configs['db_host'];

            try {
                $this->connection = new PDO($conn, $configs['db_user'], $configs['db_pass']);
            } catch (PDOException $e) {
                echo $e->getMessage();
                die;
            }
        }

        return $this->connection;
    }
}