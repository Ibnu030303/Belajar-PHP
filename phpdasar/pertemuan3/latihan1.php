<?php 

    // Pengulangan
    // for
    // while 
    // do .. while 
    // foreach : perungan khusus array

    // for($i = 0; $i < 5; $i++) {
    //     echo "Hello Ibnu <br> ";
    // }

    // $i = 10;
    // while($i < 5) {
    //     echo "Hello World <br>";
    //     $i++;
    // }
    // penggunaan while selama nilai bernilai false maka echo nya tidak akan jalan

    // $i = 10;
    // do {
    //     echo "Hello World";
    //     $i++;
    // } while ($i < 5 );
    // // penggunaan do while jika nilainya bernilai false maka dia akan mejalankan atau mencetak echo hanya 1 yang tampil berbeda dengan whiile jika bernialai false maka tidak akan tampil sama sekali

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .warna-baris {
        background-color: silver;
    }
    .warna-kolom {
        background-color: silver;
    }
</style>
<body>
    <!-- <table border="1" cellpadding="10" collspacing="8">
        <?php 
            for($i = 1; $i <= 3; $i++) {
                echo "<tr>";
                    for($j=1; $j <=5; $j++) {
                        echo "<td>$i, $j</td>";
                    }
                echo "<tr>";
            }
        ?>
    </table> -->

    <table border="1" cellpadding=10 cellspacing=4>
        
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) { ?>
                    <td><?= "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php endfor; ?>

    </table>
</body>
</html>