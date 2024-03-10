<?php

require_once 'functions.php';

$id = $_GET['id'];

$query = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE Id=$id");
$row = mysqli_fetch_assoc($query);

if (isset($_POST["submit"])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($connection, "UPDATE mahasiswa SET Nama='$nama', NIM='$nim', Jurusan='$jurusan' WHERE Id=$id ");

    if ($query) {
        echo "
            <script>
                alert('Edit Berhasil');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Edit Gagal');
            </script>
        ";
    }
}

?>

<form action="" method="POST">

    <input type="hidden" value="<?= $row['Id'] ?>" name="id">
    <input type="text" value="<?= $row['Nama'] ?>" name="nama">
    <input type="text" value="<?= $row['NIM'] ?>" name="nim">
    <input type="text" value="<?= $row['Jurusan'] ?>" name="jurusan">

    <button type="submit" name="submit">Edit</button>
</form>