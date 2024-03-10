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

        // upload gambar
        $gambar = upload(); 
        if  (!$gambar) {
            return false;
        }

        // query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";

        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection);
    }

    function upload() {

        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpname = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang di upload
        if ($error === 4) {
            echo "
                <script>
                    alert('Pilih gambar terlebih dahulu');
                </script>
            ";

            return false;
        }

        // cek apakah yang di upload adalah gamabr atau bukan
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

        $ekstensiGambar = explode('.', $namafile);
        $ekstensiGambar = strtolower(end($ekstensiGambar)) ;

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "
                <script>
                    alert('Yang Anda Upload Bukan Gambar');
                </script>
            ";

            return false;
        }

        // cek jika ukurannya terlalu besar
        if ($ukuranfile > 1000000 ) {
            echo "
                <script>
                    alert('Ukuran Gambar Terlalu Besar');
                </script>
            ";

            return false;
        }

        // lolos pengecekan gambar siap upload
        // generate nama gamabr baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpname, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function hapus($id) {
        global $connection;

        mysqli_query($connection, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($connection);
    }

    function ubah($data) {

        global $connection;

        // ambil data dari tiap elemen dalam form
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        $gambarLama = $data["gambarLama"];

        // cek apakah user pilih gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        // query insert data
        $query = "UPDATE mahasiswa SET 
                    nim = '$nim',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                 
                 WHERE id = $id;
        
        ";

        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection);
    }

    function cari($keyword) {

        $query = "SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR 
                    nim LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%'
        ";

        return query($query);
    }

    function registrasi($data) {
        global $connection;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($connection, $data["password"]);
        $password2 = mysqli_real_escape_string($connection, $data["password2"]);

        // cek username sudah di pakai atau belum
        $result = mysqli_query($connection, "SELECT username FROM user WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert('Username sudah terdaftar');
                </script>
            ";

            return false;
        }

        // cek konfirmasi password
        if ($password !== $password2) {
            echo "
                <script>
                    alert('Konfirmasi password tidak sesuai');
                </script>
            ";

            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan user baru ke database
        mysqli_query($connection, "INSERT INTO user VALUES ('', '$username', '$password')");

        return mysqli_affected_rows($connection);
    }
?>