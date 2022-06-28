<?php 

include_once('php/pages\config\config.php');

// $sql = "SELECT * FROM recenties";
// $result = $connect->query($sql);

$stmt = $connect->query("SELECT * FROM recenties");



?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/review.css">
    <title>Reviews</title>
</head>
<body>  
  
  <a href="index.php"><button>Terug</button></a>
  <a class="hoekje" href="review.php"><button>Schrijf een review</button></a>
  <div class="review-box">
  <?php  while ($row = $stmt->fetch()) {
      $voornaam = $row['voornaam'];
      ?>

    <div class="review-author">
      <p><strong><?php echo $row['voornaam']?> <?php echo $row['achternaam']?></strong> <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      - <?php echo $row['bericht']?></p>
    </div>
    <div class="review-comment">
      <p><?php echo $row['rating']?> sterren</p>
    </div>
        <div class="review-date">
      <time><?php echo $row['datum']?></time>
    </div>

    <?php  }?>
    

    
  </div>
    
  </div>
  
</div>
    
</body>
</html>