<?php

require_once 'BaseInstance.php';

class DatabaseHandler extends BaseInstance
{
    protected static $instance;
    protected $connection;

    protected function __construct()
    {
        parent::__construct();
        $this->connectToDatabase();
    }

    public static function getInstance(): DatabaseHandler
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function getConnectionStatus(): string
    {
        return $this->connection;
    }

    protected function connectToDatabase(): void
    {
        // Simulasi koneksi ke database
        $this->connection = 'Terhubung dengan database';
    }
}
