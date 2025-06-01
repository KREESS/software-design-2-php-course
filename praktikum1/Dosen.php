<?php

include_once "Person.php";
class Dosen extends Person
{

    private string $nidn;


    public function getNidn(): string
    {
        return $this->nidn;
    }

    public function setNidn(string $nidn): void
    {
        $this->nidn = $nidn;
    }
}
