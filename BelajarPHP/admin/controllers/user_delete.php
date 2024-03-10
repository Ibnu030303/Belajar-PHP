<?php 

    $Id = isset($_GET['id']) ? $_GET['id']: '';

    require_once '../../connection.php';

    $query = mysqli_query($connection, "DELETE FROM user WHERE id=$Id");

    if($query) {
        echo "<script>alert('User Berhasil Dihapus'); window.location.href='../index.php?page=register'</script>";
    } else {
        echo "<script>alert('User Gagal Dihapus'); window.location.href='../index.php?page=register'</script>";
    }

?>