<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "id18808262_resto";

$conn = mysql_connect($server, $user, $pass);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($database, $conn);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>