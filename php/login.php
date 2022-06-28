<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../css/login.css">
		<link rel="icon" href="../img/icon.png" type="image/x-icon">
		<title>Login - FLIGHTMIGHT</title>
	</head>
<body>
	
		<div class="blok">
			<div class="formpje">
				<form action="login_redirect.php" method="POST">	
						<div class="form__group field">
							<label>Username</label>
							<input type="text" class="form__field" name="name" />
						</div>
						<div class="form__group field">
							<label>Password</label>
							<input type="password" class="form__field" name="password" />
						</div>
						<br />
						<div class="form-group">
							<button class="form__field-btn" name="inloggen">Login</button>
						</div>
						<a href="register.php">Registration</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>