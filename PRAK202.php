<!DOCTYPE html>
<html>
<head>
    <title>PRAK202</title>
    <style>
        .inputNama{
            margin-left: 5px;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
<?php 
$nama=$nim=$jeniskelamin="";
$namaEr=$nimEr=$jeniskelaminEr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameEr = "Isi Nama Terlebih Dahulu";
      } else {
        $nama = ($_POST["name"]);
    }
    if (empty($_POST["name"])) {
        $nimEr = "NIM tidak boleh kosong";
      } else {
        $nim = ($_POST["nim"]);
    }
    if (empty($_POST["gender"])) {
        $jeniskelaminEr = "jenis kelamin tidak boleh kosong";
      } else {
        $jeniskelamin = ($_POST["gender"]);
    }
}
function tampilkanInput(){
    global $nama,$nim,$jeniskelamin;
    echo($nama."<br>");
    echo($nim."<br>");
    echo($jeniskelamin."<br>");

}
?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <span>Nama: </span><input type="text" name="name" class="inputNama"><span class="error">*<?php echo($namaEr)?></span><br>
        <span>Nim: </span><input type="text" name="nim" class="inputNama"><span class="error">*<?php echo($nimEr)?></span><br>
        <span>Jenis Kelamin :</span><span class="error">*<?php echo($jeniskelaminEr)?></span> <br>
        <input type="radio" name="gender" value="laki-laki">Laki-Laki
        <br>    
        <input type="radio" name="gender" value="Perempuan">Perempuan 
        <br>
        <input type="submit" name="submit" value="Submit" id="">
    </form>
    <br>
    <p><?php tampilkanInput()?></p>
</body>
</html>