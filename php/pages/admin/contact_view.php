
<?php 
session_start();

include_once('../config\config.php');

$stmt = $connect->query("SELECT * FROM bericht");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Document</title>
</head>
<body>
<a href="../admin.php">Terug</a>

<?php  while ($row = $stmt->fetch()) {
      ?>

<div class="body">
        <div class="blokje">
        
            <div class="review-author">
            <p><strong><?php echo $row['naam']?> 
            <?php echo $row['email']?></strong> <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <div class="review-comment">
            <p><?php echo $row['bericht']?></p>
            </div>
                <div class="review-date"> <time><?php echo $row['datum']?></time>
            
            </div>
        </div>
    </div>

    <?php  }?>
</body>
</html>