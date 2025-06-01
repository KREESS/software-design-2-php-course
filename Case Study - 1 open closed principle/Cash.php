<?php

class Cash implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran dengan metode Cash\n";
    }
}
