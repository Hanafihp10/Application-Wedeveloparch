<?php
// Include file koneksi ke database
include 'koneksi.php';

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $kategori_proyek = $_POST['kategori_proyek_transaksi'];
    $pesanan = $_POST['pesanan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    // Query SQL untuk memasukkan data transaksi ke tabel transaksi
    $sql = "INSERT INTO transaksi (nama_perusahaan, nama_lengkap, kategori_proyek_transaksi, pesanan, alamat, no_hp) 
            VALUES ('$nama_perusahaan', '$nama_lengkap', '$kategori_proyek', '$pesanan', '$alamat', '$no_hp')";

    if ($conn->query($sql) === TRUE) {
        // Data berhasil disimpan, tampilkan pesan dengan JavaScript
        echo '<script>
                alert("Data pesanan berhasil disimpan.");
                window.location.href = "home.php";
              </script>';
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo '<script>
                alert("Error: ' . $sql . '\\n' . $conn->error . '");
              </script>';
    }

    // Tutup koneksi database
    $conn->close();
}
?>
