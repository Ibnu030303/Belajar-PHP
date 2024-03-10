<?php 

    // array 
    // variable yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan anatara ket dan value
    // key nya adalah index yang di mulai dari 0

    // membuat arrya
    // cara lama
    $hari = array("Senin", "Selasa", "Rabu", "Kamis");

    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "Tulisan", false];

    // menampilkan array tidak bisa menggunakan echo
    // menggunakan var_dump(), print_r()
    // var_dump($hari); 
    // echo "<br>";
    // echo $hari;
    // print_r($hari);

    // // menampilakan satu elemen pada array untuk menampilkan salahs atu elemen 
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "jumat";
    $hari[] = "Sabtu";
    echo "<br>";
    var_dump($hari);
?>