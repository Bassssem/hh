<?php 
include 'config.php';

session_start();

if (isset($_SESSION['id'])) {
    if ($_SESSION['role']=="serveur")
        header("Location: /serveur/index.php");
    if ($_SESSION['role']=="chef")
        header("Location: /chef/index.php");
    if ($_SESSION['role']=="admin")
        header("Location: /admin/index.php");
}
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$password = $_POST['pass'];

$sql = "SELECT * FROM `admin` WHERE nom='$email' AND pass='$password'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0) {
    $row = mysql_fetch_assoc($result);
  $_SESSION['id'] = $row['id'];
  $_SESSION['role'] = $row['role'];
  if ($_SESSION['role']=="serveur")
        header("Location: /serveur/index.php");
    if ($_SESSION['role']=="chef")
        header("Location: /chef/index.php");
    if ($_SESSION['role']=="admin")
        header("Location: /admin/index.php");
} else {
  echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<section class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="text" required maxlength="50" name="email" placeholder="enter your email" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" required maxlength="20" name="pass" placeholder="enter your password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" class="btn" name="submit">
     
   </form>

</section>




<script src="js/script.js"></script>

</body>
</html>