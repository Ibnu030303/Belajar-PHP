<?php 

    $name = $_POST['name'];
    $NIM = $_POST['NIM'];
    $jurusan = $_POST['jurusan'];

    require_once '../../connection.php';

    $query = mysqli_query($connection, "INSERT INTO mahasiswa VALUES('', '$name', '$NIM', '$jurusan')");

    if($query) {
        echo "<script> alert('Data Berhasil Disimpan'); window.location.href ='../dashboard.php?page=data'</script>";
    } else {
        echo "<script> alert('Data Gagal Disimpan'); window.location.href ='../dashboard.php?page=data'</script>";
    }
?>