<?php

// Membuat Interface
interface Pembayaran {
    public function prosesPembayaran();
}

// Class Transfer Bank
class TransferBank implements Pembayaran {

    public function prosesPembayaran() {
        echo "Pembayaran melalui Transfer Bank";
    }

}

// Class E-Wallet
class EWallet implements Pembayaran {

    public function prosesPembayaran() {
        echo "Pembayaran melalui E-Wallet";
    }

}

// Class Kartu Kredit
class KartuKredit implements Pembayaran {

    public function prosesPembayaran() {
        echo "Pembayaran melalui Kartu Kredit";
    }

}

// Membuat Object
$p1 = new TransferBank();
$p2 = new EWallet();
$p3 = new KartuKredit();

// Memanggil Method
$p1->prosesPembayaran();
echo "<br>";

$p2->prosesPembayaran();
echo "<br>";

$p3->prosesPembayaran();

?>