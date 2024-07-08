<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table users berdasarkan tanggal terdaftar secara Descending
$users = query("SELECT * FROM users ORDER BY tanggal_terdaftar DESC");

// Membuat nama file
$filename = "data users-" . date('Ymd') . ".xls";

// Kodingam untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Users.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>User ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Tanggal Terdaftar</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($users as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['user_id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['no_telepon']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal_terdaftar'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>