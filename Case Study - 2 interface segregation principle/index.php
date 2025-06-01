<?php

include_once "PrinterFlagship.php";
include_once "PrinterMidRange.php";
include_once "PrinterEntryLevel.php";

$mahal = new PrinterFlagship();
$mahal->cetakKertas();
echo "<br>";
$mahal->terimaFax();
echo "<br>";
$mahal->scanKertas();
echo "<br><br>";

$menengah = new PrinterMidRange();
$menengah->cetakKertas();
echo "<br>";
$menengah->scanKertas();
echo "<br><br>";

$palingmurah = new PrinterEntryLevel();
$palingmurah->cetakKertas();
