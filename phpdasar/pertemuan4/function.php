<?php 

    // user defined function

    function salam($waktu = "datang", $nama = "admin"){
        return "Selamat $waktu, $nama";
    }

    // dengan membrikan nilai default di function pada variable wkatu dan nama jika pada pemanggilan funtion tidak kita isi 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= salam("pagi","ibnu")?></h1>
    <!-- <h2><?= salam() ?></h2> //parameter nya kosong maka akan di isi dengan parameter default pada function salam yaitu datang dan admin, jika parameter function salam kita isi seperti h1 di atas maka dia akan tetap mencetak nilai yang di isi di parameter  -->
</body>
</html>