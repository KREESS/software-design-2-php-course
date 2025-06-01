<?php
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
