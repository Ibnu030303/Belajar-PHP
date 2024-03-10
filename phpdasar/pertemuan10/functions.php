<?php

    // koneksi ke database
    $connection = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query) {

        global $connection; 

        $result = mysqli_query($connection, $query);

        $rows =[];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {

        global $connection; 

        // ambil data dari tiap elemen dalam form
        $nim = htmlspecialchars($data["nim"]) ;
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query inser data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";

        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection);
    }

    function hapus($id) {
        global $connection;

        mysqli_query($connection, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($connection);
    }
?>