<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan nilai dari yang terendah hingga tertinggi
sort($nilaiSiswa);

// Hapus dua nilai tertinggi dan dua nilai terendah
array_splice($nilaiSiswa, 0, 2); // Hapus dua nilai terendah
array_splice($nilaiSiswa, -2, 2); // Hapus dua nilai tertinggi

// Hitung total nilai dari sisa nilai
$totalNilai = array_sum($nilaiSiswa);

// Hitung rata-rata dari sisa nilai
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";
?>