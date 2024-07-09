<?php include('../config/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Ulasan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Ulasan</h1>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $conn->query("SELECT * FROM ulasan WHERE id = $id");
            $row = $result->fetch_assoc();
        }
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label>Komentar:</label>
                <textarea name="komentar" class="form-control" required><?php echo $row['komentar']; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $komentar = $_POST['komentar'];

            $sql = "UPDATE ulasan SET nama='$nama', email='$email', komentar='$komentar' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "Ulasan berhasil diupdate";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>
    </div>
</body>
</html>
