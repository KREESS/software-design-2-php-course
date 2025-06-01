<?php

include_once "Shape2Dimension.php";

class Persegi implements Shape2Dimension
{
    public function calculateArea(): void
    {
        echo "Rumus Pesegi Luas Dan Keliling Adalah L = s x s, K = s x s x s x s \n";
    }
}
