<?php 
    // Pertemuan 2 - PHP Dasar 
    // Sintaks PHP 

    // Standar Output 
    // echo, print 
    // print_r 
    // var_dump 

    // echo "Ibnu Nurdiyansa";

    // print "Ibnu Nurdiyasa";

    // printf("Ibnu Nurdiyasa");

    // var_dump("ibnu nurdiyansa") //untuk mencetak tipe data beserta panjang karakter

    // Penulisan Sintaks PHP 
    // 1. PHP di dalam HTML 
    // 2. HTML di dalam PHP

    //Variable dan Tipe data
    // Variable

    // $nama = "Nurdiyansa";

    // echo "Hallo $nama";
    // echo 'Haloo Selamat datang $nama'; //interpolasi jika echo menggunakan kutip satu dan di dalam nya ada variable maka dia akan mencetak variable tersebut ke dalam layar bukan isi dari variable nya

    // Operaotr
    // aritmatika
    // // + - * / %
    // $x = 10;
    // $y = 20;
    // echo $x * $y;

    // operator penggabung string atau concatenation/concat
    // .
    // $nama_depan = "Ibnu";
    // $nama_belakang = "Nurdiyansa";
    // echo $nama_depan . $nama_belakang;
    // echo $nama_depan . " " .  $nama_belakang; // untuk membaeri jarak spasi

    // assignment
    // *, +=, -=, *=, /=, %=, .=
    // $x = 1;
    // $x += 5;
    // echo $x;

    // $nama = "Ibnu";
    // $nama .= " ";
    // $nama .= "Nurdiyansa";
    // echo $nama;

    // Perbandingan
    // <, >, <=, >=, ==, !=
    // var_dump(1 == 5);
    // var_dump(1 == "1"); //hasil = true
    // // apakah 1 sama dengan string satu = true karna operator perbandingan hanya mencek nilainya aja walaupun tipe datanya berbeda

    // // Identitas
    // // ===, !== 
    // // operator identitas mencek nilai beserta tipe datanya
    // var_dump(1 === "1"); //hasil = false karna tipe datanya berbeda yang satu number yang satu agi string

    // // Operator Logika
    // // &&, ||, !
    // $x = 30;
    // // var_dump($x < 20 && $x % 2 == 0); 
    // // // operator && kedua nilainya harus bernilai benar

    // var_dump($x < 20 || $x % 2 == 0); 
    // // operator or || jika salah satu kondisi atau nialainya bernailai benar maka hasilnya aka benar


?>

<!-- Penulisan Sintak PHP -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo, Selamat Datang <?php echo "Ibnu"?></h1>
    <?php 
        echo "<h1> Hallo, Selamat  Ibnu</h1>";
    ?>
</body>
</html> -->