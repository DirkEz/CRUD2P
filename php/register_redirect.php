<?php 
    require_once('pages/config/config.php');
    session_start();
    
    if (isset($_POST['register'])){
        if($_POST['voornaam'] != "" || $_POST['achternaam'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
        $sql = "INSERT INTO gebruikers (voornaam,achternaam,username,password)
        VALUES (:voornaam,:achternaam,:username,:password)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":voornaam", $_POST['voornaam']);
        $stmt->bindParam(":achternaam", $_POST['achternaam']);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetch();
        header("Location: login.php");
    } else {
        header("Location: register.php");
    }
    }
?>