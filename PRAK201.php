<!DOCTYPE html>
<html>
<head>
    <title>PRAK201</title>
    <style>
        .inputNama{
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <?php 
$Nama = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["nama1"])) {
        $Nama[]=($_POST["nama1"]);
    }
    if (!empty($_POST["nama2"])) {
        $Nama[]=($_POST["nama2"]);
    }
    if (!empty($_POST["nama3"])) {
        $Nama[]=($_POST["nama3"]);
    }
}
function urutkanNama(){
    global $Nama;
    if (!empty($Nama)) {
        sort($Nama);
        foreach ($Nama as $nama) {
            echo $nama . "<br>";
        }
    }   
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <span>Nama : 1</span><input type="text" name="nama1" class="inputNama"><br>
        <span>Nama : 2</span><input type="text" name="nama2" class="inputNama"><br>
        <span>Nama : 3</span><input type="text" name="nama3"class="inputNama"><br>
        <input type="submit" name="submit" value="urutkan" id="">
    </form>
    <br>
    <p><?php urutkanNama()?></p>
</body>
</html>