<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan | tampil dua dimensi</title>
</head>
<body>
    <p><b>Kitab - kitab Ulama Salaf yang perlu dibaca:</b></p>
    <?php
        $no =1;
        foreach ($kitab as $data) {
            echo $no++.". ".$data['Judul'].", ".$data['Pengarang'].", Rp. ".number_format($data['Harga'],0,',','.').",-<br>";
        }
    ?>
</body>
</html>