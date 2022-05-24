<?php 
    session_start();
    

    if($_SESSION["username"]){
        echo "";
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
    <link rel="stylesheet" href="css\style.css">
    <title><?php 
    echo $_SESSION["username"];
?> - Admin Panel</title>
</head>
<body>
<a href="../redirect.php"><button >doeii!!!</button></a> Testknop!
    <div class="txt-blok"> 
        <p><?php echo $_SESSION["username"]; ?></p>
    </div>
    <div class="hb-l"></div>
    <section class="mid-block">
        <div class="head">
            
        </div>
        <div class="flex">
            <div class="mid-l"></div>
            <div class="mid-r"></div>
        </div>
        
        <div class="foot"></div>
    </section>
</body>
</html>