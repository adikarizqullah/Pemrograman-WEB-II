<html>
<head>
    <title>PRAK305</title>
</head>
<body>

<form action="" method="post">
    <label for="string">Masukkan String:</label>
    <input type="text" id="string" name="string"><br><br>
    <input type="submit" value="Cetak">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $huruf = $_POST["string"];
    $length = strlen($huruf);
    $output = '';

    for ($i = 0; $i < $length; $i++) {
        $char = $huruf[$i];
        $upcase_char = strtoupper($char);
        $lowcase_chars = strtolower($char);
        $output .= $upcase_char . str_repeat($lowcase_chars, 6);
    }
    echo $output;
}
?>
</body>
</html>