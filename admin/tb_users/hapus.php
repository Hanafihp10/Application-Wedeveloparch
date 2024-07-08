<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Mengambil data dari user_id dengan fungsi get
$user_id = $_GET['user_id'];

// Jika fungsi hapus lebih dari 0/data terhapus, maka munculkan alert dibawah
if (hapus($user_id) > 0) {
    echo "<script>
                alert('Data user berhasil dihapus!');
                document.location.href = 'index.php';
            </script>";
} else {
    // Jika fungsi hapus dibawah dari 0/data tidak terhapus, maka munculkan alert dibawah
    echo "<script>
            alert('Data user gagal dihapus!');
            document.location.href = 'index.php';
        </script>";
}
