<?php 

session_start();

include_once('../config/config.php') ;




$stmt = $connect->query("SELECT * FROM boekingen");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Boeking Beheer</title>
</head>
<body>
<a href="../admin.php">Terug</a>
    <div class="user_lijst">

    <?php  while ($row = $stmt->fetch()) { ?>
    <div class="user">
        <h2>
           
        <p><?php echo "GebruikerID " . $row['gebruikerID'] ?></p> <p><?php echo $row["vliegveld"]; ?> <?php echo "Volwassenen: " . $row['volwassenen'];?> <?php echo "Kinderen: " . $row['kinderen'];?></p>
    
            <div class="main_knopje"> <br>
            <div class="knopje">
            <a class="updel" href=" boek_update.php?edit=<?php echo $row['boekingID']; ?>" class="btn"> <i class="fas fa-edit"></i> Edit </a>
            </div>
            <div class="knopje1">
            <a class="updel" href="boeking_delete.php?delete=<?php echo $row['boekingID']; ?>" class="btn"> <i class="fas fa-trash"></i> Delete </a>
        </div>
        </div>
        </h2>
    </div> 
    <?php } ?>
    </div>
</body>
</html>