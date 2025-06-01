<?php

require_once 'FrontendDeveloper.php';
require_once 'BackendDeveloper.php';
require_once 'DevOpsEngineer.php';

// Membuat objek pekerja dengan spesialisasi berbeda
$frontendDeveloper = new FrontendDeveloper(new BackendDeveloper(new DevOpsEngineer()));

// Menangani tugas-tugas yang berbeda
$frontendDeveloper->handle("frontend");
echo "<br>";
$frontendDeveloper->handle("backend");
echo "<br>";
$frontendDeveloper->handle("devops");
echo "<br>";
$frontendDeveloper->handle("testing");
