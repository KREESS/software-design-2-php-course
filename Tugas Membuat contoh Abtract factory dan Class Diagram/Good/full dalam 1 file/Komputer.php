<?php

// Abstract Product
interface KomponenKomputer
{
    public function tampilkanInfo();
}


// Abstract Product
interface CPU
{
    public function proses();
}

// Abstract Product
interface GPU
{
    public function render();
}


// Concrete Product for High-End Computer
class IntelCPU implements CPU, KomponenKomputer
{
    public function proses()
    {
        echo "CPU Intel sedang diproses...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah CPU Intel Untuk High End.\n <br>";
    }
}

// Concrete Product for Low-End Computer
class AMDCPU implements CPU, KomponenKomputer
{
    public function proses()
    {
        echo "CPU AMD sedang diproses...\n <br>";
    }

    public function tampilkanInfo()
    {
        echo "Ini adalah CPU AMD Untuk Low End.\n <br>";
    }
}

// Concrete Product for High-End Computer
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

// Concrete Product for Low-End Computer
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





// Abstract Factory
interface PabrikKomputer
{
    public function buatCPU(): CPU;
    public function buatGPU(): GPU;
}

// Abstract Factory
abstract class AbstractPabrikKomputer implements PabrikKomputer
{
    abstract public function buatCPU(): CPU;
    abstract public function buatGPU(): GPU;
}

// Concrete Factory for High-End Computer
class PabrikKomputerHighEnd extends AbstractPabrikKomputer
{
    public function buatCPU(): CPU
    {
        return new IntelCPU();
    }

    public function buatGPU(): GPU
    {
        return new AMDGPU();
    }
}

// Concrete Factory for Low-End Computer
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


// Penggunaan Komputer High-End
$pabrikHighEnd = new PabrikKomputerHighEnd();
$cpuHighEnd = $pabrikHighEnd->buatCPU();
$gpuHighEnd = $pabrikHighEnd->buatGPU();

$cpuHighEnd->proses();
$gpuHighEnd->render();
$cpuHighEnd->tampilkanInfo();
$gpuHighEnd->tampilkanInfo();

// Penggunaan Komputer Low-End
$pabrikLowEnd = new PabrikKomputerLowEnd();
$cpuLowEnd = $pabrikLowEnd->buatCPU();
$gpuLowEnd = $pabrikLowEnd->buatGPU();

$cpuLowEnd->proses();
$gpuLowEnd->render();
$cpuLowEnd->tampilkanInfo();
$gpuLowEnd->tampilkanInfo();
