<?php

class AMDCPU implements CPU, KomponenKomputer
{
    public function proses()
    {
        echo "CPU AMD sedang diproses...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah CPU AMD Untuk High End.\n <br>";
    }
}
