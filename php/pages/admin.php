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
    <div class="container_admin">
        <div class="log_uit">
            <a href="../redirect.php"><button >doeii!!!</button></a>
            <p>log uit</p>
        </div>
        
        <div class="add">
            <a href="admin/add.php"><button >Add</button></a>
            <p>voeg iets toe</p>
        </div>

        <div class="vragen">
            <a href="admin/contact_view.php"><button >vragen</button></a>
            <p>vragen</p>
        </div>

        <div class="hotels">
            <a href="admin/vakanties.php"><button >Hotels</button></a>
            <p>Hotels</p>
        </div>

        <div class="management">
            <a href="admin/users.php"><button >Users</button></a>
            <p>User management</p>
        </div>
    </div>
    
    <div class="blok">



    </div>


   
</body>
</html>