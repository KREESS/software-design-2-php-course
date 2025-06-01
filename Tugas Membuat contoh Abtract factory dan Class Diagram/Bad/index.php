<?php
require_once 'KomponenKomputer.php';
require_once 'CPU.php';
require_once 'GPU.php';
require_once 'IntelCPU.php';
require_once 'AMDCPU.php';
require_once 'NvidiaGPU.php';
require_once 'AMDGPU.php';
require_once 'AbstractPabrikKomputer.php';
require_once 'PabrikKomputerHighEnd.php';
require_once 'PabrikKomputerLowEnd.php';
require_once 'PenggunaKomputer.php';

// Penggunaan Komputer High-End
$pengguna1 = new PenggunaKomputer(new PabrikKomputerHighEnd());
$pengguna1->menggunakanKomputer();

// Penggunaan Komputer Low-End
$pengguna2 = new PenggunaKomputer(new PabrikKomputerLowEnd());
$pengguna2->menggunakanKomputer();
