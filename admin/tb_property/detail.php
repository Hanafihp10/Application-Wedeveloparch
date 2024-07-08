<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika dataProperty diklik maka
if (isset($_POST['dataProperty'])) {
    $output = '';

    // mengambil data properti dari property_id yang berasal dari dataProperty
    $sql = "SELECT * FROM project WHERE property_id = '" . $_POST['dataProperty'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '<tr align="center">
                            <td colspan="2"><img src="img/' . $row['image'] . '" alt="property" width="50%"></td>
                        </tr>
                        <tr>
                            <th width="40%">Property ID</th>
                            <td width="60%">' . $row['property_id'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama Proyek</th>
                            <td width="60%">' . $row['nama_proyek'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Lama Pengerjaan</th>
                            <td width="60%">' . $row['lama_pengerjaan'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Ukuran</th>
                            <td width="60%">' . $row['ukuran'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Biaya</th>
                            <td width="60%">Rp ' . number_format($row['biaya'], 2, ',', '.') . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Tanggal Terdaftar</th>
                            <td width="60%">' . date('d M Y', strtotime($row['tanggal_terdaftar'])) . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama Perusahaan Terkait</th>
                            <td width="60%">' . $row['nama_perusahaan_terkait'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Gambar</th>
                            <td width="60%"><img src="' . $row['image'] . '" alt="Gambar Properti" width="50%"></td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
