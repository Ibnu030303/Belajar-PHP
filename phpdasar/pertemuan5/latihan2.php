<?php 

    // perulangan pada array
    // for / foreach
    
    $angka = [2,3,4,1,5,66,5,23];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }

    .clear {clear: both;}
</style>
<body>
    <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?= $angka[$i]?></div>
    <?php } ?>
    <!-- // count untuk menghitung otomatis jumlah array jika variable angka kita tambah nilai nya maka otomatis angkanya akan bertambah -->

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?= $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a ) :?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach;?>
</body>
</html>