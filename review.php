<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="  /css/register.css">
    </head>
<body>	
	<div class="blok">
			<div class="formpje">
				<form action="review_redirect.php" method="POST">	
				
				<div class="form__group">
						<label>Voornaam</label>
						<input type="text" class="form__field" name="voornaam" />
					</div>
					<div class="form__group">
						<label>Achternaam</label>
						<input type="text" class="form__field" name="achternaam" />
					</div>
					<div class="form__group">
						<label>Bericht</label>
						<input type="text" class="form__field" name="bericht" />
					</div>
					<div class="form__group">
						<label>Rating</label>
						<input type="number" class="form__field" name="rating" />
					</div>
					<div class="form__group">
						<button class="form__field-btn" name="verstuur">Verstuur</button>
					</div>
					<br />
                    <a href="reviews.php"><p>Reviews bekijken</p></a>
				</form></div>
			</div>
			
		</div>
	</div>
</body>
</html>