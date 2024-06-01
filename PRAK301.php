<html>
<head>
    <title>PRAK301</title>
</head>
<style>
  form input[type="number"] {
    margin-bottom: 4px;
  }
</style>
<body>

<form action="" method="post">
  <label for="num_participants">Jumlah Peserta:</label><br>
  <input type="number" id="num_participants" name="num_participants" value=""><br>
  <input type="submit" value="Cetak">
</form>

<?php
if (isset($_POST["num_participants"])) {
  if (is_numeric($_POST["num_participants"]) && $_POST["num_participants"] > 0) {
    $num_participants = $_POST["num_participants"];
    $participant_count = 1;
    $font_style = 'font-weight: bold; font-size: 25px; ';
    while ($participant_count <= $num_participants) {
        $text_color = ($participant_count % 2 == 0) ? 'green' : 'red';
        echo "<span style='color: $text_color; $font_style; '>Peserta ke-$participant_count</span><br>";
        $participant_count++;
        echo "<br style='margin-bottom: 10px;'>";
    }
  } 
}
?>
</body>
</html>