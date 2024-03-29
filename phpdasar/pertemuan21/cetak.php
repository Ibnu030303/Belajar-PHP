<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();

$html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="css/print.css">
    </head>
    <body>
        <h1 style="text-align: center;">Daftar Mahasiswa</h1>

        <table border="1" cellpadding="10" cellspacing="0" align="center">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>';

            $i = 1;
            foreach ($mahasiswa as $row) {
                $html .=  '<tr>
                    <td style="text-align: center;">'. $i++ . '</td>
                    <td> <img src="img/'. $row["gambar"] . ' " width=50 height=50> </td>
                    <td>' . $row["nim"] . '</td>
                    <td>' . $row["nama"] . '</td>
                    <td>' . $row["email"] . '</td>
                    <td>' . $row["jurusan"]. '</td>
                </tr>
                ';
            }

        $html .= '</table>
    </body>
    </html>
';

$mpdf->WriteHTML($html);
$mpdf->Output('Data Mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);

?>