<?php

interface Notifikasi {
    public function kirim();
}

class Email implements Notifikasi {
    public function kirim(){
        echo "Notifikasi dikirim melalui Email";
    }
}

class SMS implements Notifikasi {
    public function kirim(){
        echo "Notifikasi dikirim melalui SMS";
    }
}

class WhatsApp implements Notifikasi {
    public function kirim(){
        echo "Notifikasi dikirim melalui WhatsApp";
    }
}

$n1 = new Email();
$n2 = new SMS();
$n3 = new WhatsApp();

$n1->kirim();
echo "<br>";

$n2->kirim();
echo "<br>";

$n3->kirim();

?>