<?php
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
