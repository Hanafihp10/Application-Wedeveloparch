<?php
$servername = "localhost"; // Nama host
$username = "your_username"; // Nama pengguna database
$password = "your_password"; // Kata sandi pengguna database
$dbname = "your_database"; // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>
