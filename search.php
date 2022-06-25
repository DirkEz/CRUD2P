<?php 

require_once('php/pages/config/config.php')

?>


<!DOCTYPE html>
<html>
  <body>
    <!-- (A) SEARCH FORM
    <form method="post" action="1-form.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="search" required/>
      <input type="submit" value="Search"/>
    </form> -->

    <?php
    // (B) PROCESS SEARCH WHEN FORM SUBMITTED
    if (isset($_POST["zoek"])) {
      // (B1) SEARCH FOR USERS
      // require "2-search.php";
      $sql = ("SELECT * FROM `reizen` WHERE `hotel` LIKE ? OR `Land` LIKE ?");
      $stmt = $connect->prepare($sql);
      
      $stmt->execute(["%".$_POST["zoek"]."%", "%".$_POST["zoek"]."%"]);
      $results = $stmt->fetchAll();
      // if (isset($_POST["zoek"])) { echo json_encode($results); }

      // (B2) DISPLAY RESULTS
      if (count($results) > 0) { foreach ($results as $r) {
        printf("<div>%s - %s</div>", $r["hotel"], $r["Land"]);
      }} else { echo "No results found"; }
    }
    ?>
  </body>
</html>
