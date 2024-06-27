<?php 
include "config.php";
    $table=$_GET['table'];
    
    
    if(isset($_GET ['sp'])){
    $req1="select * from `command` where num_table='$table';";
    $res=mysql_query($req1);
    while($row=mysql_fetch_assoc($res)){
    $id=$row['id'];
    $id_produit=$row['id_produit'];
    $req="INSERT INTO `orders` (`id`, `num_table`, `id_produit`, `date`, `etap`,`id_serveur`) VALUES (NULL, '$table', '$id_produit', now(),0,0);";
    $a=mysql_query($req);
    
    $req="delete from `command` where id='$id';";
    $a=mysql_query($req);
    
    }}
    
header("Location: orders.php?table=".$table);
?>