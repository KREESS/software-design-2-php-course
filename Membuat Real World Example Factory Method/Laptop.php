<?php

require_once 'Product.php';

/**
 * Kelas konkret yang merepresentasikan produk laptop.
 */
class Laptop implements Produk
{
    private $merek;
    private $model;

    public function __construct(string $merek, string $model)
    {
        $this->merek = $merek;
        $this->model = $model;
    }

    public function deskripsi(): string
    {
        return "Ini adalah laptop $this->merek $this->model.";
    }
}
