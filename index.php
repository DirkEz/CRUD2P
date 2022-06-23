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
              <a href="#" title="Flights">Flights</a>
            </li>
            <li>
              <a href="reviews.php" title="Tours">Reviews</a>
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
        <form action="search.php" class="flex-form">
          <label  for="from">
            <i class="ion-location"></i>
          </label>
          <select name="bestemmingen" id="bestemmingen">
          <option value="start">Waar wil je naartoe?    </option>
          <option value="best1" name="land">Nederland</option>
          <option value="best2" name="land">Italie</option>
          <option value="best3" name="land">Curacao</option>
          <option value="best4" name="land">Finland</option>
          <option value="best5" name="land">Egypte</option>
          <option value="best6" name="land">Amerika</option>
          <option value="best7" name="land">Nieuw-Zeeland</option>

          </select>
          <input type="submit" value="search" />
        </form>
      </div>
    </div>
  </body>
</html>
