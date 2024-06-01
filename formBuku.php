<?php
    require('Model.php');

    if(isset($_GET['id_buku'])) {
        editBuku();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>" : "<title>Form Buku</title>" ?>
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
        .form-control, .form-select {
            background-color: #282828; /* Slightly lighter dark background for input fields */
            color: #FFFFFF; /* White text for input fields */
            border: 1px solid #1DB954; /* Green border for input fields */
        }
        .form-control:focus, .form-select:focus {
            background-color: #333333; /* Darker background on focus */
            color: #FFFFFF; /* White text on focus */
            border: 1px solid #1ed760; /* Lighter green border on focus */
            box-shadow: none; /* Remove box shadow on focus */
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
        <h2 class="text-center"><?php echo (isset($_GET['id_buku'])) ? "Edit Buku" : "Form Buku" ?></h2>
        <form method="post">
            <?php
                if(isset($_GET['id_buku'])) {
                    $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
                    $result = mysqli_query($kon, $sql);

                    foreach($result as $res) :
            ?>
                <div class="mb-3">
                    <label for="id_buku" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $res["id_buku"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $res["judul_buku"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $res["penulis"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $res["penerbit"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $res["tahun_terbit"]; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary" name="update">Edit</button>
            <?php
                endforeach;
            } else {
            ?>
                <div class="mb-3">
                    <label for="id_buku" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="id_buku" name="id_buku" required>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" required>
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
            <?php } ?>
        </form>
        <br>
        <a href="Buku.php" class="btn btn-secondary">Kembali</a>
        <?php
            if(isset($_POST['submit'])) {
                tambahBuku($_POST['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
            }
            if(isset($_POST['update'])) {
                updateBuku($_POST['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>