<?php
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    // Hitung diskon 20%
    $diskon = $hargaProduk * 0.20;
}

// Hitung harga akhir setelah diskon
$hargaAkhir = $hargaProduk - $diskon;

echo "Harga produk setelah diskon: Rp. $hargaAkhir";
?>