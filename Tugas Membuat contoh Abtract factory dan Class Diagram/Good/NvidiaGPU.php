<?php

class NvidiaGPU implements GPU, KomponenKomputer
{
    public function render()
    {
        echo "GPU AMD sedang merender...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah GPU Nvidia Untuk High End.\n <br>";
    }
}
