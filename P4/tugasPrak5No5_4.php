<?php
// Data siswa dan nilai
$daftarNilaiSiswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90,
];

// Hitung rata-rata nilai kelas
$totalNilai = array_sum($daftarNilaiSiswa);
$jumlahSiswa = count($daftarNilaiSiswa);
$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: $rataRata <br><br>";

// Cetak siswa dengan nilai di atas rata-rata
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarNilaiSiswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "Nama: $nama, Nilai: $nilai <br>";
    }
}
?>
