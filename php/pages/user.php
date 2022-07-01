<?php 
    session_start();
    
    include_once('config/config.php');

    if($_SESSION["username"]){
        echo "Je bent ingelogd als " . $_SESSION["username"];
    } else {
        header ("Location: ../login.php");
    }



    // $reisid = reisID;
    $id = $_SESSION['gebruikersID'];
    // $stmt = $connect->query("SELECT reisID FROM boekingen");
    $stmt = $connect->query("SELECT * FROM boekingen WHERE gebruikerID = '$id'");
    // $stmt = $connect->query("SELECT * FROM reizen WHERE reisID = '$reisid'");
    


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
        <a href="../redirect.php"><button class="knop"> Terug naar home page</button></a>
        </div>
        <div class="box2"> 
            <div class="balk"><a class="dashboard">welkom terug</a></div> <br>
            <?php  while ($row = $stmt->fetch()) { ?>

                <div class="boek">
                <p><?php echo $row['beginDatum'] ?></p> <p><?php echo $row['eindDatum'] ?></p> <p><?php echo $row['vliegveld'] ?></p>
                <div class="knopje1">
                    <a class="updel" href="boekdel.php?delete=<?php echo $row['boekingID']; ?>" class="btn"> <i class="fas fa-trash"></i> Annuleer</a>
                </div>
                </div>
    <?php  }?>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="script2.js"></script>
</html>