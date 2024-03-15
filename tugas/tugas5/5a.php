<?php
$mahasiswa = [
    [
        "Nama" => "Amaliyah Nur Haida Jum'ati",
        "Nim" => "233040082",
        "Email" => "amaliyahnurhaida.223040082@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "ama.jpg"
    ],
    [
        "Nama" => "Icha Aprilia Putri",
        "Nim" => "233040108",
        "Email" => "ccha.233040108@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "ica.jpg
        "
    ],
    [
        "Nama" => "Maelani Ningrum",
        "Nim" => "233040164",
        "Email" => "maelaniningrum.233040164@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "maelani.jpg
        "
    ],
    [
        "Nama" => "Firda Faridatul Fajriyanti",
        "Nim" => "233040098",
        "Email" => "Firda.233040098@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "firda.jpg
        "
    ],
    [
        "Nama" => "Dian Astri",
        "Nim" => "233040085",
        "Email" => "dian.233040085@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "dian.jpg
        "
    ],
    [
        "Nama" => "Meta Cantika Dewi",
        "Nim" => "233040071",
        "Email" => "meta.233040071@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "meta.jpg
        "
    ],
    [
        "Nama" => "Desi Hafita Asri",
        "Nim" => "233040045",
        "Email" => "desi.233040045@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "desi.jpg"
    ],
    [
        "Nama" => "Dwi Yulianti",
        "Nim" => "233040059",
        "Email" => "dwi.233040059@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "dwi.jpg
        "
    ],
    [
        "Nama" => "Silma Tsania Nurassy",
        "Nim" => "233040061",
        "Email" => "silma.233040061@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "silma.jpg
        "
    ],
    [
        "Nama" => "Stephen Curry",
        "Nim" => "233040100",
        "Email" => "stephen.233040052@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "gambar" => "curry.jpg"
    ],
    [
        "Nama" => "Ali Agrem",
        "Nim" => "233040000",
        "Email" => "Ali.233040000@mail.abangda.ac.id",
        "Jurusan" => "Teknik Ancaman",
        "gambar" => "ali.jpg
        "
    ]

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <li>NAMA : <?= $mhs["Nama"]; ?></li>
            <li>NIM : <?= $mhs["Nim"]; ?> </li>
            <li>EMAIL : <?= $mhs["Email"]; ?></li>
            <li>JURUSAN :<?= $mhs["Jurusan"]; ?> </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>