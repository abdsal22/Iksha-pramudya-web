<?php
class Buah {
    protected $nama;
    protected $warna;

    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    public function getInfo() {
        return "Ini adalah sebuah buah. Nama: {$this->nama}, Warna: {$this->warna}.";
    }
}

class Apel extends Buah {
    private $jenis;

    public function __construct($jenis, $warna) {
        parent::__construct("Apel", $warna);
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Ini adalah sebuah apel. Jenis: {$this->jenis}, Warna: {$this->warna}.";
    }
}

class Pisang extends Buah {
    private $panjang;

    public function __construct($panjang) {
        parent::__construct("Pisang", "Kuning");
        $this->panjang = $panjang;
    }

    public function getInfo() {
        return "Ini adalah sebuah pisang. Panjang: {$this->panjang} cm, Warna: {$this->warna}.";
    }
}
?>
