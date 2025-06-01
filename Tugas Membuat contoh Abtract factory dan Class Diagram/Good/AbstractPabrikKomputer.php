<?php

// Abstract Factory
abstract class AbstractPabrikKomputer implements PabrikKomputer
{
    abstract public function buatCPU(): CPU;
    abstract public function buatGPU(): GPU;
}
