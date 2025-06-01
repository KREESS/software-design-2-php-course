<?php

include_once "Saklar.php";
include_once "KipasAngin.php";
include_once "Lampu.php";

$kipasAngin = new KipasAngin();
$lampu = new Lampu();

$saklarKipasAngin = new Saklar($kipasAngin);
$saklarLampu = new Saklar($lampu);

$saklarKipasAngin->aktifkan();
echo "Status kipas angin: " . ($saklarKipasAngin->getStatus() ? "Menyala" : "Mati") . "<br>" . "\n";
$saklarKipasAngin->nonaktifkan();
echo "Status kipas angin: " . ($saklarKipasAngin->getStatus() ? "Menyala" : "Mati") . "<br>" . "\n";

$saklarLampu->aktifkan();
echo "Status lampu: " . ($saklarLampu->getStatus() ? "Menyala" : "Mati") . "<br>" . "\n";
$saklarLampu->nonaktifkan();
echo "Status lampu: " . ($saklarLampu->getStatus() ? "Menyala" : "Mati") . "<br>" . "\n";
