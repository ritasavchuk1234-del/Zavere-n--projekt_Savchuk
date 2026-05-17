<?php

class Database
{
    private string $host = "127.0.0.1";
    private string $dbname = "japan_portal";
    private string $username = "root";
    private string $password = "";

    public function connect(): PDO
    {
        try {

            $pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {

            die("Connection failed: " . $e->getMessage());
        }
    }
}