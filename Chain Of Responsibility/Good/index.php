<?php

require_once 'FrontendDeveloper.php';
require_once 'BackendDeveloper.php';
require_once 'DevOpsEngineer.php';

// Membuat objek pekerja dengan spesialisasi berbeda
$frontendDeveloper = new FrontendDeveloper();
$backendDeveloper = new BackendDeveloper();
$devOpsEngineer = new DevOpsEngineer();

// Mengatur rantai pekerja
$frontendDeveloper->setNextPekerja($backendDeveloper);
$backendDeveloper->setNextPekerja($devOpsEngineer);


// Menangani tugas-tugas yang berbeda
$frontendDeveloper->handle("frontend");
echo "<br>";
$frontendDeveloper->handle("backend");
echo "<br>";
$frontendDeveloper->handle("devops");
echo "<br>";
$frontendDeveloper->handle("testing");
