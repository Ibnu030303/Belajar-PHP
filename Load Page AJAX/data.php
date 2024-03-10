<?php
    // Buat koneksi ke database
    $servername = "localhost";
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan password database Anda
    $dbname = "php"; // Ganti dengan nama database Anda

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query data dari database (misalnya, ambil nama-nama kategori)
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($conn, $sql);

    // Buat array untuk menyimpan hasil
    $categories = array();

    // Tambahkan hasil query ke dalam array
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row;
    }

    // Tutup koneksi database
    mysqli_close($conn);

    // Mengembalikan data dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($categories);
?>