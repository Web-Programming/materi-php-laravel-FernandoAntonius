<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1><?php echo "Welcome to PHP -- Selamat Datang di PHP";?></h1>

    <?php
    // VARIABLE
    $jam = 12;
    if ($jam < 12) {
        echo "<h3>Selamat Pagi</h3>";
    } else {
        echo "<h3>Selamat Siang</h3>";
    }

    echo "<br>";
    // VARIABLE ARRAY
    $hobi = ['Makan', 'Minum', 'Tidur'];
    var_dump(value: $hobi);
     echo "<br>";
    if (is_array(value: $hobi)) {
        echo "Hobi Saya Ada ". count(value: $hobi); 
    }

    echo "<br>";
    // TIPE DATA NULL
    $nilaiuts = NULL;
    if (is_null(value: $nilaiuts)) {
        echo "Nilai UTS Belum Keluar";
    } else {
        echo "Nilai UTS Sudah Keluar";
    }
    ?>
    
</body>
</html>