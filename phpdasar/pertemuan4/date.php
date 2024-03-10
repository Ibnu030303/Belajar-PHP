<?php 
    // date
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, dd-M-Y");

    // Time
    // UNIX Timestamp / epoch time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();

    // echo date("d M Y",  time()+60*60*24*2)
    // untuk mengetahui 2 hari kedepan adalah hari apa dalam detik 
    // 60 = dektik dalam 1 menit
    // 60 = menit dalam satujam
    // 24 = waktu jam dalam 1 hari
    // 2 = hari yang mau di tentuin kedepan atau kebelakang menggunakan tandda plus atau minus

    // mktime
    // membuat sendiri detik 
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // untuk mengetahui tanggal lahir kita 
    // echo date("l", mktime(0,0,0,3,3,2003)); 

    // strtotime
    // echo date("l", strtotime("3 march 2003"));
    // sama seperti mktime hanya strtotime menggunkan array

    // String
    // strlen() untuk menghitung panjang dari sebuah string
    // strcmp() untuk membandingkan 2 buah string
    //explode() untuk memecah sebuah string menjadi sebuah array
    // htmlspecialchars() untuk menjaga halaman web

    // utility atau fungsi bantuan
    // var_dump() untuk mencetak isi dari sebuah variable array objek, 
    // isset() untuk mencek sebuah variable sudah di guanakan atau belum yang akan menghasilkan true dan false
    // emty() untuk mencek sebuah variable ada isinya atau tidak
    // die() untuk memberhentikan sebuah program
    // sleep() untuk memberhentikan sementara

?>