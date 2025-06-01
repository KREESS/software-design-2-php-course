<?php

class Debit implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran dengan metode Debit\n";
    }
}
