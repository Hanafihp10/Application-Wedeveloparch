<!doctype html>
<html lang="en">
	<head>
		<title>Sign In</title>
		<link rel="icon" href="../asset/icon/wedev-logo.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../log/css/style.css">
	</head>
	<body class="img js-fullheight" style="background-image: url(../log/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Have an account?</h3>
						<?php
						session_start();
						include '../admin/db-connect.php'; //script connect db
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$username = $_POST['username'];
							$password = $_POST['password'];
							$query = "SELECT * FROM users WHERE username = '$username'";
							$result = mysqli_query($config, $query);
							if (mysqli_num_rows($result) == 1) {
								$user = mysqli_fetch_assoc($result);
								if (password_verify($password, $user['password'])) {
									$_SESSION['username'] = $username;
									header("Location: ../pages/products.php");
									exit();
								} else {
									$error = "Username atau password salah";
								}
							} else {
								$error = "Username atau password salah";
							}
						}
						?>
						<form action="" method="POST" class="signin-form">
							<div class="form-group">
								<input type="text" name="username" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
								<!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
							</div>
							<?php if (isset($error)): ?>
								<div class="form-group">
									<p style="color: red;"><?php echo $error; ?></p>
								</div>
							<?php endif; ?>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a class="txt1" href="../pages/Sign-up.php">
									Create new account
									<i class="fa fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</form>
						<div class="w-100 text-center">
							<a href="#" style="color: #fff">Forgot Password</a>
						</div>
						<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
						<div class="social d-flex justify-content-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span><img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/></a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span><img width="48" height="48" src="https://img.icons8.com/papercut/60/google-logo.png" alt="google-logo"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="../log/js/jquery.min.js"></script>
	<script src="../log/js/popper.js"></script>
	<script src="../log/js/bootstrap.min.js"></script>
	<script src="../log/js/main.js"></script>
	</body>
</html>
