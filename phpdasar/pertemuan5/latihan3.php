<?php

$mahasiswa = ["ibnu", "021231", "Teknik", "email"];

// jika memiliki data banyak di dalma sebuah array di sebutnya adalah array multidimensi atau array di dalam array

$mahasiswa1 = [
    ["ibnu", "021231", "Teknik", "email"],
    ["penul", "02123211", "Teknik", "penul@gmial.com"], 
    ["Mahasisawa", "200123", "Informatika", "mahasiswa email"]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <!-- <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>

        <li><?= $mahasiswa[0] ?></li>
        <li><?= $mahasiswa[1] ?></li>
        <li><?= $mahasiswa[2] ?></li>
        <li><?= $mahasiswa[3] ?></li> -->

        <?php foreach ($mahasiswa1 as $mhs) : ?>
            <li>Nama : <?= $mhs[0] ?></li>
            <li>NIM : <?= $mhs[1] ?></li>
            <li>Jurusan : <?= $mhs[2] ?></li>
            <li>Email : <?= $mhs[3] ?></li> 
        <?php endforeach; ?>

    </ul>
</body>

</html>