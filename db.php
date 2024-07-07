<?php
$servername = "localhost";
$username = "root";
$password = ""; // sesuaikan dengan password database Anda
$dbname = "fp_pemweb"; // nama database yang telah Anda buat

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>