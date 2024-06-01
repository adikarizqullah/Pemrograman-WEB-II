<?php
$nilai_input = $panjang = $lebar = "";
$k = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai_input = $_POST['nilai'];
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = explode(" ", $nilai_input);
    $nilai_array = [];
}
?>
<html>
<head>
    <title>PRAK401</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label for="panjang">Panjang:</label>
        <input type="text" id="panjang" name="panjang" value="<?php echo $panjang; ?>"><br><br>
        
        <label for="lebar">Lebar:</label>
        <input type="text" id="lebar" name="lebar" value="<?php echo $lebar; ?>"><br><br>
        
        <label for="nilai">Nilai:</label>
        <input type="text" id="nilai" name="nilai" value="<?php echo $nilai_input; ?>"><br><br>
        
        <input type="submit" value="Cetak">
    </form>
<?php
if (!empty($nilai) && count($nilai) != $panjang * $lebar) {
    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
} else {
    echo "<table border='1' style='width: 10%; height:15%;'>";
    for ($i = 0; $i < $panjang; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $lebar; $j++) {
            $nilai_array[$i][$j] = $nilai[$k++];
            echo "<td>" . $nilai_array[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>