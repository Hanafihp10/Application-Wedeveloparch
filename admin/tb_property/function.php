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

    $nama = htmlspecialchars($data['nama']);
    $username = htmlspecialchars($data['username']);
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $email = htmlspecialchars($data['email']);
    $no_telepon = $data['no_telepon'];
    $alamat = htmlspecialchars($data['alamat']);

    $sql = "INSERT INTO users (nama, username, password, email, no_telepon, alamat) VALUES ('$nama', '$username', '$password', '$email', '$no_telepon', '$alamat')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($user_id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM users WHERE user_id = $user_id");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah($data)
{
    global $koneksi;

    $user_id = $data['user_id'];
    $nama = htmlspecialchars($data['nama']);
    $username = htmlspecialchars($data['username']);
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $email = htmlspecialchars($data['email']);
    $no_telepon = $data['no_telepon'];
    $alamat = htmlspecialchars($data['alamat']);

    $sql = "UPDATE users SET nama = '$nama', username = '$username', password = '$password', email = '$email', no_telepon = '$no_telepon', alamat = '$alamat' WHERE user_id = $user_id";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi upload gambar
function upload()
{
    // Syarat
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

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