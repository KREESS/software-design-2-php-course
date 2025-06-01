<?php

require_once 'Pekerja.php';

class BackendDeveloper extends Pekerja
{
    protected function process($task)
    {
        if ($task == "backend") {
            echo "Back-end developer menangani tugas.\n";
            return true;
        }
        return false;
    }
}
