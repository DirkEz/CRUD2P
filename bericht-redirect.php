<?php 
    require_once('php/pages/config/config.php');
    session_start();
    
    if (isset($_POST['verstuur'])){
        if($_POST['naam'] != "" || $_POST['email'] != "" || $_POST['bericht'] != ""){
        $sql = "INSERT INTO bericht (naam,email,bericht,datum)
        VALUES (:naam,:email,:bericht,:datum)";
        $stmt = $connect->prepare($sql);
        $datum = date('Y-m-d');
        // echo $datum;
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":bericht", $_POST['bericht']);
        $stmt->bindParam(":datum", $datum);
        $stmt->execute();
        $result = $stmt->fetch();
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
    }
?>