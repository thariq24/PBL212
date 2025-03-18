<?php
class Kendaraan {
    protected $merk;
    
    public function __construct($merk) {
        $this->merk = $merk;
    }

    public function jalan() : void {
        echo $this->merk . " bergerak di jalan umum.\n";
    }
}

class Mobil extends Kendaraan {
    public function jalan() : void {
        echo $this->merk . " melaju di jalan raya dengan kecepatan tinggi.\n";
    }
}

class Sepeda extends Kendaraan {
    public function jalan() : void {
        echo $this->merk . " dikayuh di jalur sepeda.\n";
    }
}

// Membuat objek
$kendaraanUmum = new Kendaraan("Kendaraan");
$kendaraanUmum->jalan();

$mobilSport = new Mobil("Ferrari");
$mobilSport->jalan();

$sepedaGunung = new Sepeda("Polygon");
$sepedaGunung->jalan();
