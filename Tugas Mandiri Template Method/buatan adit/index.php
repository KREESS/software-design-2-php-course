<?php

require_once 'MieGoreng.php';
require_once 'MieRebus.php';

// Menggunakan Template Method Pattern
echo "Menyiapkan Mie Goreng:\n";
$mieGoreng = new MieGoreng();
$mieGoreng->siapkanMie();

echo "<br><br>\nMenyiapkan Mie Rebus:\n";
$mieRebus = new MieRebus();
$mieRebus->siapkanMie();
