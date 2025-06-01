<?php

require_once 'Pekerja.php';

class DevOpsEngineer extends Pekerja
{
    protected function process($task)
    {
        if ($task == "devops") {
            echo "DevOps engineer menangani tugas.\n";
            return true;
        }
        return false;
    }
}
