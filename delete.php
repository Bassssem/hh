<?php 
include "config.php";
    $id=$_POST['id'];
    
    $req="delete from `command` where id='$id';";
    $a=mysql_query($req);
    
    
    

?>