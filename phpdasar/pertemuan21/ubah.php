<?php

    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
    }   

    require_once 'functions.php';

    // ambil data dari url
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // cek apakah tombol submit sudah di tekan atau belum
    if (isset($_POST["submit"])) {

        // cek apakah data berhasil di tambahkan atau tidak
        if (ubah($_POST) > 0) {
            echo "
                    <script>
                        alert('Data Berhasil Di Edit');
                        document.location.href = 'index.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Data Gagal Di Edit');
                        document.location.href = 'index.php';
                    </script>
                ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa </title>
</head>

<body>
    <h1>Edit data mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>

            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <br>
                <img src="img/<?= $mhs["gambar"] ?>" style="width: 50px; height: 50px;">
                <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
</body>

</html>