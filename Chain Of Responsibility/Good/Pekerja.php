<?php

abstract class Pekerja
{
    protected $nextPekerja;

    public function setNextPekerja(Pekerja $pekerja)
    {
        $this->nextPekerja = $pekerja;
    }

    public function handle($task)
    {
        if ($this->process($task)) {
            return true;
        } elseif ($this->nextPekerja != null) {
            return $this->nextPekerja->handle($task);
        } else {
            echo "Tugas tidak dapat ditangani.\n";
            return false;
        }
    }

    abstract protected function process($task);
}
