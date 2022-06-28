<?php 

require_once('php/pages/config/config.php')

?>

    <title>Zoeken: <?php echo $_POST['zoek']?> </title>
    <link rel="stylesheet" href="css/zoeken.css" />


    
    <?php
    // (B) PROCESS SEARCH WHEN FORM SUBMITTED
    
      // (B1) SEARCH FOR USERS
      // require "2-search.php";
      $sql = ("SELECT * FROM `reizen` WHERE `hotel` LIKE ? OR `Land` LIKE ?");
      $stmt = $connect->prepare($sql);
      
      $stmt->execute(["%".$_POST["zoek"]."%", "%".$_POST["zoek"]."%"]);
      $results = $stmt->fetchAll();
      // if (isset($_POST["zoek"])) { echo json_encode($results); }

      // (B2) DISPLAY RESULTS
      ?>


     


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Zoek</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="cards">
<?php if (isset($_POST["zoek"])) {?>
<?php if (count($results) > 0) { foreach ($results as $r) { ?>
  <div class="card">
    <div class="card__image-holder">
      <img src="php\pages\admin\uploaded_img/<?php echo $r["foto"] ?>" height="auto" alt="fotos">
    </div>
    <div class="card-title">
      <a href="#" class="toggle-info btn">
        <span class="left"></span>
        <span class="right"></span>
      </a>
      <h2>
      <p><?php echo $r["hotel"]; ?></p>
          <small> <?php echo $r["Land"]; ?></small>
      </h2>
    </div>
    <div class="card-flap flap1">
      <div class="card-flap flap2">
        <div class="card-actions">
          <a href="#" class="btn">Read more</a>
        </div>
      </div>
    </div>
  </div>
  <?php } 
  
    
  } else { echo "No results found"; }
} ?>

</div>

</body>
</html>