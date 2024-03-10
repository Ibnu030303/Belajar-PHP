<?php 

    // $mahasiswa = [
    //     ["Ibnu", "01231913", "Informatika", "ibnu@gmail.com"],
    //     ["Penul", "01231932", "Informatika", "penul@gmail.com"]
    // ];


    // array assosiative
    // definisinya sama seperti array numerik keculai,
    // key nya adalah string yang kita buat sendiri

    $mahasiswa = [
        [
            "nim" => "2101203",
            "email" => "ibnu@gmail.com",
            "nama" => "Ibnu",
            "jurusan" => "informatika", 
            "gambar" => "ibnu.JPG"
        ],

        [
            "nama" => "penul",
            "nim" => "21221",
            "email" => "penul@gmail.com",
            "jurusan" => "informatika",
            "tugas" => [80, 90, 100],
            "gambar" => "penul.JPG"
        ]
    ];

    // echo $mahasiswa["jurusan"]
    // echo $mahasiswa[1]["email"]; // output penul@gmail.com //angka 1 adalah key index
    echo $mahasiswa[1]["tugas"][1]; // output angka 90
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" style="width: 100px; height: 100px;" >
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>