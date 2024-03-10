<?php 

    include_once 'functions.php';

    if (isset($_POST["register"])) {
        if (registrasi($_POST) > 0) {
            echo "
                <script>
                    alert('Registrasi Berhasil')
                </script
            ";
        } else {
            echo mysqli_error($connection);
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>

<style>
    label {
        display: block;
    }
</style>

<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="">Username : </label>
                <input type="text" name="username" placeholder="Maasukan Username">
            </li>
            <li>
                <label for="">Password : </label>
                <input type="password" name="password" placeholder="Maasukan password">
            </li>
            <li>
                <label for="">Confirm Password : </label>
                <input type="password" name="password2" placeholder="Maasukan Username">
            </li>
            <li>
                <button type="submit" name="register">Registrasi</button>
            </li>
        </ul>
    </form>
</body>

</html>