<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK102</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

// Inisialisasi nilai jari-jari
$jari_jari = 4.2;

// Menghitung volume bola
$volume = (4/3) * pi() * pow($jari_jari, 3);

// Tampilkan hasil dengan 3 desimal dibelakang koma
echo "Volume bola: " . number_format($volume, 3) . " m<sup>3</sup>";

?>

</body>
</html>