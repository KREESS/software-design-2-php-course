<?php

require_once 'MieGorengSetengahGila.php';
require_once 'MieGorengGila.php';

// Menggunakan Template Method Pattern
echo "Menyiapkan Mie Goreng Setengah Gila:\n";
$mieGorengGila = new MieGorengSetengahGila();
$mieGorengGila->menyajikanMieInstan();

echo "<br><br>\nMenyiapkan Mie Goreng Gila:\n";
$mieGorengSetengahGila = new MieGorengGila();
$mieGorengSetengahGila->menyajikanMieInstan();
