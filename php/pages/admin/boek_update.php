<?php
session_start();

include_once('../config/config.php');

$id = $_GET['edit'];

if(isset($_POST['update_boeking'])){

   $vertrek = $_POST['plaats'];
   $bdatum = $_POST['beginDatum'];
   $edatum = $_POST['eindDatum'];
   $volwassen = $_POST['volwas'];
   $kinderen = $_POST['kinder'];
   


  

      $stmt = $connect->query("UPDATE boekingen SET vliegveld='$vertrek', beginDatum='$bdatum', eindDatum='$edatum', volwassenen='$volwassen', kinderen='$kinderen' WHERE boekingID = '$id'");

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
      
      $stmt = $connect->query("SELECT * FROM boekingen WHERE boekingID = '$id'");
      while ($row = $stmt->fetch()){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update de boeking</h3>
         <input type="text" placeholder="Vliegveld" name="plaats" class="box" value="<?php echo $row['vliegveld']?>">
         <input type="date" name="beginDatum" class="box" value="<?php echo $row['beginDatum']?>">
         <input type="date" name="eindDatum" class="box" value="<?php echo $row['eindDatum']?>">
         <input type="number" min="1" max="10" placeholder="0" name="volwas" class="box" value="<?php echo $row['volwassenen']?>">
         <input type="number" min="0" max="10" placeholder="0" name="kinder" class="box" value="<?php echo $row['kinderen']?>">
         <input type="submit" name="update_boeking" value="Update Boeking">
      <a href="../admin.php" class="btn">ga terug</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>