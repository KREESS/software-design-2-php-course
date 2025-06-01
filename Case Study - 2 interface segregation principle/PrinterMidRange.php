<?php

include_once "FiturScan.php";
include_once "FiturCetak.php";

class PrinterMidRange implements FiturScan, FiturCetak
{
    public function cetakKertas(): void
    {
        echo "Mencetak Kertas Printer Menengah.... \n";
    }
    public function scanKertas(): void
    {
        echo "MengScan Kertas Printer Menengah.... \n";
    }
}
