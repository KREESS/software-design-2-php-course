<?php

class BaseInstance
{
    protected static $instance;

    protected function __construct()
    {
        // Konstruktor di sini hanya didefinisikan untuk mencegah instansiasi langsung
    }

    public static function getInstance(): self
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

class ConfigurationManager extends BaseInstance
{
    protected static $instance;
    protected $config = [];

    protected function __construct()
    {
        parent::__construct();
        $this->loadConfiguration();
    }

    public static function getInstance(): ConfigurationManager
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function getConfigValue(string $key): string
    {
        return $this->config[$key] ?? '';
    }

    public function setConfigValue(string $key, string $value): void
    {
        $this->config[$key] = $value;
    }

    protected function loadConfiguration(): void
    {
        // Simulasi pengaturan yang dimuat dari file atau database
        $this->config = [
            'timezone' => 'WIB',
            'max_users' => '100',
        ];
    }
}

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

// Kode Klien
// BaseInstance
$example = BaseInstance::getInstance();

// ConfigurationManager
$configManager = ConfigurationManager::getInstance();
echo "Zona waktu: " . $configManager->getConfigValue('timezone') . "\n";
$configManager->setConfigValue('max_users', '200');

// DatabaseHandler
$databaseHandler = DatabaseHandler::getInstance();
echo "Status koneksi database: " . $databaseHandler->getConnectionStatus() . "\n";
