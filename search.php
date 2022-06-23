<?php 

require_once('php/pages\config\config.php');

$sql = "SELECT * FROM reizen WHERE Land = :land";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':land', $_POST['best']);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($result = "nederland") {
            echo $_POST['best']; 
        }
?> 
