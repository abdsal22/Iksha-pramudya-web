<?php
class MagicMethod {
    private $nama;
    private $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
        echo "Objek telah dibuat. Nama: $this->nama, Umur: $this->umur\n";
    }

    public function __toString() {
        return "Nama: $this->nama, Umur: $this->umur";
    }

    public function __get($property) {
        echo "Mencoba mengakses properti '$property' yang tidak ada atau tidak dapat diakses.\n";
        return null;
    }
}
?>
