<?php 

require_once('php\pages\config\config.php');

if (isset($_GET['zoek'])) {
    $reis = '%'.$_GET['zoek'].'%';
    $sql = ("SELECT * FROM reizen WHERE hotel LIKE '".$reis."'");
    $stmt = $connect->prepare($sql);
    

  } else {
    $sql = ("SELECT * FROM reizen");
  }
?> 
