<?php

require_once 'Product.php';

/**
 * Kelas abstrak untuk membuat produk.
 */
abstract class PabrikProduk
{
    abstract public function buatProduk(string $merek, string $model): Produk;

    public function deskripsiProduk(string $merek, string $model): string
    {
        $produk = $this->buatProduk($merek, $model);
        return $produk->deskripsi();
    }
}
