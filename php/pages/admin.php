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
    <link rel="stylesheet" href="css\style.css">
    <title><?php 
            echo $_SESSION["username"];
    ?> - Admin Panel</title>
</head>
<body>
<a href="../redirect.php"><button >doeii!!!</button></a> -log uit
<a href="admin/add.php"><button >Add</button></a> -voeg iets toe
<a href="admin/contact_view.php"><button >vragen</button></a> -vragen
<a href="admin/vakanties.php"><button >Hotels</button></a> -Hotels

    
    <div class="blok">



    </div>


   
</body>
</html>