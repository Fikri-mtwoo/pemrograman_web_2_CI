<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan | tampil</title>
</head>
<body>
    <p><b>Sikap</b> yang harus dimiliki <b>mahasiswa:</b></p>
    <ol type="i">
       <?php
        foreach ($sikap as $value) {
            echo "<li>".$value."</li>";
        }
    ?>
    </ol>
</body>
</html>