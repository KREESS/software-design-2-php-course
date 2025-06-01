<?php

include_once "BarangElektronik.php";

class Lampu implements BarangElektronik
{
    public function beroperasi(): void
    {
        echo "Lampu Menyala... \n";
    }
    public function berhenti(): void
    {
        echo "Lampu Berhenti Menyala... \n";
    }
}
