<?php

// Class Kendaraan
class Kendaraan {
    // Properti
    protected $jenis;
    protected $merek;
    protected $tahunProduksi;

    // Constructor
    public function __construct($jenis, $merek, $tahunProduksi) {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->tahunProduksi = $tahunProduksi;
    }

    // Method
    public function getInfo() {
        return "Jenis: " . $this->jenis . ", Merek: " . $this->merek . ", Tahun Produksi: " . $this->tahunProduksi;
    }
}

// Class Mobil (mewarisi Kendaraan)
class Mobil extends Kendaraan {
    // Properti tambahan
    protected $jumlahPintu;

    // Constructor
    public function __construct($jenis, $merek, $tahunProduksi, $jumlahPintu) {
        parent::__construct($jenis, $merek, $tahunProduksi);
        $this->jumlahPintu = $jumlahPintu;
    }

    // Method tambahan
    public function getDetailInfo() {
        return parent::getInfo() . ", Jumlah Pintu: " . $this->jumlahPintu;
    }
}

// Membuat object berdasarkan class Mobil
$mobil = new Mobil('Sedan', 'Toyota', 2023, 4);

// Menggunakan method dari class Mobil
echo $mobil->getDetailInfo();

