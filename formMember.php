<?php
    require('model.php');

    if(isset($_GET['id_member'])) {
        editMember();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>" : "<title>Form Member</title>" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #191414; /* Spotify dark background */
            color: #FFFFFF; /* White text */
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: #282828; /* Dark background for container */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1DB954; /* Spotify green text */
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            color: #1DB954; /* Spotify green labels */
        }
        .form-control {
            background-color: #191414; /* Dark input background */
            color: #FFFFFF; /* White text for inputs */
            border: 1px solid #1DB954; /* Green border for inputs */
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
            background-color: #3e3e3e; /* Dark secondary button background */
            color: #FFFFFF; /* White text for secondary buttons */
            border: none;
            border-radius: 25px; /* Rounded buttons */
            font-weight: bold;
        }
        .btn-secondary:hover {
            background-color: #575757; /* Lighter dark on hover */
            color: #FFFFFF; /* White text on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo (isset($_GET['id_member'])) ? "Edit Member" : "Form Member"; ?></h2>
        <form method="post">
            <?php
                if(isset($_GET['id_member'])) {
                    $sql = "SELECT * FROM member WHERE id_member = " . $_GET['id_member'];
                    $result = mysqli_query($kon, $sql);

                    foreach($result as $res) :
            ?>
                <div class="mb-3">
                    <label for="id_member" class="form-label">ID Member</label>
                    <input type="text" class="form-control" id="id_member" name="id_member" value="<?php echo $res["id_member"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Member</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $res["nama_member"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Member</label>
                    <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $res["nomor_member"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $res["alamat"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="daftar" class="form-label">Tanggal Daftar</label>
                    <input type="date" class="form-control" id="daftar" name="daftar" value="<?php echo $res["tgl_mendaftar"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="bayar" class="form-label">Tanggal Bayar Terakhir</label>
                    <input type="date" class="form-control" id="bayar" name="bayar" value="<?php echo $res["tgl_terakhir_bayar"]; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="update">Edit</button>
            <?php
                endforeach;
            } else {
            ?>
                <div class="mb-3">
                    <label for="id_member" class="form-label">ID Member</label>
                    <input type="text" class="form-control" id="id_member" name="id_member" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Member</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Member</label>
                    <input type="text" class="form-control" id="nomor" name="nomor" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="daftar" class="form-label">Tanggal Daftar</label>
                    <input type="date" class="form-control" id="daftar" name="daftar" required>
                </div>
                <div class="mb-3">
                    <label for="bayar" class="form-label">Tanggal Bayar Terakhir</label>
                    <input type="date" class="form-control" id="bayar" name="bayar" required>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="submit">Tambah</button>
            <?php } ?>
        </form>
        <br>
        <a href="member.php" class="btn btn-secondary w-100">Kembali</a>
        <?php
            if(isset($_POST['submit'])) {
                tambahMember($_POST['id_member'], $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'], $_POST['bayar']);
            }
            if(isset($_POST['update'])) {
                updateMember($_POST['id_member'], $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'], $_POST['bayar']);
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>