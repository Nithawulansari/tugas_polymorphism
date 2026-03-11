<?php

// Contoh Abstract Class
abstract class Kendaraan {

    abstract public function berjalan();

}

// Child Class Mobil
class Mobil extends Kendaraan {

    public function berjalan() {
        echo "Mobil berjalan di jalan raya";
    }

}

// Child Class Kapal
class Kapal extends Kendaraan {

    public function berjalan() {
        echo "Kapal berlayar di laut";
    }

}

// Membuat Object
$mobil = new Mobil();
$kapal = new Kapal();

// Memanggil Method
$mobil->berjalan();
echo "<br>";

$kapal->berjalan();

?>