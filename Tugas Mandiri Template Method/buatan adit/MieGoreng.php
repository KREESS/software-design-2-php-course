<?php

require_once 'MieInstan.php';

class MieGoreng extends MieInstan
{
    protected function beliMie()
    {
        echo "<br>Beli mie instan: Indomie Ayam, Goreng\n";
    }

    protected function masakMie()
    {
        echo "<br>Memasak mie instan selama 3 menit dengan 5 kali adukan\n";
    }

    protected function sajikanMie()
    {
        echo "<br>Memisahkan kuah\n";
        echo "<br>Menambahkan topping seasoning\n";
    }
}
