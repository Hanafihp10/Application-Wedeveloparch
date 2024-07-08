<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika dataSiswa diklik maka
if (isset($_POST['dataUser'])) {
    $output = '';

    // mengambil data siswa dari nis yang berasal dari dataSiswa
    $sql = "SELECT * FROM users WHERE user_id = '" . $_POST['dataUser'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '<tr align="center">
                            <td colspan="2"><img src="../../asset/icon/profile.jpeg" alt="profile" width="50%"></td>
                        </tr>
                        <tr>
                            <th width="40%">User ID</th>
                            <td width="60%">' . $row['user_id'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama</th>
                            <td width="60%">' . $row['nama'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Username</th>
                            <td width="60%">' . $row['username'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Email</th>
                            <td width="60%">' . $row['email'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">No Telepon</th>
                            <td width="60%">' . $row['no_telepon'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Alamat</th>
                            <td width="60%">' . $row['alamat'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Tanggal Terdaftar</th>
                            <td width="60%">' . date('d M Y', strtotime($row['tanggal_terdaftar'])) . '</td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
