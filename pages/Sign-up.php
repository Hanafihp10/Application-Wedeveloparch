<?php
session_start();
include('../admin/db-connect.php'); // Menghubungkan ke database

$registration_success = false;
$duplicate_error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $no_telepon = isset($_POST['no_telepon']) ? $_POST['no_telepon'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $email = $_POST['email'];

    // Validasi input
    if ($password !== $repeat_password) {
        echo "<script>alert('Password tidak cocok!');</script>";
    } else {
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (nama, username, password, email, no_telepon, alamat) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $config->prepare($sql);
        $stmt->bind_param("ssssss", $nama, $username, $encrypted_password, $email, $no_telepon, $alamat); // Sesuaikan jumlah kolom dan nilai

        try {
            if ($stmt->execute()) {
                $registration_success = true;
            }
        } catch (mysqli_sql_exception $e) {
            if ($stmt->errno == 1062) {
                $duplicate_error = true;
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
<section class="ftco-section ">
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
                            <input type="int" name="no_telepon" class="form-control" placeholder="No_telepon" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="repeat_password" class="form-control" placeholder="Repeat Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                        </div>
						<div class="w-100 text-md-right">
							<a class="txt1" href="../pages/Sign-in.php">
                                Sign-In
								<i class="fa fa-long-arrow-right"></i>
							</a>
						</div>
                    </form>
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
        $("#modal-placeholder").load("alert.html","alert2.html", function(response, status, xhr) {
            if (status == "error") {
                console.log("Error loading modal content: " + xhr.status + " " + xhr.statusText);
            } else {
                console.log("Modal content loaded successfully.");
                <?php if ($registration_success) { ?>
                    $('#myModal').modal('show');
                <?php } ?>
                <?php if ($duplicate_error) { ?>
                    $('#myModal2').modal('show');
                <?php } ?>
            }
        });
    });
</script>
</body>
</html>