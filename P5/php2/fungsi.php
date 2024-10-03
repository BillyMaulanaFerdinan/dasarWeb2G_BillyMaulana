<?php

function perkenalan($nama, $salam) {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Billy","Hallo");

echo "<hr>";

$saya = "Billy";
$ucapanSalam = "Selamat pagi";

// Memanggil lagi
perkenalan($saya, $ucapanSalam);
?>