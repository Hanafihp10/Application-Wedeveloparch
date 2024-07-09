<?php include('../config/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Ulasan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Ulasan</h1>
        <form action="" method="post">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Komentar:</label>
                <textarea name="komentar" class="form-control" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $komentar = $_POST['komentar'];

            $sql = "INSERT INTO ulasan (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";

            if ($conn->query($sql) === TRUE) {
                echo "Ulasan berhasil ditambahkan";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>
    </div>
</body>
</html>
