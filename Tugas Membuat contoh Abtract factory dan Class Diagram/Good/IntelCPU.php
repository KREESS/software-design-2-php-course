<?php

class IntelCPU implements CPU, KomponenKomputer
{
    public function proses()
    {
        echo "CPU Intel sedang diproses...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah CPU Intel Untuk Low End.\n <br>";
    }
}
