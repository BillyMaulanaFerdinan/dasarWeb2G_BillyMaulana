<?php
$poinPemain = 550; // Total poin pemain

// Tampilkan total skor pemain
echo "Total skor pemain adalah: $poinPemain <br>";

// Gunakan ternary untuk menentukan apakah pemain mendapatkan hadiah tambahan
$hadiahTambahan = ($poinPemain > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>