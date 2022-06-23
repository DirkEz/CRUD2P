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
    <div class="mainbox"> 
        <div class="boeking"> 
            <h1 class="dash">dashboard</h1>
        </div>
        <div class="box1"> 
            
        </div>
        <div class="box2"> 
                
        </div>
    </div>
</body>
</html>