<?php 
include '../config.php';
session_start();

if (!isset($_SESSION['id'])) {header("Location: ../login.php");}
if (isset($_GET['idor'])) {
    $req="UPDATE `orders` SET etap = '1', id_serveur = ".$_SESSION['id']." WHERE etap = 0 and `num_table` =".$_GET['idor'];
    $result = mysql_query($req);
}
if (isset($_GET['idorsup'])) {
    $req="DELETE FROM `orders` WHERE num_table =".$_GET['idorsup'];
    $result = mysql_query($req);
}
if (isset($_GET['idor5als'])) {
    $req="UPDATE `orders` SET etap = '3', id_serveur = ".$_SESSION['id']." WHERE `num_table` =".$_GET['idor5als'];
    $result = mysql_query($req);
}
header("Location: index.php");


?>