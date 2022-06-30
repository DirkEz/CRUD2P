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
<<<<<<< HEAD
    <div class="container_admin">
        <div class="log_uit">
            <a href="../redirect.php"><div class="btn_blok">doeii!!!</div></a>
        </div>
        
        <div class="add">
            <a href="admin/add.php"><div class="btn_blok">Add</div></a>
        </div>

        <div class="vragen">
            <a href="admin/contact_view.php"><div class="btn_blok">vragen</div></a>
        </div>

        <div class="hotels">
            <a href="admin/vakanties.php"><div class="btn_blok">Hotels</div></a>
        </div>

        <div class="management">
            
                <a href="admin/users.php"><div class="btn_blok">Users</div></a>
            
        </div>
</div>
    
    <div class="blok">



    </div>


   
</body>
</html>