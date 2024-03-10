<?php 

    $Id = $_POST['id'];
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Level = $_POST['level'];

    require_once '../../connection.php';

    $query = mysqli_query($connection, "UPDATE user SET Username='$Username', Password='$Password', Level='$Level' WHERE id=$Id");

    if($query) {
        echo "<script>alert('Edit User Berhasil'); window.location.href = '../index.php?page=register'</script>";
    } else {
        echo "<script>alert('Edit User Gagal'); window.location.href = '../index.php?page=register'</script>";
    }
?>