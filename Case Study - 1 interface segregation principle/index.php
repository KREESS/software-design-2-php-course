<?php

include_once "Kubus.php";
include_once "Persegi.php";

$kubus = new Kubus();
$kubus->calculateArea();
echo "<br>";
$kubus->calculateVolume();
echo "<br>";


$persegi = new Persegi();
$persegi->calculateArea();
