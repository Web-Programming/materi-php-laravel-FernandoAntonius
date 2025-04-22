<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <?php
    // Menghitung Umur
    $umur = 2025 - 2007;
    echo "Umur = $umur";

    // Menkonversi USD ke IDR
    echo "<br>";
    $usd = 10;
    $idr = 16800 * $usd;
    echo "USD = $$usd dan IDR = Rp. $idr";

    // Menkonversi Celcius ke Fahrenheit
    echo "<br>";
    $celcius = 32;
    $fahrenheit = ($celcius * 1.8) + 32;
    echo "Celcius = $celcius °C dan Fahrenheit = $fahrenheit °F";

    // Menghitung Luas Lingkaran
    echo "<br>";
    $jarijari = 2;
    $pi = 3.14;
    $luaslingkaran = $jarijari * $jarijari * $pi;
    echo "Luas Lingkaran = $luaslingkaran"

    ?>
</body>
</html>