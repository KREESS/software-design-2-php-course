<?php
// Concrete Factory untuk Komputer Low-End
class PabrikKomputerLowEnd extends AbstractPabrikKomputer
{
    public function buatCPU(): CPU
    {
        return new AMDCPU();
    }

    public function buatGPU(): GPU
    {
        return new AMDGPU();
    }
}
