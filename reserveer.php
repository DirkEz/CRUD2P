<?php session_start();
$_SESSION["success"] = "The record was inserted successfully.";

   include_once('php\pages\config\config.php');

   $stmt = $connect->query("SELECT * FROM reizen");

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
              <a href="bericht.php" title="Tours">Contact</a>
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
                <form action="reserveer_redirect.php" method="POST">
                  <label for="vol" class="info">in welk hotel wilt u verblijven?</label> 
                  <br>
                  <br>
                  <select name="hotel" id="hotel">
                    <?php  while ($row = $stmt->fetch()) { ?>
                      <option value="<?php echo $row['reisID'] ?>"><?php echo $row['hotel'] ?></option>
                    <?php  }?>
                  </select>
                  <br>
                  <br>
                  <input type="date" name="beginDatum">
                  <br>
                  <br>
                  <input type="date" name="eindDatum">
                  <select name="vliegveld" id="vliegveld">
                      <option value="Schiphol">Schiphol</option>
                      <option value="Eindhoven">Eindhoven Airport</option>
                      <option value="Rotterdam">Rotterdam Airport</option>
                  </select>
                  <br>
                  <br>
                  <label for="vol" class="info">Hoeveel volwasenen?</label> 
                  <br>
                  <input min="1" max="10" type="number" name="vol" id="volwas">
                  <input min="0" max="10" type="number" name="kind" id="kinder">
                  <br>
                  <br> 
                  <input type="submit" name="boekje">
                </form>
              </div>			
          </div>
       </div>
      </div>
    </div>
  </body>
</html>
