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
    <!-- <link rel="stylesheet" href="../css/vakanties.css"> -->
    <title>Document</title>
</head>
<body>
    <a href="../admin.php">Terug</a>
    <?php  while ($row = $stmt->fetch()) { ?>
    
        <h2>
        <p><?php echo $row["voornaam"]; ?> <?php echo $row['achternaam'];?></p>
            <small> Username: <?php echo $row["username"]; ?> <a class="updel" href=" user_update.php?edit=<?php echo $row['gebruikerID']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
        <a class="updel" href="user_delete.php?delete=<?php echo $row['gebruikerID']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a></small> 
        </h2>
        
    <?php } ?>
</body>
</html>