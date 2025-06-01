<?php
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
