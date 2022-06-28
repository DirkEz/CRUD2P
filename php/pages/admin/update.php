<?php
session_start();

include_once('../config/config.php');

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $reis_name = $_POST['product_name'];
   $reis_land = $_POST['product_land'];
   $reis_bdate = $_POST['product_bdate'];
   $reis_edate = $_POST['product_edate'];
   $reis_sterren = $_POST['product_sterren'];
   $reis_price = $_POST['product_price'];
   $reis_image = $_FILES['product_image']['name'];
   $reis_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $reis_image_folder = 'uploaded_img/'.$reis_image;

   if(empty($reis_name) || empty($reis_price) || empty($reis_image) || empty($reis_land) || empty($reis_bdate) || empty($reis_edate) || empty($reis_sterren)){
      $message[] = 'please fill out all';   
   }else{

      $stmt = $connect->query("UPDATE reizen SET beginDatum='$reis_bdate', eindDatum='$reis_edate', hotel='$reis_name', prijs='$reis_price', sterren='$reis_sterren', Land='$reis_land', foto='$reis_image', WHERE id = '$id'");

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
      
      $stmt = $connect->query("SELECT * FROM reizen WHERE reisID = '$id'");
      while ($row = $stmt->fetch()){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" placeholder="Voer hotel naam in" name="product_name" class="box">
         <input type="text" placeholder="Voer het land in" name="product_land" class="box">
         <input type="date" placeholder="Begin datum" name="product_bdate" class="box">
         <input type="date" placeholder="Eind datum" name="product_edate" class="box">
         <input type="number" placeholder="Prijs" name="product_price" class="box">
         <input type="number" placeholder="Hoeveelheid sterren (Max 5)" name="product_sterren" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      <a href="../admin.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>