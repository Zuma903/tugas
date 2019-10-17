<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tugas Percabangan</title>

    <style>
        .container {
            width: 960px;
            margin: auto;
            border: 3px black solid;
            padding: 30px;
            background-color: silver;
        }

        .judul {
            font-style: bold;
            text-align: center;
            margin-bottom: 70px;
        }

        p {
            text-align: left;
            margin: 5px;
        }

    </style>

</head>
<body>

    <div class="container">

        <h1 class="judul">Nama</h1>

        <?php

            $nama = "Rahmat Wahyuma Akbar";
            $kelas = "X-RPL 1";
            $absen = "31";

        ?>

        <p>Halo!. Perkenalkan nama saya <?= $nama ?></p>

        <p>Saya kelas <?= $kelas ?></p>

        <p>Nomor absen saya di Kelas, nomor <?= $absen ?></p>

        <h3 class="judul" >ini tugas Percabangan</h3>

        <hr>

        <?php 

            $bmbg = "Bambang";
            $a = 98;
            
            $p = 7;
            $l = 7;
            $t = 2;

            $v = $p*$l*$t;
        ?>

        <p>Pak <?= $bmbg ?> mempunyai air dengan volume <?= $a ?></p>

        <p>jika volume wadah 98 maka keluar tulisan "pas"</p>

        <p>jika kurang dari 98 maka keluar tulisan "tumpah"</p>

        <p>jika lebih dari 98 maka keluar tulisan "sisa"</p>

        <h5 class="judul">Hasil :</h5>
        
        <?php
            if($v > 98) {
                echo "Sisa";
            } else if($v == 98) {
                echo "Pas"; 
            } else {
                echo "Tumpah";
            }
        ?>

    </div>
    
</body>
</html>