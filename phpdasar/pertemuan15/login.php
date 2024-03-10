<?php 

    require_once 'functions.php';

    if (isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'" );

        // cek username
        if (mysqli_num_rows($result) === 1) {

            // cek password
            $row = mysqli_fetch_assoc($result);
        
            if (password_verify($password, $row["password"])) {
                header("Location: index.php");
                exit;
            }
        } 

        $error = true;
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if ( isset($error) ) :?>
        <p style="color: red; font-style: italic;">Username / password salah</p>
    <?php endif; ?>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Masukan Username</label>
                <input type="text" placeholder="Masukan Username" name="username" id="username">
            </li>
            <li>
                <label for="password">Masukan password</label>
                <input type="password" placeholder="Masukan password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>