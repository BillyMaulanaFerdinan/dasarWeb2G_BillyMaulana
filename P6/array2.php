<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial;
                text-align: center;
                color: white;
                background-color: #000;
            }
            .c1 {
                border-style: outset;
                border-color: white;
                width: 30%;
                margin: 50px auto;
                background-color: #232231;
                padding: 20px;
                box-sizing: border-box;
                display: flex;
                color: white;
            }
            .data {
                margin: 0 auto;
            }
        </style>
        <title></title>
    </head>
    <body>
        <h2>Data Dosen</h2>
        <div class="c1">
            <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
            
            echo "<div class='data'>Nama : {$Dosen['nama']} <br>";
            echo "<div class='data'>Domisili : {$Dosen['domisili']} <br>";
            echo "<div class='data'>Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
            ?>
        </div>
    </body>
</html>