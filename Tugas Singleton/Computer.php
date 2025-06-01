<?php

class Computer
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function addComputer($brand, $model, $processor, $ram)
    {
        $stmt = $this->db->prepare("INSERT INTO computers (brand, model, processor, ram) VALUES (?, ?, ?, ?)");
        $stmt->execute([$brand, $model, $processor, $ram]);
        echo "Data komputer berhasil ditambahkan.<br>";
    }

    public function getComputer($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM computers WHERE id = ?");
        $stmt->execute([$id]);
        $computer = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($computer) {
            echo "Brand : " . $computer['brand'] . "<br>Model : " . $computer['model'] . "<br>Processor : " . $computer['processor'] . "<br>RAM : " . $computer['ram'] . " GB<br>";
        } else {
            echo "Data komputer tidak ditemukan.<br>";
        }
    }

    public function updateComputer($id, $brand, $model, $processor, $ram)
    {
        $stmt = $this->db->prepare("UPDATE computers SET brand = ?, model = ?, processor = ?, ram = ? WHERE id = ?");
        $stmt->execute([$brand, $model, $processor, $ram, $id]);
        echo "Data komputer berhasil diubah.<br>";
    }

    public function deleteComputer($id)
    {
        $stmt = $this->db->prepare("DELETE FROM computers WHERE id = ?");
        $stmt->execute([$id]);
        echo "Data komputer berhasil dihapus.<br>";
    }
}
