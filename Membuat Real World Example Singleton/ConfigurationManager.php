<?php

require_once 'BaseInstance.php';

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
