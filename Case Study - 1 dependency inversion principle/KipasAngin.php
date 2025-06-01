<?php

include_once "BarangElektronik.php";

class KipasAngin implements BarangElektronik
{
    public function beroperasi(): void
    {
        echo "Kipas Angin Menyala... \n";
    }
    public function berhenti(): void
    {
        echo "Kipas Angin Berhenti Menyala... \n";
    }
}
