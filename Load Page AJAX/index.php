<?php 
    $servername = "localhost";
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan password database Anda
    $dbname = "php"; // Ganti dengan nama database Anda

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $result = mysqli_query($conn, "SELECT * FROM categories");

    if (isset($_POST["submit"])) {
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $date = $_POST['date'];

        // Ubah format tanggal ke format yang sesuai dengan MySQL ('YYYY-MM-DD')
        $formatted_date = date('Y-m-d', strtotime($date));

        $query = "INSERT into categories (nama, deskripsi, date) VALUES ('$nama', '$deskripsi', '$formatted_date')";

        if (mysqli_query($conn, $query)) {
            echo "<meta http-equiv='refresh' content='0'>"; // Auto-refresh halaman setelah 0 detik
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load Page AJAX</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body onload="hide_loading();">

    <div class="loading overlay">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <h2>Membuat Load Page AJAX</h2>

    <form id="form_data" action="" method="POST">
        <input type="text" id="nama" name="nama" placeholder="Nama">
        <input type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
        <input type="date" name="date">
        <input type="submit" name="submit" value="Tambah Data">
    </form>

    <br>
    <br>
   
    <table id="data_database" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Date</th>
            </tr>
        </thead>
             <?php foreach ($result as $row) :?>
                <tbody id="data_database">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td><?= $row['date'] ?></td>
                </tbody>
            <?php endforeach; ?>
    </table>
 

    <br>
    <br>

    <button onclick="tampil_data_ajax_api()" id="#data_ajax_api">Load Data Ajax From API</button>
    <button onclick="tampil_data_ajax()" id="#data_ajax">Load Data Ajax From Database</button>
    <br>
    <br>


    <div id="sidebar">
        <table id="data_table" border="1">
            <thead>
            </thead>
            <tbody id="data_body">
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>