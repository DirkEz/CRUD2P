<?php
session_start();

include_once('../config/config.php');

$id = $_GET['edit'];

if(isset($_POST['update_gebruiker'])){

   $reis_name = $_POST['username'];
   $wachtwoord = $_POST['password'];
   $reis_land = $_POST['voornaam'];
   $reis_bdate = $_POST['achternaam'];
   $reis_edate = $_POST['isAdmin'];
   


  

      $stmt = $connect->query("UPDATE gebruikers SET username='$reis_name', password='$wachtwoord', voornaam='$reis_land', achternaam='$reis_bdate', isAdmin='$reis_edate' WHERE gebruikerID = '$id'");

      if($stmt){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:../admin.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $stmt = $connect->query("SELECT * FROM gebruikers WHERE gebruikerID = '$id'");
      while ($row = $stmt->fetch()){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
         <input type="text" placeholder="Gebruikersnaam" name="username" class="box" value="<?php echo $row['username']?>">
         <input type="text" placeholder="Wachtwoord" name="password" class="box" value="<?php echo $row['password']?>">
         <input type="text" placeholder="Voornaam" name="voornaam" class="box" value="<?php echo $row['voornaam']?>">
         <input type="text" placeholder="Achternaam" name="achternaam" class="box" value="<?php echo $row['achternaam']?>">
         <input type="number" min="0" max="1" placeholder="0" name="isAdmin" class="box" value="<?php echo $row['isAdmin']?>">
         <input type="submit" name="update_gebruiker" value="Update Gebruiker">
      <a href="../admin.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>