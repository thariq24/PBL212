<?php
class Kendaraan
    {
    protected $merk; protected $harga;
    protected $warna;

    // Setter
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }



    // Getter
    public function getMerk()
    {
        return $this->merk;
    }
    public function getHarga()
    {
        return $this->harga;
    }
    public function getWarna()
    {
        return $this->warna;
    }
}

// Kelas Kereta yang mewarisi kendaraan
class Kereta extends Kendaraan
{
    private $jmlGerbong;

    //setter
    public function setJmlGerbong($jmlGerbong)
    {
        $this->jmlGerbong = $jmlGerbong;
    }

    //Getter
    public function getJmlGerbong()
    {
        return $this->jmlGerbong;
    }
}

//Kelas Mobil yang mewarisi kendaraan
class Mobil extends Kendaraan
{
    private $merk_ban;

    //Setter
    public function setMerkBan($merk_ban)
    {
        $this->merk_ban = $merk_ban;
    }

    //Getter
    public function getMerkBan()
    {
        return $this->merk_ban;
    }
}

//Membuat ojek dari kelas kendaraan
$kendaraan = new Kendaraan();
$kendaraan->setMerk("Becak");
$kendaraan->setHarga(3000000);
$kendaraan->setWarna("Merah");

echo "=======================================  \n";
echo "ini adalah nilai dari kelas kendaraan  \n";
echo "Merk : " . $kendaraan->getMerk() . "\n";
echo "Harga : " . $kendaraan->getHarga() . "\n";
echo "Warna : " . $kendaraan->getWarna() . "\n";

// Membuat Objek dari kelas kereta
$kereta = new Kereta();
$kereta->setMerk("Kereta Listrik Made In Indonesia");
$kereta->setJmlGerbong(5);
$kereta->setWarna("Merah Putih");


echo "=======================================  \n";
echo "ini adalah nilai dari kelas kereta  \n";
echo "Merk : " . $kereta->getMerk() . "\n";
echo "Jumlah Gerbong : " . $kereta->getJmlGerbong() . "\n";
echo "Warna : " . $kereta->getWarna() . "\n";

// Membuat Objek dari kelas mobil
$mobil = new Mobil();
$mobil->setMerk("Innova");
$mobil->setHarga(1600000000);
$mobil->setWarna("Hitam");
$mobil->setMerkBan("Michelin");

echo "=======================================  \n";
echo "ini adalah nilai dari kelas mobil  \n";
echo "Merk : " . $mobil->getMerk() . "\n";
echo "Harga : " . $mobil->getHarga() . "\n";
echo "Warna : " . $mobil->getWarna() . "\n";
echo "Merk Ban : " . $mobil->getMerkBan() . "\n";