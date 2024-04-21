<?php

class DiskonCalculator {
    private $harga;
    private $diskonPersen;

    public function __construct($harga, $diskonPersen) {
        $this->harga = $harga;
        $this->diskonPersen = $diskonPersen;
    }

    public function hitungDiskon() {
        $diskon = ($this->harga * $this->diskonPersen) / 100;
        return $diskon;
    }

    public function hitungHargaSetelahDiskon() {
        $diskon = $this->hitungDiskon();
        $hargaSetelahDiskon = $this->harga - $diskon;
        return $hargaSetelahDiskon;
    }
}

// Contoh penggunaan
$hargaBarang = 100000; // Harga barang sebelum diskon
$diskonPersen = 10; // Persentase diskon

$diskonCalculator = new DiskonCalculator($hargaBarang, $diskonPersen);
$diskon = $diskonCalculator->hitungDiskon();
$hargaSetelahDiskon = $diskonCalculator->hitungHargaSetelahDiskon();

echo "Harga barang sebelum diskon: Rp. " . $hargaBarang . "\n";
echo "Persentase diskon: " . $diskonPersen . "%\n";
echo "Besarnya diskon: Rp. " . $diskon . "\n";
echo "Harga barang setelah diskon: Rp. " . $hargaSetelahDiskon . "\n";

?>