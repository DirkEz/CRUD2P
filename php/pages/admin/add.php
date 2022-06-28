<?php

session_start();
    

if($_SESSION["username"]){
    echo "";
} else {
    header ("Location: ../login.php");
}

include_once('../config\config.php');

if(isset($_POST['add_product'])){

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
      $message[] = 'Vul alles in!';
   }else{
    $stmt = $connect->query("INSERT INTO reizen(beginDatum, eindDatum, hotel, prijs, sterren, Land, foto) VALUES('$reis_bdate', '$reis_edate', '$reis_name', '$reis_price', '$reis_sterren', '$reis_land', '$reis_image')");
      
      if($stmt){
         move_uploaded_file($reis_image_tmp_name, $reis_image_folder);
         $message[] = 'new product added successfully';
         sleep(2);
         header('location:../admin.php');
      }else{
         $message[] = 'Kon geen product toevoegen!';
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
   <title>add</title>

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->

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

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="Voer hotel naam in" name="product_name" class="box">
         <input type="text" placeholder="Voer het land in" name="product_land" class="box">
         <input type="date" placeholder="Begin datum" name="product_bdate" class="box">
         <input type="date" placeholder="Eind datum" name="product_edate" class="box">
         <input type="number" placeholder="Prijs" name="product_price" class="box">
         <input type="number" placeholder="Hoeveelheid sterren (Max 5)" name="product_sterren" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>
</body>
</html>