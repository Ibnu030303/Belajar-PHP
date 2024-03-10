<!-- <?php 

    // array 
    // membuat array associative

    $hari = array("Senin", "Selasa", "Rabu");
    $bulan = ["Januari", "Februari", "Maret"];
    $arr = [100, "Teks", true];

    // menampilkan array
    // versi debuging
    var_dump($hari);
    echo "<br>";
    print_r($bulan);

    // menampilkan satu elemen pada array
    echo $arr[0]
?>   -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
</head>
<style>
    .kotak {
        width: 30px;
        height: 30px;
        text-align: center;
        background-color: green;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 1s;
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }
</style>
<body>
    <?php 
        $angka = [
            [1,2,3], 
            [4,5,6], 
            [7,8,9]
        ];

        // echo $angka[2][2];
    ?>

    <?php foreach($angka as $a) : ?>
        <?php foreach($a as $b) :?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>