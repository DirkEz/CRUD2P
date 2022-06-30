<?php 

session_start();

include_once('../config/config.php') ;




$stmt = $connect->query("SELECT * FROM gebruikers");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<a href="../admin.php">Terug</a>
    <div class="user_lijst">

    <?php  while ($row = $stmt->fetch()) { ?>
    <div class="user">
        <h2>
            <div class="admin_check">
        <?php if($row['isAdmin'] == 1) {
            echo "Admin"; }
        ?> 
        </div>
        <p><?php echo $row["voornaam"]; ?> <?php echo $row['achternaam'];?></p>
        
            <small> Username: <?php echo $row["username"]; ?></small>  <br>
            <div class="main_knopje">
            <div class="knopje">
            <a class="updel" href=" user_update.php?edit=<?php echo $row['gebruikerID']; ?>" class="btn"> <i class="fas fa-edit"></i> Edit </a>
            </div>
            <div class="knopje1">
            <a class="updel" href="user_delete.php?delete=<?php echo $row['gebruikerID']; ?>" class="btn"> <i class="fas fa-trash"></i> Delete </a>
        </div>
        </div>
        </h2>
    </div> 
    <?php } ?>
    </div>
</body>
</html>