<?php 
    require_once('pages\config\config.php');
    session_start();

    
    if (isset($_POST['inloggen'])){
        $sql = "SELECT * FROM gebruikers WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':username', $_POST['name']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetch();
        
        if($result) {
            $_SESSION["gebruikerID"] = $result['gebruikerID'];
            $_SESSION["username"] = $result['username'];
            $_SESSION['aisAdmin'] = $result['isAdmin'];
            if ($result['isAdmin'] === 0){
                header("Location: pages\user.php");
                echo 1;
            }else if ($result['isAdmin'] === 1){
                header("Location: pages\admin.php");
                echo 21;
            } else {
                echo 3;
            }
        } else { 
            header("Location: login.php");
        }
    }
?>