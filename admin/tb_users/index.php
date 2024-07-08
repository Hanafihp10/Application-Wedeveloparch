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

// Menampilkan semua data dari table users berdasarkan tanggal terdaftar secara Descending
$users = query("SELECT * FROM users ORDER BY tanggal_terdaftar DESC");
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
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Own CSS -->
    <link rel="stylesheet" href="../admin/asset/style/style-tb.css">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../asset/style/admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <title>Table Users</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../../admin/admin.php">Dashboard Admin</a>
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
                    <li><a class="dropdown-item" href="../../pages/Sign-in.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">Data Users</h3>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a href="addData.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah
                    Data</a>
                <a href="export.php" target="_blank" class="btn btn-success ms-1"><i
                        class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center"
                    style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>User ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Tanggal Terdaftar</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($users as $row): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['no_telepon']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= date('d F Y', strtotime($row['tanggal_terdaftar'])); ?></td>
                                <td>
                                    <button class="btn btn-success btn-sm text-white detail"
                                        data-id="<?= $row['user_id']; ?>" style="font-weight: 600;"><i
                                            class="bi bi-info-circle-fill"></i>&nbsp;Detail</button> |

                                    <a href="ubah.php?user_id=<?= $row['user_id']; ?>" class="btn btn-warning btn-sm"
                                        style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Ubah</a> |

                                    <a href="hapus.php?user_id=<?= $row['user_id']; ?>" class="btn btn-danger btn-sm"
                                        style="font-weight: 600;"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['nama']; ?> ?');"><i
                                            class="bi bi-trash-fill"></i>&nbsp;Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Modal Detail Data -->
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="detail">Detail Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" id="detail-user">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            // Fungsi Table
            $('#data').DataTable();
            // Fungsi Table

            // Fungsi Detail
            $('.detail').click(function () {
                var dataUser = $(this).attr("data-id");
                $.ajax({
                    url: "detail.php",
                    method: "post",
                    data: {
                        dataUser,
                        dataUser
                    },
                    success: function (data) {
                        $('#detail-user').html(data);
                        $('#detail').modal("show");
                    }
                });
            });
            // Fungsi Detail
        });
    </script>
</body>

</html>