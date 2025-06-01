<?php

require_once 'ConfigurationManager.php';
require_once 'DatabaseHandler.php';

// BaseInstance
$example = BaseInstance::getInstance();

// ConfigurationManager
$configManager = ConfigurationManager::getInstance();
echo "Zona waktu: " . $configManager->getConfigValue('timezone') . "\n <br>";
$configManager->setConfigValue('max_users', '200');

// DatabaseHandler
$databaseHandler = DatabaseHandler::getInstance();
echo "Status koneksi database: " . $databaseHandler->getConnectionStatus() . "\n";
