<?php

include_once "Mahasiswa.php";
include_once "Dosen.php";

$mahasiwa = new Mahasiswa();
$mahasiwa->setNama("Udin ");
$mahasiwa->setNim("0803017");
echo $mahasiwa->getNama();
echo $mahasiwa->getNim();
echo "<br>";


$dosen = new Dosen();
$dosen->setNama("Joko ");
$dosen->setNidn("12079804");
echo $dosen->getNama();
echo $dosen->getNidn();
