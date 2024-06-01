<html>
<head>
    <title>PRAK303</title>
    <style>
        .bintang {
            width: 25px;
            height: auto;
            margin-bottom: 5px; 
        }
    </style>
</head>
<body>
    <h1>Deret Bilangan</h1>
    <form action="" method="post">
        <label for="bawah">Batas Bawah:</label>
        <input type="number" id="bawah" name="bawah" required><br><br>
        <label for="atas">Batas Atas:</label>
        <input type="number" id="atas" name="atas" required><br><br>
        <input type="submit" value="Cetak">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bawah = (int) $_POST['bawah'];
        $atas = (int) $_POST['atas'];

        echo "<table>";
        do {
            $bilangan = $bawah;
            if (($bilangan + 7) % 5 == 0) {
                echo "<td><img class='bintang' src='Gambar/Bintang.png' alt='' /></td>";
            } else {
                echo "<td>$bilangan</td>";
            }
            $bawah++;
        } while ($bawah <= $atas);
        echo "</table>";
    }
    ?>
</body>
</html>