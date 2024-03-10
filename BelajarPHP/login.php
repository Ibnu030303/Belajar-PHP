<?php

session_start();

require_once 'connection.php';

if (isset($_POST['login'])) {
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $query = mysqli_query($connection, "SELECT * FROM user WHERE Username='$Username' AND Password='$Password'");

    $data = mysqli_fetch_array($query);
    $cekdata = mysqli_num_rows($query);

    if ($cekdata > 0) {
        if ($data['Level'] == "admin") {
            $_SESSION["login"] = true;
            header("Location: admin/index.php");
            exit;
        } else {
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    } else {
        echo "<script>alert('Login Gagal'); window.location.href = 'login.php#login'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelajarPHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#"> BelajarPHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=data"></a>
                    </li>
                </ul>
                <div class="buton">
                    <a href="#login" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="index">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1>Selamat Datang Di Universitas Kita</h1>
                    <h3 class="mt-3">Mari Kita Sama Sama Belajar PHP</h3>
                    <div class="sosmed mt-4">
                        <img src="https://pngimg.com/uploads/php/php_PNG35.png" alt="">
                        <img src="https://www.freepnglogos.com/uploads/html5-logo-png/html5-logo-css-logo-png-transparent-svg-vector-bie-supply-9.png" alt="">
                        <img src="https://cdn0.iconfinder.com/data/icons/social-network-9/50/22-1024.png" alt="">
                        <img src="https://www.freepnglogos.com/uploads/javascript-png/png-javascript-badge-picture-8.png" alt="">
                    </div>
                </div>
                <div class="col-7">
                    <img src="https://www.pngmart.com/files/11/Information-Technology-Download-PNG-Image.png" class="img">
                </div>
            </div>
        </div>

        <div class="overlay" id="login">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3 class="text-center mt-4 mb-5">Please Login to Yout Account</h3>
                        <form action="" method="POST">
                            <div class="mb-4">
                                <input type="text" name="username" placeholder="Username" id="name" class="form-control" required autofocus>
                            </div>
                            <div class="mb-4">
                                <input type="password" name="password" placeholder="Password" class="form-control" id="nim" required>
                            </div>
                            <div class="input-group mb-4">
                                <input type="checkbox" name="" id="">
                                <span class="ms-2">Remember Me</span>
                                <a href="" style="position: absolute; right: 0; color: red;">Forget Password ? </a>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="login" id="login" class="btn btn-primary form-control">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>