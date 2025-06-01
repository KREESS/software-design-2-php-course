<?php

include_once "FiturScan.php";
include_once "FiturCetak.php";
include_once "FiturFax.php";

class PrinterFlagship implements FiturScan, FiturCetak, FiturFax
{
    public function cetakKertas(): void
    {
        echo "Mencatak Kertas Printer Paling Mahal.... \n";
    }
    public function terimaFax(): void
    {
        echo "Terima Fax Printer Paling Mahal.... \n";
    }
    public function scanKertas(): void
    {
        echo "MengScan Kertas Printer Paling Mahal.... \n";
    }
}
