<?php 
$daftarMahasiswa=array(
    array(
        "nama"=>"Andi",
        "nim"=>"2101001",
        "nilaiUTS"=>87,
        "nilaiUAS"=>65,
        
    ),
    array(
        "nama"=>"Budi",
        "nim"=>"2101002",
        "nilaiUTS"=>76,
        "nilaiUAS"=>79
    ),
    array(
        "nama"=>"Tono",
        "nim"=>"2101003",
        "nilaiUTS"=>50,
        "nilaiUAS"=>41
    ),
    array(
        "nama"=>"Jessica",
        "nim"=>"2101004",
        "nilaiUTS"=>60,
        "nilaiUAS"=>75
    )
);
function hitungNilaiAkhir($mahasiswa){
    global $daftarMahasiswa;
    $nilaiAkhir=(40/100*$mahasiswa["nilaiUTS"]) + (60/100*$mahasiswa["nilaiUAS"]);
    return $nilaiAkhir;
    
}
function konversiHuruf($nilai){
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70 && $nilai<=79) {
        return "B";
    } elseif ($nilai >= 60 && $nilai<=69) {
        return "C";
    } elseif ($nilai >= 50 && $nilai<=59) {
        return "D";
    } elseif ($nilai<50) {
        return "E";
    } 
}
?>

<html>
<head>
    <title>PRAK402</title>
    <style>
        th{
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        td{
            border: 1px solid #dddddd;
            padding: 8px;
        }
        table{
            border-collapse: collapse;
            width: 50%;
        }
        
    </style>
</head>
<body>
    <h2>Daftar Nilai Mahasiswa</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Nilai Huruf</th>
        </tr>
        <?php foreach ($daftarMahasiswa as $mahasiswa): ?>
            <tr>
                <td><?php echo $mahasiswa['nama'] ?></td>
                <td><?php echo $mahasiswa['nim'] ?></td>
                <td><?php echo $mahasiswa['nilaiUTS'] ?></td>
                <td><?php echo $mahasiswa['nilaiUAS'] ?></td>
                <td><?php echo hitungNilaiAkhir($mahasiswa) ?></td>
                <td><?php echo konversiHuruf(hitungNilaiAkhir($mahasiswa)) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>