<?php 
include "config.php";

    $id=$_POST['id'];
    $table=$_POST['table'];
    $req="INSERT INTO `command` (`id`, `num_table`, `id_produit`, `date`) VALUES (NULL, '$table', '$id', now());";
    $a=mysql_query($req);

?>