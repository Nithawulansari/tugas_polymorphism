<?php

// Parent Class
class BangunDatar {
    public function hitungLuas(){
        echo "Menghitung luas bangun datar";
    }
}

// Child Class Persegi
class Persegi extends BangunDatar {

    public $sisi = 4;

    public function hitungLuas(){
        $luas = $this->sisi * $this->sisi;
        echo "Luas Persegi = " . $luas;
    }
}

// Child Class Lingkaran
class Lingkaran extends BangunDatar {

    public $r = 7;

    public function hitungLuas(){
        $luas = 3.14 * $this->r * $this->r;
        echo "Luas Lingkaran = " . $luas;
    }
}

// Child Class Segitiga
class Segitiga extends BangunDatar {

    public $alas = 6;
    public $tinggi = 8;

    public function hitungLuas(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        echo "Luas Segitiga = " . $luas;
    }
}

// Membuat object
$p = new Persegi();
$l = new Lingkaran();
$s = new Segitiga();

// Memanggil method
$p->hitungLuas();
echo "<br>";

$l->hitungLuas();
echo "<br>";

$s->hitungLuas();

?>