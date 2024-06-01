<html>
<head>
  <title>PRAK304</title>
</head>
<body>
  <?php
  $star = NULL;
  $pic = "<img style='width: 50px;' src='Gambar/Bintang.png' >";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $star = $_POST['bintang'];
  }
  if (isset($_POST['tambah'])) {
    $star += 1;
  }
  if (isset($_POST['kurang'])) {
    $star -= 1;
  }
  if (empty($star)) { ?>
    <form action="" method="post">
      <label for="bintang">Jumlah Bintang :</label>
      <input type="text" name="bintang"> </br>
      <button type="submit" name="submit">Submit</button>
    </form>
  <?php } ?>
  <?php if (!empty($star)) {
    echo "Jumlah Bintang : $star "; ?>
    <br><br>
    <?php for ($i = 0; $i < $star; $i++) {
      echo "$pic";
    } ?>
    <form action="" method="post">
      <input type="text" name="bintang" value="<?= $star ?>" hidden>
      <button type="submit" name="tambah" value="tambah">Tambah</button>
      <button type="submit" name="kurang" value="kurang">Kurang</button>
    </form>
  <?php } ?>
</body>
</html>