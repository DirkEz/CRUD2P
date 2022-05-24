<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../css/register.css"></head>
<body>	
	<div class="blok">
			<div class="formpje">
				<form action="register_redirect.php" method="POST">	
				
				<div class="form__group">
						<label>Voornaam</label>
						<input type="text" class="form__field" name="voornaam" />
					</div>
					<div class="form__group">
						<label>Achternaam</label>
						<input type="text" class="form__field" name="achternaam" />
					</div>
					<div class="form__group">
						<label>Username</label>
						<input type="text" class="form__field" name="username" />
					</div>
					<div class="form__group">
						<label>Password</label>
						<input type="password" class="form__field" name="password" />
					</div>
					<br />
					<div class="form__group">
						<button class="form__field-btn" name="register">Registreer</button>
					</div>
					<a href="login.php">Login</a>
				</form></div>
				</div>
			
		</div>
	</div>
</body>
</html>