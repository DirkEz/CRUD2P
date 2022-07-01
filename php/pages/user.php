<?php 
    session_start();
    

    if($_SESSION["username"]){
        echo "Je bent ingelogd als " . $_SESSION["username"];
    } else {
        header ("Location: ../login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userpage.css">
    <link rel="stylesheet" href="css/klok.css">
    <title>
    <?php 
    echo $_SESSION["username"];
?> - FLIGHTMIGHT
    </title>
</head>
<body>
    <header class="header">
    <div class="account"> 
           <?php
            echo $_SESSION["username"];
        ?>
         <svg viewBox="0 0 400 400" class="color-mode" id="colorMode">
            <circle r="195" cx="200" cy="200" fill="white" stroke="#000" stroke-width="10" />
            <path d=" M 200 375 A 175 175 0 0 1 200 25" />
            <path d=" M 200 300 A 100 100 0 0 1 200 100" fill="#FFF" />
            <path d=" M 200 100 A 100 100 180 0 1 200 300" />
        </svg>
    </div>  
    </header>
   
    <a href=""></a>
    <div class="mainbox"> 
        <div class="boeking"> 
                <div class="clock" aria-label="00:00:00 AM">
            <div class="clock__block clock__block--delay2" aria-hidden="true" data-time-group>
                <div class="clock__digit-group">
                    <div class="clock__digits" data-time="a">00</div>
                    <div class="clock__digits" data-time="b">00</div>
                </div>
            </div>
            <div class="clock__colon"></div>
            <div class="clock__block clock__block--delay1" aria-hidden="true" data-time-group>
                <div class="clock__digit-group">
                    <div class="clock__digits" data-time="a">00</div>
                    <div class="clock__digits" data-time="b">00</div>
                </div>
            </div>
            <div class="clock__colon"></div>
            <div class="clock__block" aria-hidden="true" data-time-group>
                <div class="clock__digit-group">
                    <div class="clock__digits" data-time="a">00</div>
                    <div class="clock__digits" data-time="b">00</div>
                </div>
            </div>
            <div class="clock__block clock__block--delay2 clock__block--small" aria-hidden="true" data-time-group>
                <div class="clock__digit-group">
                    <div class="clock__digits" data-time="a">PM</div>
                    <div class="clock__digits" data-time="b">AM</div>
                </div>
            </div>
        </div>
        </div>
        <div class="box1"> 
        <a href="../redirect.php"><button> Terug naar home page</button></a>
        </div>
        <div class="box2"> 
                
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="script2.js"></script>
</html>