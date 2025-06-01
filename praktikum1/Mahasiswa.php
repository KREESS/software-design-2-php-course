<?php

include_once "Person.php";
class Mahasiswa extends Person
{

    private string $nim;



    public function getNim(): string
    {
        return $this->nim;
    }

    public function setNim(string $nim): void
    {
        $this->nim = $nim;
    }
}
