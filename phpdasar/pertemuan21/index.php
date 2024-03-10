<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require_once 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tomblo cari di tekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <style>
        .loader {
            width: 30px;
            position: relative;
            top: 10px;
            left: 10px;
        }
    </style>
</head>

<body>
    <a href="logout.php">Logout</a>
    <br>
    <br>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah_data.php">Tambah Data Mahasiswa</a> || <a href="cetak.php" target="_blank">Cetak Data</a>
    <br>
    <br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="35" autofocus placeholder="Masukkan Keyword Pencarian" id="keyword" autocomplete="off">
        <button type="submit" id="cari" name="cari">Cari</button>

        <!-- Tambahkan style="display: none;" pada elemen loader untuk menyembunyikan awalnya -->
        <img src="img/loader.gif" class="loader" id="loader" style="display: none;">
    </form>
    <br>

    <div class="" id="container">
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
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?> ">Ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ingin mengapus <?= $row['nama'] ?>')">Hapus</a>
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
            <?php endforeach; ?>
        </table>
    </div>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>