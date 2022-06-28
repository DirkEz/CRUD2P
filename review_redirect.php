<?php 
    require_once('php/pages/config/config.php');
    session_start();
    
    if (isset($_POST['verstuur'])){
        if($_POST['naam'] != "" || $_POST['bericht'] != "" || $_POST['rating'] != "" || $_POST['password'] != ""){
        $sql = "INSERT INTO recenties (voornaam,achternaam,bericht,rating,datum)
        VALUES (:voornaam,:achternaam,:bericht,:rating, :datum)";
        $stmt = $connect->prepare($sql);
        $datum = date('Y-m-d');
        // echo $datum;
        $stmt->bindParam(":voornaam", $_POST['voornaam']);
        $stmt->bindParam(":achternaam", $_POST['achternaam']);
        $stmt->bindParam(":bericht", $_POST['bericht']);
        $stmt->bindParam(":rating", $_POST['rating']);
        $stmt->bindParam(":datum", $datum);
        $stmt->execute();
        $result = $stmt->fetch();
        header("Location: reviews.php");
    } else {
        header("Location: index.php");
    }
    }
?>