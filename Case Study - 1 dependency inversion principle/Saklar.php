<?php

include_once "BarangElektronik.php";

class Saklar
{
    private BarangElektronik $item;
    private bool $keaktifan;

    public function __construct(BarangElektronik $item)
    {
        $this->item = $item;
        $this->keaktifan = false;
    }

    public function aktifkan(): void
    {
        $this->item->beroperasi();
        $this->keaktifan = true;
    }

    public function nonaktifkan(): void
    {
        $this->item->berhenti();
        $this->keaktifan = false;
    }

    public function getStatus(): bool
    {
        return $this->keaktifan;
    }
}
