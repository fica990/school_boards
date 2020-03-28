<?php


namespace App\Support;

use Exception;
use PDO;
use PDOException;

class DB
{
    private static $instance = null;
    private $conn;

    /**
     * DB constructor.
     */
    private function __construct()
    {
        try {
            $configs = include __DIR__ . '/../config/config.php';
            $conn = "mysql:dbname=" . $configs['db_name'] . ";host=" . $configs['db_host'];

            $this->conn = new PDO($conn, $configs['db_user'], $configs['db_pass']);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @throws Exception
     */
    public function __clone()
    {
        throw new Exception("Can't clone db instance");
    }

    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    public function getConnection(): ?PDO
    {
        return $this->conn;
    }
}