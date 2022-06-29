<?php 

  session_start();

  include_once('php\pages\config\config.php');

  if (isset($_POST['reserveer'])){

    if($_SESSION["gebruikerID"]) {
        $sql = "INSERT INTO reizen (hotel, beginDatum,eindDatum)
        VALUES (:hotel,:beginDatum,:endDatum)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":hotel", $_POST['hotel']);
        $stmt->bindParam(":beginDatum", $_POST['beginDatum']);
        $stmt->bindParam(":eindDatum", $_POST['eindDatum']);
        $stmt->execute();           

        $reisID = $connect->lastInsertId();

        $sql = "INSERT INTO boekingen (gebruikerID, reisID, volwassenen, kinderen, vliegveld )
        VALUES (:userID, :reisID, :volwassenen, :kinderen, :vliegveld)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":userID", $_SESSION['gebruikerID']);
        $stmt->bindParam(":reisID", $reisID);
        $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
        $stmt->bindParam(":volwassenen", $_POST['vol']);
        $stmt->bindParam(":kinderen", $_POST['kind']);

        

        $stmt->execute();

        // header("Location:reserveer.php");
        exit();
    }else {
        header("Location:../login.php");
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
<body><?php 
    var_dump(['vliegveld']);
    ?>
</body>
</html>