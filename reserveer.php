<?php session_start();
$_SESSION["success"] = "The record was inserted successfully.";

echo $_SESSION['gebruikersID'];

   include_once('php\pages\config\config.php');

?>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>FLIGHTMIGHT - Home </title>
    <!-- <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'> -->
    <link rel="stylesheet" href="css/reserveer.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h2>
          <a href="index.php"><i class="ion-plane" style="color: #ffcc33;"></i>FlightMight</a>
        </h2>
        <nav>
          <ul>
            <li>
              <a href="hotels.html" title="Hotels">Hotels</a>
            </li>
            <li>
              <a href="#" title="Flights">Flights</a>
            </li>
            <li>
              <a href="reviews.php" title="Tours">Reviews</a>
            </li>
            <li>
              <a href="bericht.php" title="Tours">contact</a>
            </li>
            <li>
              <a class="btn" href="php/login.php" title="Register / Log In"
                >Register/Log In</a
              >
            </li>
          </ul>
        </nav>
      </header>

      <div class="cover">
          <div class="blok">
                <div class="formpje">
                <form action="reserveer_redirect.php">
                <label for="vol" class="info">in welk hotel wilt u verblijven?</label> 
                <br>
                <br>
                <input type="text" name="hotel">
                <br>
                <br>
                <input type="date" name="beginDatum">
                <br>
                <br>
                <input type="date" name="eindDatum">
                <select name="vliegveld" id="vliegveld">
                    <option value="amsterdam">Schiphol</option>
                    <option value="eindhoven">Eindhoven Airport</option>
                    <option value="rotterdam">Rotterdam Airport</option>
                </select>
                <br>
                <br>
                <label for="vol" class="info">Hoeveel volwasenen?</label> 
                <br>
                <input type="number" name="vol" id="volwas">
                <input placeholder="" type="number" name="kind" id="kinder">
                <br>
                <br> 
                <input type="submit" name="reserveer">
                </form>
                </div>			
          </div>
       </div>
      </div>
    </div>
  </body>
</html>
