<?php 

    $Username = $_POST['username'];
    $Passwword = $_POST['password'];
    $Level = $_POST['level'];

    require_once '../../connection.php';

    $query = mysqli_query($connection, "INSERT INTO user VALUES ('', '$Username', '$Passwword','$Level')");

    if($query) {
        echo "<script>alert('Register Berhasil'); window.location.href = '../index.php?page=register' </script>";
    } else {
        echo "<script>alert('Register Gagal'); window.location.href = '../index.php?page=register'</script>";
    }

?>