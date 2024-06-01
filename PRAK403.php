<?php
  $data_mahasiswa = [
    [
      "no" => 1,
      "nama" => "Ridho",
      "mata_kuliah" => ["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"],
      "sks" => [2, 1, 2, 3]
    ],
    [
      "no" => 2,
      "nama" => "Ratna",
      "mata_kuliah" => ["Basis Data I", "Praktikum Basis Data I", "Kalkulus"],
      "sks" => [2, 1, 3]
    ],
    [
      "no" => 3,
      "nama" => "Tono",
      "mata_kuliah" => ["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],
      "sks" => [3, 3, 3, 3]
    ]
  ];
  foreach($data_mahasiswa as $kunci => $nilai) {
    $data_mahasiswa[$kunci]['total_sks'] = array_sum($nilai['sks']);
    if($data_mahasiswa[$kunci]['total_sks'] < 7) {
      $data_mahasiswa[$kunci]['keterangan'] = "Revisi KRS";
    } else {
      $data_mahasiswa[$kunci]['keterangan'] = "Tidak Revisi";
    }
  }
?>
<html>
<head>
  <title>PRAK403</title>
  <style>
    table {
      border-collapse: collapse;
    }
    tr, th, td {
      border: 1px solid;
      padding: 5px;
    }
    th {
      background-color: #CCCDCC;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Mata Kuliah diambil</th>
      <th>SKS</th>
      <th>Total SKS</th>
      <th>Keterangan</th>
    </tr>
    <?php
    foreach ($data_mahasiswa as $a) {
      ?>
      <tr>
        <td>
          <?php
          echo $a["no"];
          ?>
        </td>
        <td>
          <?php
          echo $a["nama"];
          ?>
        </td>
        <td><?php
        echo $a["mata_kuliah"][0]; ?>
        </td>
        <td><?php
        echo $a["sks"][0]; ?>
        </td>
        <td>
          <?php
          echo $a["total_sks"];
          ?>
        </td>
        <?php
        if ($a['total_sks'] < 7) {
          ?>
          <td bgcolor="red">
            <?php
            echo $a["keterangan"];
        } else {
          ?>
          <td bgcolor="#66bb6a"><?php
          echo $a["keterangan"];
        } ?></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><?php
        echo $a["mata_kuliah"][1]; ?>
        </td>
        <td><?php
        echo $a["sks"][1]; ?>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><?php
        echo $a["mata_kuliah"][2]; ?>
        </td>
        <td><?php
        echo $a["sks"][2]; ?>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <?php
        if (!empty($a['mata_kuliah'][3])) { ?>
          <td></td>
          <td></td>
          <td><?php
          echo $a["mata_kuliah"][3]; ?>
          </td>
          <td><?php
        }
        if (!empty($a['sks'][3])) { ?>
            <?php
            echo $a["sks"][3]; ?>
          </td>
          <td></td>
        </tr><?php
        } ?>
      <?php
    } ?>
  </table>
</body>
</html>