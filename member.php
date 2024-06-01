<?php
    require('model.php');
    if (isset($_GET['id_member'])) {
        hapusMember($_GET['id_member']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #191414; /* Spotify dark background */
            color: #FFFFFF; /* White text */
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            color: #1DB954; /* Spotify green text */
        }
        .btn-primary, .btn-edit, .btn-delete {
            background-color: #1DB954; /* Spotify green button background */
            color: #191414; /* Dark text for buttons */
            border: none;
            border-radius: 25px; /* Rounded buttons */
            font-weight: bold;
        }
        .btn-primary:hover, .btn-edit:hover, .btn-delete:hover {
            background-color: #1ed760; /* Lighter green on hover */
            color: #191414; /* Dark text on hover */
        }
        .btn-edit {
            background-color: #1DB954; /* Spotify green button background */
        }
        .btn-delete {
            background-color: #e50914; /* Netflix red button background for delete */
        }
        .table {
            background-color: #191414; /* Dark background for table */
            color: #FFFFFF; /* White text for table */
        }
        .table th {
            background-color: #1DB954; /* Spotify green background for table header */
            color: #191414; /* Dark text for table header */
        }
        .table tbody tr {
            background-color: #282828; /* Slightly lighter dark background for table rows */
        }
        .table tbody tr:hover {
            background-color: #333333; /* Darker background on row hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Member Perpustakaan</h2>
        <a href="index.php" class="btn btn-primary mb-3">Kembali</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Member</th>
                    <th>Nama</th>
                    <th>Nomor Member</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php tampilMember(); ?>
            </tbody>
        </table>
        <a href="formMember.php" class="btn btn-primary mt-3">Tambah Member</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>