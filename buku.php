<?php
    require('model.php');
    if(isset($_GET['id_buku'])) {
        hapusBuku($_GET['id_buku']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpustakaan</title>
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
        .btn-primary {
            background-color: #1DB954; /* Spotify green button background */
            color: #191414; /* Dark text for buttons */
            border: none;
            border-radius: 25px; /* Rounded buttons */
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #1ed760; /* Lighter green on hover */
            color: #191414; /* Dark text on hover */
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
        .btn-secondary {
            background-color: #1DB954; /* Spotify green button background */
            color: #191414; /* Dark text for buttons */
            border: none;
            border-radius: 25px; /* Rounded buttons */
            font-weight: bold;
        }
        .btn-secondary:hover {
            background-color: #1ed760; /* Lighter green on hover */
            color: #191414; /* Dark text on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Buku Perpustakaan</h2>
        <a href="index.php" class="btn btn-primary mb-3">Kembali</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php tampilBuku(); ?>
            </tbody>
        </table>
        <a href="formBuku.php" class="btn btn-primary mt-3">Tambah Buku</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>