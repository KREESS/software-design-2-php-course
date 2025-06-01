<?php

require_once 'KokiTemplate.php';

class MieGorengGila extends KokiTemplate
{
    protected function beliMie()
    {
        echo "<br>Beli mie instan: Indomie Mie Goreng Gila\n";
    }

    protected function masakMie()
    {
        echo "<br>Memasak mie instan selama 25 menit dengan 55 kali adukan\n";
    }

    protected function sajikanMie()
    {
        echo "<br>Menambahkan topping sapi suwir\n";
        echo "<br>Menambahkan topping pete\n";
        echo "<br>Menambahkan topping jengkol\n";
    }

    protected function getEndTitle()
    {
        echo "<br>Indomie Goreng Gila Telah Berhasil Disajikan\n";
    }
}
