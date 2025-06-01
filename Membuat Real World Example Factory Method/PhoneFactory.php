<?php

require_once 'ProductFactory.php';
require_once 'Phone.php';

/**
 * Pabrik konkret untuk membuat telepon.
 */
class PabrikTelepon extends PabrikProduk
{
    private $defaultMerek;
    private $defaultModel;

    public function __construct(string $defaultMerek, string $defaultModel)
    {
        $this->defaultMerek = $defaultMerek;
        $this->defaultModel = $defaultModel;
    }

    public function buatProduk(string $merek = null, string $model = null): Produk
    {
        $merek = $merek ?? $this->defaultMerek;
        $model = $model ?? $this->defaultModel;
        return new Telepon($merek, $model);
    }
}
