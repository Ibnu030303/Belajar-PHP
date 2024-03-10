<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>

    <!-- <form action="latihan4.php" method="POST">
        Masukan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form> -->

    <!-- // jika form tidak memiliki isi dari action maka dia akan mengirimkan data nya ke dalam halaman nya dia sendiri -->

    <?php if (isset($_POST["submit"])) : ?>
        <h1>Hallo selamat datang <?= $_POST["nama"] ?></h1>
    <?php endif; ?> 
    
    <!-- //jika nama pada from blm di isi maka dia akan mevalidasi isset tombol submit itu blm di isi maka tidak tampilkan apa apa dan sebaliknya jika tomobol submit itu udah ada isinya maka akan tampilkan isinya -->

    <form action="" method="POST">
        Masukan Nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>