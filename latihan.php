<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP</title>
</head>
<body>
    <h2>1. Menghitung Umur</h2>
    <?php
    $tanggal_lahir = "2006-08-28";
    $today = date("Y-m-d");
    $umur = date_diff(date_create($tanggal_lahir), date_create($today));
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Umur: " . $umur->y . " tahun";
    ?>

    <hr>

    <h2>2. Mengkonversi USD ke IDR</h2>
    <?php
    $usd = 100; // contoh jumlah USD
    $kurs = 15500; // nilai tukar USD ke IDR
    $idr = $usd * $kurs;
    echo "$usd USD = Rp " . number_format($idr, 0, ',', '.');
    ?>

    <hr>

    <h2>3. Mengkonversi Suhu Celcius ke Fahrenheit</h2>
    <?php
    $celcius = 30;
    $fahrenheit = ($celcius * 9/5) + 32;
    echo "$celcius °C = $fahrenheit °F";
    ?>

    <hr>

    <h2>4. Menghitung Luas Lingkaran</h2>
    <?php
    $jari_jari = 7;
    $luas = pi() * pow($jari_jari, 2);
    echo "Luas lingkaran dengan jari-jari $jari_jari = " . round($luas, 2);
    ?>

</body>
</html>
