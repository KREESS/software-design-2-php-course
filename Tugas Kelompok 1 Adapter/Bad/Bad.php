<?php

interface StorageDevice
{
    public function readData(): string;
    public function writeData(string $data): void;
}

class HardDrive implements StorageDevice
{
    private $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }
    public function readData(): string
    {
        return "Membaca data dari hard drive dengan kapasitas {$this->capacity} GB.";
    }
    public function writeData(string $data): void
    {
        echo "<br>Menulis data ke hard drive: '$data'.\n";
    }
}

class BadSolidStateDrive
{
    private $size;

    public function __construct(int $size)
    {
        $this->size = $size;
    }
    public function read(): string
    {
        return "Membaca data dari solid-state drive dengan kapasitas {$this->size} GB.";
    }
    public function write(string $data): void
    {
        echo "<br>Menulis data ke solid-state drive: '$data'.\n";
    }
    // Kesalahan 1
    public function trimData(): void
    {
        echo "Memotong data yang tidak diperlukan dari solid-state drive.\n";
    }
}

class BadSolidStateDriveAdapter implements StorageDevice
{
    private $solidStateDrive;

    // Kesalahan 2
    public function __construct(BadSolidStateDrive $solidStateDrive)
    {
        $this->solidStateDrive = $solidStateDrive;
    }
    public function readData(): string
    {
        // Kesalahan 3
        return $this->solidStateDrive->read();
    }
    public function writeData(string $data): void
    {
        // Kesalahan 4
        $this->solidStateDrive->write($data);
    }
}

class BadCloudStorage
{
    private $storageSpace;

    public function __construct(int $storageSpace)
    {
        $this->storageSpace = $storageSpace;
    }
    public function retrieve(): string
    {
        return "Mengambil data dari cloud storage dengan kapasitas {$this->storageSpace} GB.";
    }
    public function store(string $data): void
    {
        echo "<br>Menyimpan data ke cloud storage: '$data'.\n";
    }
}

class BadCloudStorageAdapter implements StorageDevice
{
    private $cloudStorage;

    public function __construct(BadCloudStorage $cloudStorage)
    {
        $this->cloudStorage = $cloudStorage;
    }
    public function readData(): string
    {
        return $this->cloudStorage->retrieve();
    }
    public function writeData(string $data): void
    {
        $this->cloudStorage->store($data);
    }
    // Kesalahan 5
    public function encryptData(string $data): void
    {
        echo "Mengenkripsi data sebelum disimpan ke cloud storage.\n";
    }
}

function clientCode(StorageDevice $storageDevice)
{
    echo $storageDevice->readData() . "\n";
    $storageDevice->writeData("Data yang akan disimpan.");
}

echo "Kode klien dengan hard drive:\n";
$hardDrive = new HardDrive(500);
clientCode($hardDrive);
echo "\n\n";

echo "<br>Kode klien dengan solid-state drive melalui adapter:\n";
$solidStateDrive = new BadSolidStateDrive(256);
$solidStateDriveAdapter = new BadSolidStateDriveAdapter($solidStateDrive);
clientCode($solidStateDriveAdapter);
echo "\n\n";

echo "<br>Kode klien dengan cloud storage melalui adapter:\n";
$badCloudStorage = new BadCloudStorage(1000);
$badCloudStorageAdapter = new BadCloudStorageAdapter($badCloudStorage);
clientCode($badCloudStorageAdapter);
