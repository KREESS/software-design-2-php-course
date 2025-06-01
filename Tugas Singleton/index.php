<?php

include_once 'Database.php';
include_once 'Computer.php';

$db1 = Database::getInstance();
var_dump($db1);
echo "<br>";

$db2 = Database::getInstance();
var_dump($db2);
echo "<br>";

$db3 = Database::getInstance();
var_dump($db3);
echo "<br>";

$db4 = Database::getInstance();
var_dump($db4);
echo "<br>";

$db5 = Database::getInstance();
var_dump($db5);
echo "<br><br>";


// Buat instance baru Komputer
$computerManager = new Computer();

// Tambahkan Data komputer
$computerManager->addComputer("Asus", "Zenbook", "AMD Ryzen 9", 32);

// Ambil Data komputer
$computerManager->getComputer(16);

// Update Data komputer
$computerManager->updateComputer(15, "HP", "Pavilion", "Intel Core i9", 64);

// Hapus Data komputer
$computerManager->deleteComputer(14);
