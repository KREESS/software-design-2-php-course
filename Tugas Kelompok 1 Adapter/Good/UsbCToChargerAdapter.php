<?php

class UsbCToChargerAdapter implements Lightning
{
    private $usbCPort;

    public function __construct(TypeCPort $usbCPort)
    {
        $this->usbCPort = $usbCPort;
    }

    public function connectLightning()
    {
        $this->usbCPort->connectTypeC();
    }
}
