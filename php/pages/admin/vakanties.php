<?php 

session_start();

include_once('../config/config.php') ;




$stmt = $connect->query("SELECT * FROM reizen");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vakanties.css">
    <title>Document</title>
</head>
<body>
    <div class="cards">
    <?php  while ($row = $stmt->fetch()) { ?>
    <div class="card">
        <div class="card__image-holder">
        <img src="uploaded_img/<?php echo $row["foto"] ?>" height="auto" alt="fotos">
        </div>
        <div class="card-title">
        <a class="updel" href=" update.php?edit=<?php echo $row['reisID']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
        <a class="updel" href="delete.php?delete=<?php echo $row['reisID']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
        </a>
        <h2>
        <p><?php echo $row["hotel"]; ?></p>
            <small> <?php echo $row["Land"]; ?></small>
        </h2>
        </div>
        
    </div>
    <?php } ?>
</body>
</html>