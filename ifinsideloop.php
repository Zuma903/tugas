<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tugas If Inside Loop</title>

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

        <h3 class="judul" >ini tugas If Inside Loop</h3>

            <hr>

        <p style="font-style: italic; margin-left: 35px;">Date 24-10-2019</p>

            <hr>

        <h3 class="judul">Soal :</h3>

            <p>Membuat perulangan untuk mengeluarkan tulisan "umur saya sekarang 1 tahun" "umur saya sekarang 2 tahun" dan seterusnya sampai 20 tahun. Ketika menampilkan usia 17 tahun maka akan ditambah tulisan "saya sudah dewasa" menggunakan if</p>

        <h3 class="judul">Jawab :</h3>

        <?php 

            for ($z=1; $z <=20; $z++) {
                echo "<br><br>Umur saya sekarang ".$z." tahun";
                    if ($z==17) {
                        echo ", Saya sudah dewasa";
                    }
            }


        ?>

    </div>
    
</body>
</html>