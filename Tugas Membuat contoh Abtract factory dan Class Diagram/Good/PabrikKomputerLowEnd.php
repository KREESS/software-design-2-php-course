<?php

// Pabrik untuk Komputer Kelas Bawah Atau Low End
class PabrikKomputerLowEnd extends AbstractPabrikKomputer
{
    public function buatCPU(): CPU
    {
        return new AMDCPU();
    }

    public function buatGPU(): GPU
    {
        return new NvidiaGPU();
    }
}
