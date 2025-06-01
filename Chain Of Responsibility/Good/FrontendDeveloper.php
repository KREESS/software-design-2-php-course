<?php

require_once 'Pekerja.php';

class FrontendDeveloper extends Pekerja
{
    protected function process($task)
    {
        if ($task == "frontend") {
            echo "Front-end developer menangani tugas.\n";
            return true;
        }
        return false;
    }
}
