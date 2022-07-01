<?php 
session_start();

include_once('config/config.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $stmt = $connect->query("DELETE FROM boekingen WHERE boekingID = '$id'");
    header('location: user.php');
};

?>