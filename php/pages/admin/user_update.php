<?php
session_start();

include_once('../config/config.php');

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $reis_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $reis_image_folder = 'uploaded_img/'.$reis_image;

   if(empty($reis_name) || empty($reis_price) || empty($reis_image) || empty($reis_land) || empty($reis_bdate) || empty($reis_edate) || empty($reis_sterren)){
      $message[] = 'please fill out all';   
   }else{

      $stmt = $connect->query("UPDATE reizen SET ");

      if($stmt){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:../admin.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

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
      <h3 class="title">Update de Gebruiker </h3>
        <input type="text" placeholder="Voer hotel naam in" name="product_name" class="box">

        <input type="submit" class="btn" name="add_product" value="add product">
      <a href="../admin.php" class="btn">ga terug!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>