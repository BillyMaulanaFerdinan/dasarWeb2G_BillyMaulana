<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: {$hasilAnd} <br>";
echo "Hasil Or: {$hasilOr} <br>";
echo "Hasil Not a: {$hasilNotA} <br>";
echo "Hasil Not b: {$hasilNotB} <br>";
echo "<br>";

echo"Hasil $a + $b = " . ($a += $b) ."<br>";
echo"Hasil $a - $b = " . ($a -= $b) ."<br>";
echo"Hasil $a * $b = " . ($a *= $b) ."<br>";
echo"Hasil $a / $b = " . ($a /= $b) ."<br>";
echo"Hasil $a % $b = " . ($a %= $b) ."<br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Indentik: {$hasilTidakIdentik} <br>";
echo "<br>";

$totalKursi = 45; 
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi di restoran: {$totalKursi} <br>";
echo "Kursi yang terisi: {$kursiTerisi} <br>";
echo "Kursi yang masih kosong: {$kursiKosong} <br>";
echo "Persentase kursi yang masih kosong: {$persentaseKosong}% <br>";
?>