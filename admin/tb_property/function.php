<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "fp_pemweb");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi tambah
function tambah($data)
{
    global $koneksi;

    $nama_proyek = htmlspecialchars($data['nama_proyek']);
    $lama_pengerjaan = $data['lama_pengerjaan'];
    $ukuran = htmlspecialchars($data['ukuran']);
    $biaya = $data['biaya'];
    $nama_perusahaan_terkait = htmlspecialchars($data['nama_perusahaan_terkait']);
    $image = upload();

    if (!$image) {
        return false;
    }

    $sql = "INSERT INTO project (nama_proyek, lama_pengerjaan, ukuran, biaya, nama_perusahaan_terkait, image) VALUES ('$nama_proyek', '$lama_pengerjaan', '$ukuran', '$biaya', '$nama_perusahaan_terkait', '$image')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($property_id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM project WHERE property_id = $property_id");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah($data)
{
    global $koneksi;

    $property_id = $data['property_id'];
    $nama_proyek = htmlspecialchars($data['nama_proyek']);
    $lama_pengerjaan = $data['lama_pengerjaan'];
    $ukuran = htmlspecialchars($data['ukuran']);
    $biaya = $data['biaya'];
    $nama_perusahaan_terkait = htmlspecialchars($data['nama_perusahaan_terkait']);

    $gambarLama = $data['gambarLama'];

    if ($_FILES['image']['error'] === 4) {
        $image = $gambarLama;
    } else {
        $image = upload();
    }

    $sql = "UPDATE project SET nama_proyek = '$nama_proyek', lama_pengerjaan = '$lama_pengerjaan', ukuran = '$ukuran', biaya = '$biaya', nama_perusahaan_terkait = '$nama_perusahaan_terkait', image = '$image' WHERE property_id = $property_id";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi upload gambar
function upload()
{
    // Syarat
    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
    $extValid = ['jpg', 'jpeg', 'png'];
    $ext = explode('.', $namaFile);
    $ext = strtolower(end($ext));

    // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
    if (!in_array($ext, $extValid)) {
        echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
        return false;
    }

    // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
    if ($ukuranFile > 3000000) {
        echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
        return false;
    }

    // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ext;

    // memindahkan file ke dalam folde img dengan nama baru
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}