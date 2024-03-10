<?php 

    $Id = isset($_GET['id']) ? $_GET['id']: '';

    require_once '../../connection.php';

    $query = mysqli_query($connection, "DELETE FROM mahasiswa WHERE Id=$Id");

    if($query) {
        echo "<script>alert('Data Berhasil Dihapus'); window.location.href ='../dashboard.php?page=data'</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus'); window.location.href = '../dashboard.php?page=data'</script>";
    }

?>