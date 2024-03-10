<?php

// variable scope / lingkup variable
// variable yang di luar sebuah function berbeda degan variable yang di luar function, jika ingin menggunakan variable di luar function maka menggunakan keyword global
// $x = 10;

// function tampilx() {
//     global $x;
//     // $x = 20;
//     echo $x;
// }

// tampilx();
// echo "<br>";
// echo $x; // output 10

// supperglobal semuanya adalah tipe nya array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// echo $_SERVER["SERVER_NAME"];
// var_dump($_SERVER);

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email= <?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?> "> <?= $mhs["nama"]; ?> </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>