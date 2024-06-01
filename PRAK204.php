<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
</head>
<body>
<?php
$nilai = $ejaan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];

    if ($nilai >= 100 && $nilai < 1000){
        $ejaan = "Ratusan";
    }
    elseif ($nilai >= 1000){
        $ejaan = "Anda Menginput Melebihi Limit Bilangan";
    }
    elseif ($nilai >= 20 && $nilai < 100) {
        $ejaan = "Puluhan";
    }
    elseif ($nilai >= 10 && $nilai < 20) {
        $ejaan = "Belasan";
    }
    elseif ($nilai < 10) {
        $ejaan = "Satuan";
    }
    elseif ($nilai == 0) {
        $ejaan = "Nol";
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nilai: <input type="text" name="nilai" value="<?php echo $nilai; ?>">
    <br>
    <input type="submit">
</form>
</body>
<?php
echo "<h2>Hasil: $ejaan</h2>";
?>