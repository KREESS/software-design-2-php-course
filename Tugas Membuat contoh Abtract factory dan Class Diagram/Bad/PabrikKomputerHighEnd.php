<?php
// Concrete Factory untuk Komputer High-End
class PabrikKomputerHighEnd extends AbstractPabrikKomputer
{
    public function buatCPU(): CPU
    {
        return new IntelCPU();
    }

    public function buatGPU(): GPU
    {
        return new NvidiaGPU();
    }
}
