<?php
include('../config/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM ulasan WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Ulasan berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: dashboard.php');
}
?>
