<?php session_start();
$_SESSION["success"] = "The record was inserted successfully.";
require_once('php\pages\config\config.php');
$sql = "SELECT * FROM boekingen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Boek uw vlucht</title>

	<!-- Google font -->

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
    



<header>



<div class="box-left">
  <img class = "logo"  src = "Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png" alt="">

</div>
<div class="box-main">
	<?php $_SESSION['gebruikerID'] ?>
	  <div class="box">
		<div class="text">
			<div class="form-btn">
				<a class="submit-btn1" href="overons.php" target="_parent" rel="nofollow">Over ons </a>
			</div>
			<div class="form-btn">
            <a class="submit-btn1" href="infomatielocatie.php" target="_parent" rel="nofollow"> Informatie over locaties  </a>
          </div>
		  <div class="form-btn">
			<a class="submit-btn1" href="contact.php" target="_parent" rel="nofollow">Contact</a>
		</div>
		</div>
	  </div>
	</div>
<div class="box-right">
  <div class="box">
	<div class="search">
	  <div class="icon"></div>
		<div class="input">
		  <input type="text" placeholder="Zoeken" id="mysearch" />
		</div>
	  <span
	  class="clear"
	  onclick="document.getElementById
	  ('mysearch').value = ''"></span>
  </div>
  </div>
  <div class="box"> 
	<div class="box-logo-login">
	 <a href = "inlog.php"> <img src="Afbeeldingen/user-icon-png-transparent-17.jpg"  target="_parent" alt=""><?php if(isset($_POST['name'])) echo $_SESSION["name"]?></a>
	</div>
  </div>
</div>
</header> 



	<div id="booking" class="section">
        <div class="form-btn">
            <a class="pijltje-terug" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
        </div>
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Boek uw vlucht</h1>
							
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
                            <img src="Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png" alt="">
							<form action="php/inlogcheck.php" method="post">
								<div class="form-group">
									<span class="form-label">Uw bestemming</span>
									<select class="form-control" name="bestemming" type="text" placeholder="Geef uw vliegbestemming aan...">
										<?php foreach ($result as $bestemmingen){?>
										<option><?php echo $bestemmingen['bestemming']; ?></option>
										<?php }?>
									</select>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Vertrek</span>
											<input name="vertrek" class="form-control" type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Aankomst terug</span>
											<input name="aankomst_terug" class="form-control" type="date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label" >Vliegveld</span>
											<select name="vliegveld" class="form-control">
												<option value=""></option>
												<?php foreach ($result as $bestemmingen){?>
												<option><?php echo $bestemmingen['vliegvelden']; ?></option>
												<?php }?>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Volwassenen</span>
											<input type="number" name="volwassenen" class="form-control"></input>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Kinderen</span>
											<input type="number" name="kinderen" class="form-control"></input>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn" type="submit" name="reserveer">Reserveer</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>