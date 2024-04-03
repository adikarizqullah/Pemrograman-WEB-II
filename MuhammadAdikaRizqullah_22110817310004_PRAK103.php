<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK103</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

$celcius = 37.841;

$fahrenheit = round(($celcius * 9/5) + 32, 4);

$reamur = round($celcius * 4/5, 4);

$kelvin = round($celcius + 273.15, 4);

echo "Fahrenheit (F) = " . number_format($fahrenheit, 4, ',', '.') . "<br>";
echo "Reamur (R) = " . number_format($reamur, 4, ',', '.') . "<br>";
echo "Kelvin (K) = " . number_format($kelvin, 4, ',', '.') . "<br>";

?>

</body>
</html>