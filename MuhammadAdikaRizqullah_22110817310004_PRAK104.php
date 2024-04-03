<?php 
  $listSamsung = [
    "Samsung Galaxy S22", 
    "Samsung Galaxy S22+", 
    "Samsung Galaxy A03", 
    "Samsung Galaxy Xcover 5"
  ];
?>
<html>
  <head>
    <title>PRAK104</title>
  </head>
  <style>
    table, th, td {
      border: 1px solid black;
    }
  </style>
  <body>
    <table>
      <tr>
        <td><strong>Daftar Smartphone Samsung</strong></td>
      </tr>
      <tr>
        <td><?= $listSamsung[0] ?></td>
      </tr>
      <tr>
        <td><?= $listSamsung[1] ?></td>
      </tr>
      <tr>
        <td><?= $listSamsung[2] ?></td>
      </tr>
      <tr>
        <td><?= $listSamsung[3] ?></td>
      </tr>
    </table>
  </body>
</html>