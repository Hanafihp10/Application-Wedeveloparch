<?php
// koneksi.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fp_pemweb";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
