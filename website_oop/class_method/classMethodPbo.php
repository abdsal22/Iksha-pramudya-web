<?php
class Mobil {
    private $roda = 4;
    
    private function jalan() {
        echo 'Mobil berjalan<br>';
    }
    
    public function jumlahRoda() {
        echo 'Jumlah Roda : '. $this->roda . '<br>';
    }
    public function aktifkanJalan() {
        $this->jalan();
    }
}