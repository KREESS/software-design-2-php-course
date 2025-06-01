<?php

class Database
{
    private static ?PDO $instance = null;

    private function __construct()
    {
        echo "<br>Instance Database Baru Telah Dibuat!<br>";
    }

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $host = 'localhost';
            $dbname = 'komputer_db';
            $username = 'root';
            $password = '';
            try {
                self::$instance = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Koneksi Gagal: ' . $e->getMessage();
            }
        }
        return self::$instance;
    }
}
