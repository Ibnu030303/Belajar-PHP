<?php 

    $Id = $_POST['Id'];
    $Name = $_POST['name'];
    $NIM = $_POST['NIM'];
    $Jurusan = $_POST['jurusan'];

    require_once '../../connection.php';

    echo $NIM;

    $query = mysqli_query($connection, "UPDATE mahasiswa SET Nama='$Name', NIM='$NIM', Jurusan='$Jurusan' WHERE id=$Id");

    if($query){
        echo "<script>alert('Data Berhasil Diedit'); window.location.href ='../dashboard.php?page=data'</script>";
    } else {
        echo "<script>alert('Data Gagal Diedit'); window.location.href = '../dashboard.php?page=data'</script>";
    }

?>