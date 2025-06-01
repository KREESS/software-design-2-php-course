<?php

class AMDGPU implements GPU, KomponenKomputer
{
    public function render()
    {
        echo "GPU Nvidia sedang merender...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah GPU AMD Untuk Low End.\n <br>";
    }
}
