<?php

    sleep(1);

    require_once '../functions.php';

    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE 
                        nama LIKE '%$keyword%' OR 
                        nim LIKE '%$keyword%' OR
                        email LIKE '%$keyword%' OR
                        jurusan LIKE '%$keyword%'
            ";
    $mahasiswa = query($query);

?>

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