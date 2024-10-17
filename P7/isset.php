<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda Sudah Dewasa.";
} else {
    echo "Anda Belum Dewasa atau variabel umur belum ditemukan.";
}

echo "<br>";
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan di array";
}
?>