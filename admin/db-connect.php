<?php
$config = mysqli_connect("localhost", "root", "", "fp_pemweb");
// Memeriksa koneksi
if (!$config) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}

// Mengatur charset ke utf8
if (!mysqli_set_charset($config, "utf8")) {
    die("Error loading character set utf8: " . mysqli_error($config));
}
?>