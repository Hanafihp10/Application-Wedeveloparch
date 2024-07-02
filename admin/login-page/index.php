<?php
session_start();
include('../../admin/db-connect.php'); // Menghubungkan ke database

$registration_success = false;
$duplicate_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $role = $_POST['role'];

    // Validasi input
    if ($password !== $repeat_password) {
        echo "<script>alert('Password tidak cocok!');</script>";
    } else {
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO admin (nama, username, password, email, no_telepon, role) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $config->prepare($sql);
        $stmt->bind_param("ssssss", $nama, $username, $encrypted_password, $email, $no_hp, $role);

        try {
            if ($stmt->execute()) {
                $registration_success = true;
                echo "<script>alert('Pendaftaran berhasil!');</script>";
            }
        } catch (mysqli_sql_exception $e) {
            if ($stmt->errno == 1062) {
                $duplicate_error = "Username atau email sudah digunakan!";
                echo "<script>alert('$duplicate_error');</script>";
            } else {
                echo "Terjadi kesalahan: " . $stmt->error;
            }
        }

        $stmt->close();
    }
}
$config->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Radius - Signin/Signup</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <input type="text" placeholder="Name" />
                <input type="text" placeholder="Username" />
                <input type="email" placeholder="Email" />
                <input type="text" placeholder="Number Phone" />
                <input type="text" placeholder="Role" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/JS/main.js"></script>
</body>

</html>