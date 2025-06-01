<?php

require_once 'KokiTemplate.php';

class MieGorengSetengahGila extends KokiTemplate
{
    protected function beliMie()
    {
        echo "<br>Beli mie instan: Indomie Mie Goreng Setengah Gila\n";
    }

    protected function masakMie()
    {
        echo "<br>Memasak mie instan selama 3 menit dengan 5 kali adukan\n";
    }

    protected function sajikanMie()
    {
        echo "<br>Menambahkan topping sosis bakar\n";
        echo "<br>Menambahkan topping ayam suwir\n";
        echo "<br>Menambahkan topping sukro\n";
    }

    protected function getEndTitle()
    {
        echo "<br>Indomie Goreng Setengah Gila Telah Berhasil Disajikan\n";
    }
}
