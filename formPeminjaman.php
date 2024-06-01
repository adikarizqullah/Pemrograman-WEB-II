<?php
    require('model.php');

    if(isset($_GET['id_peminjaman'])) {
        editPeminjaman();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (isset($_GET['id_peminjaman'])) ? "Edit Peminjaman" : "Form Peminjaman" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .btn-primary, .btn-secondary {
            background-color: #1DB954; /* Spotify green button background */
            color: #191414; /* Dark text for buttons */
            border: none;
            border-radius: 25px; /* Rounded buttons */
            font-weight: bold;
        }
        .btn-primary:hover, .btn-secondary:hover {
            background-color: #1ed760; /* Lighter green on hover */
            color: #191414; /* Dark text on hover */
        }
        .form-control, .form-select {
            background-color: #282828; /* Dark background for form controls */
            color: #FFFFFF; /* White text for form controls */
            border: 1px solid #1DB954; /* Green border */
        }
        .form-control:focus, .form-select:focus {
            background-color: #333333; /* Darker background on focus */
            color: #FFFFFF; /* White text on focus */
            border: 1px solid #1ed760; /* Lighter green border on focus */
            box-shadow: none; /* Remove default Bootstrap shadow */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Form Peminjaman</h2>
        <form method="post">
            <?php
            if(isset($_GET['id_peminjaman'])) {
                $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = " . $_GET['id_peminjaman'];
                $result = mysqli_query($conn, $sql);

                foreach($result as $res) :
            ?>
                <div class="mb-3">
                    <label for="id_peminjaman" class="form-label">ID Peminjaman</label>
                    <input type="text" class="form-control" id="id_peminjaman" name="id_peminjaman" value="<?php echo $res["id_peminjaman"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="pinjam" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="pinjam" name="pinjam" value="<?php echo $res["tgl_pinjam"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="kembali" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="kembali" name="kembali" value="<?php echo $res["tgl_kembali"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="id_member" class="form-label">ID Member</label>
                    <select class="form-select" id="id_member" name="id_member">
                    <?php
                    $member = tampilIdMember();
                    foreach($member as $mb) :
                    ?>
                    <option value="<?= $mb['id_member']; ?>" <?= ($mb['id_member'] == $res['id_member']) ? 'selected' : ''; ?>><?= $mb['nama_member']; ?></option>
                    <?php
                    endforeach;
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_buku" class="form-label">ID Buku</label>
                    <select class="form-select" id="id_buku" name="id_buku">
                    <?php
                    $buku = tampilIdBuku();
                    foreach($buku as $bk) :
                    ?>
                    <option value="<?= $bk['id_buku']; ?>" <?= ($bk['id_buku'] == $res['id_buku']) ? 'selected' : ''; ?>><?= $bk['judul_buku']; ?></option>
                    <?php
                    endforeach;
                    ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="update">Edit</button>
            <?php
                endforeach;
            } else {
            ?>
                <div class="mb-3">
                    <label for="id_peminjaman" class="form-label">ID Peminjaman</label>
                    <input type="text" class="form-control" id="id_peminjaman" name="id_peminjaman" required>
                </div>
                <div class="mb-3">
                    <label for="pinjam" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="pinjam" name="pinjam" required>
                </div>
                <div class="mb-3">
                    <label for="kembali" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="kembali" name="kembali" required>
                </div>
                <div class="mb-3">
                    <label for="id_member" class="form-label">ID Member</label>
                    <select class="form-select" id="id_member" name="id_member">
                    <?php
                    $member = tampilIdMember();
                    foreach($member as $mb) :
                    ?>
                    <option value="<?= $mb['id_member']; ?>"><?= $mb['nama_member']; ?></option>
                    <?php
                    endforeach;
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_buku" class="form-label">ID Buku</label>
                    <select class="form-select" id="id_buku" name="id_buku">
                    <?php
                    $buku = tampilIdBuku();
                    foreach($buku as $bk) :
                    ?>
                    <option value="<?= $bk['id_buku']; ?>"><?= $bk['judul_buku']; ?></option>
                    <?php
                    endforeach;
                    ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
            <?php } ?>
        </form>
        <br>
        <a href="peminjaman.php" class="btn btn-secondary">Kembali</a>
        <?php
        if(isset($_POST['submit'])) {
            tambahPeminjaman($_POST['id_peminjaman'], $_POST['pinjam'], $_POST['kembali'], $_POST['id_member'], $_POST['id_buku']);
        }
        if(isset($_POST['update'])) {
            updatePeminjaman($_POST['id_peminjaman'], $_POST['pinjam'], $_POST['kembali'], $_POST['id_member'], $_POST['id_buku']);
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>