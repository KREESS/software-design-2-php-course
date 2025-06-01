<?php

include_once "TipePembayaran.php";
include_once "Kredit.php";
include_once "Cash.php";
include_once "Debit.php";
include_once "PembayaranCustomer.php";

$kredit = new Kredit();
$cash = new Cash();
$debit = new Debit();

$pembayaran = new PembayaranCustomer();
$pembayaran->menerimaPembayaran($kredit);
echo "<br>";
$pembayaran->menerimaPembayaran($cash);
echo "<br>";
$pembayaran->menerimaPembayaran($debit);
