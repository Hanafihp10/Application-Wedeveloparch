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
        // Jika berhasil disimpan, tampilkan pesan sukses
        echo "<script>alert('Ulasan berhasil ditambahkan!');</script>";
    } else {
        // Jika terjadi error, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>