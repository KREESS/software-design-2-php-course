<?php
// Klien
class PenggunaKomputer
{
    private $pabrikKomputer;

    public function __construct(PabrikKomputer $pabrikKomputer)
    {
        $this->pabrikKomputer = $pabrikKomputer;
    }

    public function menggunakanKomputer()
    {
        $cpu = $this->pabrikKomputer->buatCPU();
        $gpu = $this->pabrikKomputer->buatGPU();

        if ($cpu instanceof CPU) {
            $cpu->proses();
        }

        if ($gpu instanceof GPU) {
            $gpu->render();
        }

        // Menampilkan informasi tentang CPU dan GPU
        $cpu->tampilkanInfo();
        $gpu->tampilkanInfo();
    }
}
