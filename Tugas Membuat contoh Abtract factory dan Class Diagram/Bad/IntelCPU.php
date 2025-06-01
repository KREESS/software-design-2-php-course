<?php
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
