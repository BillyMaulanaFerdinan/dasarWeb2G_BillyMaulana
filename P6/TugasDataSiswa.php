<!DOCTYPE html>
<html>
    <head>
        <title> Data Siswa</title>
        <link rel="stylesheet" type="text/css" href="styleDatasiswa.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function(){
                $("#flip").click(function(){
                    $("#slide").slideToggle("slow");
                });
            });
        </script>
    </head>
    <body>
        <h2>  Data Siswa </h2>
        <div class="button" id="flip"> Klik untuk Sembunyikan/Tampilkan Data </div>
        <div id="slide">
        <table>
        <tr class="Kolom">
        <th>Nama</th>
        <th>Umur</th>
        <th>Kelas</th>
        <th>Alamat</th>
        </tr>
        <?php
                $siswa = array (
                    array("Andi", 15, "10A", "Malang"),
                    array("Siti", 16, "10B", "Batu"),
                    array("Budi", 15, "10A", "Dinoyo"),
                    array("Anton", 25, "15A", "Dinoyo")
                );
                for ($i = 0; $i < count($siswa); $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < count($siswa[0]); $j++) {
                        echo "<td>" . $siswa[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
                
                // Fungsi Menghitung Rata-rata Umur Siswa
                function hitungRata2Umur($siswa)
                {
                    $total = 0;
                    for ($j = 0; $j < count($siswa[0]); $j++) {
                        $total +=  $siswa[$j][1];
                    }
                    $rata = 0;
                    $rata = $total / count($siswa);
                    return $rata;
                }
                ?>
        </table>
            <?php
            echo "<h3>Rata rata umur siswa : " . hitungRata2Umur($siswa) . " tahun </h3>";
            ?>
        </div>
    </body>
</html>