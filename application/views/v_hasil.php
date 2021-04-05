<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilaln | v_hasil</title>
</head>
<body>
    <?php
        $jumlah = 0;
        foreach ($larik as $nilai) {
            if($nilai != 5){
                echo $nilai."+";
            }else{
                echo $nilai;
            }
            $jumlah += $nilai;
        }
        echo "=".$jumlah;
    ?>
</body>
</html>