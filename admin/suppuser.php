<?php 
include '../config.php';
session_start();

if (!isset($_SESSION['id'])) {header("Location: ../login.php");}

    $sql = "DELETE FROM `admin` WHERE id = ".$_GET['idsup'];
    $result = mysql_query($sql);
   header("Location: index.php"); 


?>