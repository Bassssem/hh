<?php 
include '../config.php';
session_start();

if (!isset($_SESSION['id'])) {header("Location: ../login.php");}

if (isset($_GET['idor'])) {
    $req="UPDATE `orders` SET etap = '2' WHERE etap = 1 and `num_table` =".$_GET['idor'];
    $result = mysql_query($req);
}
if (isset($_GET['idorsup'])) {
    $req="DELETE FROM `orders` WHERE num_table =".$_GET['idorsup'];
    $result = mysql_query($req);
}

header("Location: index.php");
?>