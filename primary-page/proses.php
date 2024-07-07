<?php
// Pastikan koneksi ke database dilakukan di sini
$servername = "localhost";
$username = "root"; // Ganti sesuai dengan username MySQL Anda
$password = ""; // Ganti sesuai dengan password MySQL Anda
$dbname = "fp_pemweb"; // Ganti sesuai dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses input jika tombol submit_transaksi diklik
if (isset($_POST['submit_transaksi'])) {
    // Tangkap data dari formulir
    $nama_transaksi = $_POST['nama_transaksi'];
    $kategori_proyek_transaksi = $_POST['kategori_proyek_transaksi'];
    $pesanan = $_POST['pesanan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    // Query SQL untuk memasukkan data ke tabel transaksi
    $sql = "INSERT INTO transaksi (nama_transaksi, kategori_proyek_transaksi, pesanan, alamat, no_hp)
            VALUES ('$nama_transaksi', '$kategori_proyek_transaksi', '$pesanan', '$alamat', '$no_hp')";

    if ($conn->query($sql) === TRUE) {
        echo "Data transaksi berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>
