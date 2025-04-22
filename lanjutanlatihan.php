<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>5. Menampilkan List Perkalian 1 sampai 5</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Perkalian $i:<br>";
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j) . "<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>