<?php

// Abstract Factory
interface PabrikKomputer
{
    public function buatCPU(): CPU;
    public function buatGPU(): GPU;
}
