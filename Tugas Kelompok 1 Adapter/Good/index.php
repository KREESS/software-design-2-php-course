<?php

include 'UsbTypeC.php';
include 'Lightning.php';
include 'SamsungCharger.php';
include 'LightningPort.php';
include 'LightningToChargerAdapter.php';
include 'UsbCToChargerAdapter.php';
include 'LightningCharger.php';
include 'TypeCPort.php';

function clientCode(SamsungCharger $samsungCharger, LightningCharger $lightningCharger, UsbTypeC $usbCAdapter, Lightning $lightningAdapter)
{
    echo "Menghubungkan port USB Type C menggunakan adapter LightningToChargerAdapter:\n";
    $usbCAdapter->connectUsbTypeC();
    $samsungCharger->charge();

    echo "<br>";

    echo "Menghubungkan port Lightning menggunakan adapter UsbCToChargerAdapter:\n";
    $lightningAdapter->connectLightning();
    $lightningCharger->chargeWithLightning();
}

$samsungCharger = new SamsungCharger();
$lightningCharger = new LightningCharger();
$lightningPort = new LightningPort();
$typeCPort = new TypeCPort();
$lightningToUsbCAdapter = new LightningToChargerAdapter($lightningPort);
$usbCToLightningAdapter = new UsbCToChargerAdapter($typeCPort);

clientCode($samsungCharger, $lightningCharger, $lightningToUsbCAdapter, $usbCToLightningAdapter);
