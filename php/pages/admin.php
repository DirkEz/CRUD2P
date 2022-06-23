<?php 
    session_start();
    

    if($_SESSION["username"]){
        echo "";
    } else {
        header ("Location: ../login.php");
    }

    include_once('config\config.php');



    $stmt = $connect->query("SELECT * FROM reizen");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title><?php 
            echo $_SESSION["username"];
    ?> - Admin Panel</title>
</head>
<body>
<a href="../redirect.php"><button >doeii!!!</button></a> Testknop!
    
    <div class="hb-l">
    <div class="txt-blok"> 
        <p><?php echo $_SESSION["username"]; ?></p>
    </div>B
    </div>
    <section class="mid-block">
        <div class="head">
            
        </div>
        <div class="flex">
            <div class="mid-l">
            
            </div>
            <div class="mid-r">
            <?php  while ($row = $stmt->fetch()) {
            ?>
            
            <tr>
                <!-- <td><img src="CRUD/uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td> -->
                <td><?php echo $row['reisID']; ?></td>
                <td><?php echo $row['hotel']; ?></td>
                <td>€<?php echo $row['prijs']; ?>/-</td>
                <td>
                    <!-- <a href=" CRUD\update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                    <a href="admin.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a> -->
                </td>
            </tr>
            
            <?php } ?>
            </div>
        </div>
        
        <div class="foot"></div>
    </section>
</body>
</html>