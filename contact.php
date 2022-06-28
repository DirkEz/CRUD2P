</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>FLIGHTMIGHT - Home </title>
    <!-- <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'> -->
    <link rel="stylesheet" href="css/contact.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h2>
          <a href="index.php"><i class="ion-plane"></i>FlightMight</a>
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
                  <form action="bericht-redirect.php" method="POST">
                      <input name="naam" placeholder="What is your name?" class="name" required />
                      <br>
                      <br>
                      <input name="email" placeholder="What is your email?" class="email" type="email" required />
                      <br>
                      <br>
                      <textarea rows="4" cols="50" name="bericht" placeholder="Please enter your message" class="message" required ></textarea>
                      <br>
                      <br>
                      <input class="btn" name="verstuur" class="btn" type="submit" value="Send" />
                  </form>
                </div>			
          </div>
       </div>
      </div>
    </div>
  </body>
</html>
