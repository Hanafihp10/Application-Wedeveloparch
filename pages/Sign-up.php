<?php
// Memulai sesi dan menghubungkan ke database
session_start();
include('../admin/db-connect.php'); // Menghubungkan ke database

$registration_success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $email = $_POST['email'];

    // Validasi input
    if ($password !== $repeat_password) {
        echo "Password tidak cocok!";
    } else {
        // Enkripsi password
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk memasukkan data ke database
        $sql = "INSERT INTO users (nama, username, password, email) VALUES (?, ?, ?, ?)";
        $stmt = $config->prepare($sql);
        $stmt->bind_param("ssss", $nama, $username, $encrypted_password, $email);

        if ($stmt->execute()) {
            $registration_success = true;
        } else {
            // Tangani kesalahan unik
            if ($stmt->errno == 1062) {
                echo "Username atau email sudah digunakan!";
            } else {
                echo "Terjadi kesalahan: " . $stmt->error;
            }
        }

        $stmt->close();
    }
}

$config->close();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="icon" href="../asset/icon/wedev-logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../log/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</head>
<body class="img js-fullheight" style="background-image: url(../log/images/bg.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Sign Up</h3>
                    <form action="Sign-up.php" method="POST" class="signin-form">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="repeat_password" class="form-control" placeholder="Repeat Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                    <div class="social d-flex justify-content-center">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span><img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/></a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span><img width="48" height="48" src="https://img.icons8.com/papercut/60/google-logo.png" alt="google-logo"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-placeholder"></div>
</section>
<script src="../log/js/jquery.min.js"></script>
<script src="../log/js/popper.js"></script>
<script src="../log/js/bootstrap.min.js"></script>
<script src="../log/js/main.js"></script>
<script>
    $(document).ready(function() {
        // Load the content of alert.html into the placeholder
        $("#modal-placeholder").load("alert.html", function(response, status, xhr) {
            if (status == "error") {
                console.log("Error loading modal content: " + xhr.status + " " + xhr.statusText);
            } else {
                console.log("Modal content loaded successfully.");
                <?php if ($registration_success) { ?>
                    $('#myModal').modal('show');
                <?php } ?>
            }
        });
    });
</script>
</body>
</html>