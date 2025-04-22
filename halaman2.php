<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Welcome to PHP -- Selamat datang di PHP";?></h1>

<?php
    // Variable
    $jam = 12;
    if($jam < 12) {
        echo "<h3>Selamat Pagi</h3>";
    }else{
        echo "<h3>Selamat Siang</h3>";
    }

    // Variable Array
    $hobby = ['Makan', 'Minum', 'Tidur'];
    var_dump(value: $hobby);
    if(is_array(value: $hobby)){
        echo "Hobby saya ada ". count(valeu: $hobby);
    }

    // Tipe Data Null
    $nilaiuts = NULL;
    if(is_null(value: $nilaiuts)){
        echo "Nilai UTS BELUM KELUAR";
    }
?>
</body>
</html>