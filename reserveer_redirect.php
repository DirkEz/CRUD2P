<?php 

  session_start();

  include_once('php\pages\config\config.php');
  $stmt = $connect->query("SELECT * FROM reizen");

  if (isset($_POST['boekje'])){
    
    if($_SESSION["gebruikersID"]) {        
        echo "1";
        echo "2";
        $sql = "INSERT INTO boekingen (gebruikerID, reisID, beginDatum, eindDatum, vliegveld, volwassenen, kinderen)
        VALUES (:userID, :reisID, :bdatum, :edatum, :vliegveld, :volwassenen, :kinderen)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":userID", $_SESSION['gebruikersID']);
        $stmt->bindParam(":reisID", $_POST['hotel']);
        $stmt->bindParam(":bdatum", $_POST['beginDatum']);
        $stmt->bindParam(":edatum", $_POST['eindDatum']);
        $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
        $stmt->bindParam(":volwassenen", $_POST['vol']);
        $stmt->bindParam(":kinderen", $_POST['kind']);
        $stmt->execute();
        $result = $stmt->fetch();
        echo "3";
        // echo $sql;
        header("Location:reserveersucces.php");
        exit();
    }else {
        // header("Location:../login.php");
        echo "4";
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
    <title>Document</title>
</head>
<body>
<?php 
    echo "UserID " . $_SESSION['gebruikersID'];
    ?> <br> <?php
    echo "ReisID " . $_POST['hotel']; ?> <br> <?php
    echo $_POST['beginDatum']; ?> <br> <?php
    echo $_POST['eindDatum']; ?> <br> <?php
    echo $_POST['vliegveld']; ?> <br> <?php
    echo $_POST['vol']; ?> <br> <?php
    echo $_POST['kind'];  ?> <br> <?php
?>
</body>
</html>