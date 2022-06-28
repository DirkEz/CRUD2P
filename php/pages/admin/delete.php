<?php 

include_once('../config/config.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $stmt = $connect->query("DELETE FROM reizen WHERE reisID = '$id'");
    header('location:../admin.php');
};

?>