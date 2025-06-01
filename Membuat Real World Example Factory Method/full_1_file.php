<?php

/**
 * Interface untuk merepresentasikan sebuah produk.
 */
interface Produk
{
    public function deskripsi(): string;
}

/**
 * Kelas konkret yang merepresentasikan produk telepon.
 */
class Telepon implements Produk
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
        return "Ini adalah telepon $this->merek $this->model.";
    }
}

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

    public function buatProduk(string $merek, string $model): Produk
    {
        $merek = $merek ?? $this->defaultMerek;
        $model = $model ?? $this->defaultModel;
        return new Telepon($merek, $model);
    }
}

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
echo "\nMembuat dan mendeskripsikan laptop:\n";
kodeKlien(new PabrikLaptop("Dell", "XPS 15"), "Dell", "XPS 15");
