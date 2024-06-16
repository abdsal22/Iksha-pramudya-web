<?php
class Buah {
    private $nama;
    private $warna;
    private $berat;

    public function __construct($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getBerat() {
        return $this->berat;
    }

    public function setBerat($berat) {
        $this->berat = $berat;
    }

    public function infoBuah() {
        return "Nama: " . $this->getNama() . ", Warna: " . $this->getWarna() . ", Berat: " . $this->getBerat() . " gram.";
    }
}
?>
