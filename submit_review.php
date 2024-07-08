<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $project_type = $_POST['project_type'];
    $review_text = $_POST['review'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    // Query untuk memasukkan data ke dalam tabel review
    $sql = "INSERT INTO review (name, project_type, image, review) VALUES ('$name', '$project_type', '$image', '$review_text')";

    if ($conn->query($sql) === TRUE) {
        // Jika berhasil disimpan, tampilkan pesan sukses dan kembali ke halaman utama
        echo "<script>alert('Ulasan berhasil ditambahkan!'); window.location.href='http://localhost/Application-Wedeveloparch/dasboard.php';</script>";
    } else {
        // Jika terjadi error, tampilkan pesan error dan kembali ke halaman utama
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href='http://localhost/Application-Wedeveloparch/dasboard.php';</script>";
    }

    $conn->close();
}
?>