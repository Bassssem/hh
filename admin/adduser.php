<?php 
include '../config.php';
session_start();

if (!isset($_SESSION['id'])) {header("Location: ../login.php");}
$nom=$_POST['name'];
$pass=$_POST['password'];
$role=$_POST['category'];


    $sql = "INSERT INTO `admin` (`id`, `role`, `nom`, `pass`) VALUES (NULL, '$role', '$nom', '$pass');";
    $result = mysql_query($sql);
    header("Location: index.php");
?>