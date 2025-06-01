<?php

require_once 'PhoneFactory.php';
require_once 'LaptopFactory.php';

/**
 * Kode klien untuk membuat dan mendeskripsikan produk.
 */
function kodeKlien(PabrikProduk $pabrik, string $merek = null, string $model = null)
{
    echo $pabrik->deskripsiProduk($merek, $model) . "\n";
}

// Pengujian dengan telepon
echo "Membuat dan mendeskripsikan telepon:\n";
kodeKlien(new PabrikTelepon("Samsung", "Galaxy S21"), "Samsung", "Galaxy S21");

// Pengujian dengan laptop
echo "\n <br> Membuat dan mendeskripsikan laptop:\n";
kodeKlien(new PabrikLaptop("Dell", "XPS 15"), "Dell", "XPS 15");
