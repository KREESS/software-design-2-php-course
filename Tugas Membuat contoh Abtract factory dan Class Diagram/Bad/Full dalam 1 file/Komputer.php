<?php
// Abstrak Produk
interface KomponenKomputer
{
    public function tampilkanInfo();
}


// Abstrak Produk
interface CPU
{
    public function proses();
}

// Abstrak Produk
interface GPU
{
    public function render();
}


// Produk Konkrit untuk Komputer High-End
class IntelCPU implements CPU, KomponenKomputer
{
    public function proses()
    {
        echo "CPU Intel sedang diproses...\n <br>";
    }

    // Metode ini seharusnya menjadi bagian dari antarmuka CPU, bukan KomponenKomputer
    public function tampilkanInfo()
    {
        echo "Ini adalah CPU Intel Untuk High End.\n <br>";
    }
}

// Produk Konkrit untuk Komputer Low-End
class AMDCPU implements CPU, KomponenKomputer
{
    public function proses()
    {
        echo "CPU AMD sedang diproses...\n <br>";
    }

    // Metode ini seharusnya menjadi bagian dari antarmuka CPU, bukan KomponenKomputer
    public function tampilkanInfo()
    {
        echo "Ini adalah CPU AMD Untuk Low End.\n <br>";
    }
}

// Produk Konkrit untuk Komputer High-End
class NvidiaGPU implements GPU, KomponenKomputer
{
    // Metode render seharusnya menjadi bagian dari antarmuka GPU
    public function render()
    {
        echo "GPU AMD sedang merender...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah GPU Nvidia Untuk High End.\n <br>";
    }
}

// Produk Konkrit untuk Komputer Low-End
class AMDGPU implements GPU, KomponenKomputer
{
    // Metode render seharusnya menjadi bagian dari antarmuka GPU
    public function render()
    {
        echo "GPU Nvidia sedang merender...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah GPU AMD Untuk Low End.\n <br>";
    }
}

// Implementasi antarmuka yang hilang pada kelas-kelas Factory Konkrit

// Klien
class PenggunaKomputer
{
    private $pabrikKomputer;

    public function __construct(PabrikKomputer $pabrikKomputer)
    {
        $this->pabrikKomputer = $pabrikKomputer;
    }

    public function menggunakanKomputer()
    {
        $cpu = $this->pabrikKomputer->buatCPU();
        $gpu = $this->pabrikKomputer->buatGPU();

        if ($cpu instanceof CPU) {
            $cpu->proses();
        }

        if ($gpu instanceof GPU) {
            $gpu->render();
        }

        // Menampilkan informasi tentang CPU dan GPU
        $cpu->tampilkanInfo();
        $gpu->tampilkanInfo();
    }
}

// Penggunaan Komputer High-End
$pengguna1 = new PenggunaKomputer(new PabrikKomputerHighEnd());
$pengguna1->menggunakanKomputer();

// Penggunaan Komputer Low-End
$pengguna2 = new PenggunaKomputer(new PabrikKomputerLowEnd());
$pengguna2->menggunakanKomputer();
