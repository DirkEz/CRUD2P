
<?php 
session_start(); 


include_once('php/pages\config\config.php');


$stmt = $connect->query("SELECT * FROM reizen");

if (isset($_POST['reserveer'])){
  if($_SESSION["gebruikerID"]) {
      $sql = "INSERT INTO reizen (eindbestemming,vertrek,aankomst_terug,vliegveld, volwassenen,kinderen)
      VALUES (:eindbestemming,:vertrek,:aankomst_terug, :vliegveld,:volwassenen,:kinderen)";
      $stmt = $connect->prepare($sql);
      $stmt->bindParam(":eindbestemming", $_POST['bestemming']);
      $stmt->bindParam(":vertrek", $_POST['vertrek']);
      $stmt->bindParam(":aankomst_terug", $_POST['aankomst_terug']);
      $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
      $stmt->bindParam(":volwassenen", $_POST['volwassenen']);
      $stmt->bindParam(":kinderen", $_POST['kinderen']);
      $stmt->execute();

      $reisID = $connect->lastInsertId();

      $sql = "INSERT INTO boekingen (gebuikerID, reisID)
      VALUES (:gebuikerD, :reisID)";
      $stmt = $connect->prepare($sql);
      $stmt->bindParam(":gebuikerID", $_SESSION['userID']);
      $stmt->bindParam(":reisID", $reisID);
      $stmt->execute();

      header("Location:../reserveer.php");
      exit();
  }else {
      header("Location:../inlog.php");
      exit();
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hotels.css">
    <title>Document</title>
</head>
<body>
<?php  while ($row = $stmt->fetch()) {
      ?>
    <div class="display">
        <div class="hotelfoto">
          <img class="foto" src="php\pages\admin\uploaded_img/<?php echo $row["foto"] ?>" height="100px" alt="fototje">
        </div>
        <div class="review-author">
          <p><strong><?php echo $row['hotel']?> <?php echo $row['Land']?></strong> <i class="fa fa-star" aria-hidden="true"></i>

          - €<?php echo $row['prijs']?></p>
        </div>
        <div class="review-comment">
          <p><?php echo $row['sterren']?> sterren</p>
        </div>
        <div class="review-button">
          <form action="#">
            <input name="reserveer" type="submit">
          </form>
        </div>
    </div>
        <!-- <div class="review-date">
      <time><?php echo $row['datum']?></time>
    </div> -->

    <?php  }?>
</body>
</html>


