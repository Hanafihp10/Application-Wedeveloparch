<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Mengambil data dari property_id dengan fungsi get
$property_id = $_GET['property_id'];

// Mengambil data dari table project dari property_id yang tidak sama dengan 0
$property = query("SELECT * FROM project WHERE property_id = $property_id")[0];

// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data proyek berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi ubah dibawah dari 0/data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data proyek gagal diubah!');
            </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Ubah Data Proyek | PHP Native | CRUD</title>
</head>

<body>
    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../admin/admin.php">Dashboard Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../pages/Sign-in.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Proyek</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="property_id" value="<?= $property['property_id']; ?>">
                    <div class="mb-3">
                        <label for="nama_proyek" class="form-label">Nama Proyek</label>
                        <input type="text" class="form-control w-50" id="nama_proyek" value="<?= $property['nama_proyek']; ?>" name="nama_proyek"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="lama_pengerjaan" class="form-label">Lama Pengerjaan</label>
                        <input type="number" class="form-control w-50" id="lama_pengerjaan" value="<?= $property['lama_pengerjaan']; ?>" name="lama_pengerjaan"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Ukuran</label>
                        <input type="text" class="form-control w-50" id="ukuran" value="<?= $property['ukuran']; ?>" name="ukuran"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="biaya" class="form-label">Biaya</label>
                        <input type="text" class="form-control w-50" id="biaya" value="<?= $property['biaya']; ?>" name="biaya"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_perusahaan_terkait" class="form-label">Nama Perusahaan Terkait</label>
                        <input type="text" class="form-control w-50" id="nama_perusahaan_terkait" value="<?= $property['nama_perusahaan_terkait']; ?>" name="nama_perusahaan_terkait"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar <i>(Saat ini)</i></label> <br>
                        <img src="img/<?= $property['image']; ?>" width="50%" style="margin-bottom: 10px;">
                        <input class="form-control form-control-sm w-50" id="image" name="image" type="file">
                    </div>
                    <hr>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>