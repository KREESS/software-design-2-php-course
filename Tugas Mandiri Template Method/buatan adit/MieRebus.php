<?php

require_once 'MieInstan.php';

class MieRebus extends MieInstan
{
    protected function beliMie()
    {
        echo "<br>Beli mie instan: Indomie Kari, Kuah\n";
    }

    protected function masakMie()
    {
        echo "<br>Memasak mie instan selama 4 menit dengan 7 kali adukan\n";
    }

    protected function sajikanMie()
    {
        echo "<br>Menambahkan topping seasoning\n";
    }
}
