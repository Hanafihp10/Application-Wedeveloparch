<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table project berdasarkan tanggal terdaftar secara Descending
$projects = query("SELECT * FROM project ORDER BY tanggal_terdaftar DESC");

// Membuat nama file
$filename = "data proyek-" . date('Ymd') . ".xls";

// Kodingan untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Proyek.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Property ID</th>
            <th>Nama Proyek</th>
            <th>Lama Pengerjaan</th>
            <th>Ukuran</th>
            <th>Biaya</th>
            <th>Tanggal Terdaftar</th>
            <th>Nama Perusahaan Terkait</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($projects as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['property_id']; ?></td>
                <td><?= $row['nama_proyek']; ?></td>
                <td><?= $row['lama_pengerjaan']; ?></td>
                <td><?= $row['ukuran']; ?></td>
                <td><?= $row['biaya']; ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal_terdaftar'])); ?></td>
                <td><?= $row['nama_perusahaan_terkait']; ?></td>
                <td><?= $row['image']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>