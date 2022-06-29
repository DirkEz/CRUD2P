<?php 
    session_start();
    
    

    if($_SESSION["username"]){
        echo "";
    } else {
        header ("Location: ../login.php");
    }

    include_once('config\config.php');

    

    $stmt = $connect->query("SELECT * FROM reizen");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin1.css">
    <title>
    </title>
</head>
<body>
    <header class="header">
    <div class="account"> 
          
    </div>  
    </header>
    <a href="../redirect.php">Terug</a>
    <a href=""></a>
    <div class="mainbox"> 
        <div class="boeking"> 
            <h1 class="dash">Admin panel</h1>
        </div>
        <div class="box1"> 
        <a href="../redirect.php"><button class="custom-btn btn-5">doeii!!!</button></a> -log uit
        <br>
        <br>
        <a href="admin/add.php"><button class="custom-btn btn-5">Add</button></a> -voeg iets toe
        <br>
        <br>
        <a href="admin/contact_view.php"><button class="custom-btn btn-5">vragen</button></a> -vragen
        <br>
        <br>
        <a href="admin/vakanties.php"><button class="custom-btn btn-5">Hotels</button></a> -Hotels
        </div>
        <div class="box2"> 
                
        </div>
    </div>
</body>
</html>