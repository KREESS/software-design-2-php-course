<?php

class LightningToChargerAdapter implements UsbTypeC
{
    private $lightningPort;

    public function __construct(LightningPort $lightningPort)
    {
        $this->lightningPort = $lightningPort;
    }
    public function connectUsbTypeC()
    {
        $this->lightningPort->connectLightning();
    }
}
