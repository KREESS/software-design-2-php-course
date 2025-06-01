<?php
require_once 'KomponenKomputer.php';
require_once 'CPU.php';
require_once 'GPU.php';
require_once 'IntelCPU.php';
require_once 'AMDCPU.php';
require_once 'AMDGPU.php';
require_once 'NvidiaGPU.php';
require_once 'PabrikKomputer.php';
require_once 'AbstractPabrikKomputer.php';
require_once 'PabrikKomputerHighEnd.php';
require_once 'PabrikKomputerLowEnd.php';
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
