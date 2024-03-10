<?php

// koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari table mahasiswa
$result = mysqli_query($connection, "SELECT * FROM mahasiswa");

// ambil data mahasiswa dari object result (fatch)
// mysqli_fatch_row() // mengembalikan nilai array index key numerik
// mysqli_fatch_assoc() // mengembalikan nilai array index key assosiative
// mysqli_fatch_array() // mengembalikan nilai array index key numerik dan assosiative, kekurangannya adalah data yang akan tampil double data array numerik dan assosiative
// mysql_fatch_object() // mengembalikan nilai array index key menggunakan object biasnaya menggunakan tanda -> contoh $mhs -> nama index keynya 

// while ( $mhs = mysqli_fetch_assoc($result) ) {

//     var_dump($mhs);

// };


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $no = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td><?= $no; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="img/<?= $row["gambar"]; ?> " alt="" width="50px" height="50px">
                </td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $no++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>