<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Portal Perpustakaan</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #191414; /* Spotify dark background */
            color: #FFFFFF; /* White text */
        }
        .container {
            margin-top: 100px;
        }
        .card {
            background-color: #1DB954; /* Spotify green background for the card */
            border: none;
            border-radius: 15px;
        }
        .card-title {
            color: #FFFFFF; /* White text for the title */
            font-weight: bold;
        }
        .btn-primary {
            background-color: #191414; /* Dark background for buttons */
            color: #1DB954; /* Spotify green text for buttons */
            border: 2px solid #1DB954; /* Spotify green border for buttons */
            border-radius: 25px; /* Rounded buttons */
        }
        .btn-primary:hover {
            background-color: #013d5a; /* Spotify green background on hover */
            color: #FFFFFF; /* White text on hover */
        }
    </style>
</head> 
<body> 
    <div class="container"> 
        <div class="card"> 
            <div class="card-body"> 
                <h2 class="card-title text-center">Selamat Datang di Portal Perpustakaan</h2> 
                <div class="d-grid gap-2">
                    <a href="member.php" class="btn btn-primary btn-lg">Member</a> 
                    <a href="buku.php" class="btn btn-primary btn-lg">Buku</a> 
                    <a href="peminjaman.php" class="btn btn-primary btn-lg">Peminjaman</a> 
                </div> 
            </div> 
        </div> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>