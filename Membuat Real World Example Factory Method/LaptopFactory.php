<?php

require_once 'ProductFactory.php';
require_once 'Laptop.php';

/**
 * Pabrik konkret untuk membuat laptop.
 */
class PabrikLaptop extends PabrikProduk
{
    private $defaultMerek;
    private $defaultModel;

    public function __construct(string $defaultMerek, string $defaultModel)
    {
        $this->defaultMerek = $defaultMerek;
        $this->defaultModel = $defaultModel;
    }

    public function buatProduk(string $merek, string $model): Produk
    {
        $merek = $merek ?? $this->defaultMerek;
        $model = $model ?? $this->defaultModel;
        return new Laptop($merek, $model);
    }
}
