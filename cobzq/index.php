<?php

require_once 'functions.php';

$query = mysqli_query($connection, "SELECT * FROM mahasiswa");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $result = mysqli_query($connection, "DELETE FROM mahasiswa WHERE Id=$id");

    if ($result) {
        echo "
            <script>
                alert('Berhasil Di Delete');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal Di Delete');
            </script>
        ";
    }
}

?>

<a href="">Tambah Data</a>
<br>
<br>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1 ?>
    <?php foreach ($query as $row) : ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row['Id'] ?></td>
            <td><?= $row['Nama'] ?></td>
            <td><?= $row['NIM'] ?></td>
            <td><?= $row['Jurusan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['Id'] ?>">Edit</a>
                <a href="?delete=<?= $row['Id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php $no++; ?>
    <?php endforeach; ?>
</table>