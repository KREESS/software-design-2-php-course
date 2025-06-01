<?php

class Pekerja
{
    protected $nextPekerja;

    // kesalahan Chain of responsibility
    public function __construct($nextPekerja = null)
    {
        $this->nextPekerja = $nextPekerja;
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

    protected function process($task)
    {
        return false;
    }
}
