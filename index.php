<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>FLIGHTMIGHT - Home </title>
    <!-- <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'> -->
    <link rel="stylesheet" href="css/front.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h2>
          <a href="https://eatlospolloshermanos.com/"><i class="ion-plane"></i>FlightMight</a>
        </h2>
        <nav>
          <ul>
            <li>
              <a href="#" title="Hotels">Hotels</a>
            </li>
            <li>
              <a href="reviews.php" title="Reviews">Reviews</a>
            </li>
            <li>
              <a href="contact.php" title="Contact">Contact</a>
            </li>
            <li>
              <a href="overons.php" title="Over-ons">Over ons</a>
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
        <h1>Discover what's out there.</h1>
        <form method="post" action="search.php" class="flex-form">
          <label  for="from">
            <i class="ion-location"></i>
          </label>
          <input type="text" class="form__field" name="zoek" />
          <input type="submit" value="search" />
        </form>
      </div>
    </div>
  </body>
</html>
