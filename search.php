<?php 
include "config.php";

$table = $_GET['table'];

$req1 = "SELECT * FROM `command` WHERE num_table='$table';";
$res = mysql_query($req1);
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

      <a href="home.html" class="logo">yum-yum 😋</a>

      <nav class="navbar">
         <a href="index.php?table=<?php echo $table; ?>">home</a>
         <a href="about.php?table=<?php echo $table; ?>">about</a>
         <a href="menu.php?table=<?php echo $table; ?>">menu</a>
         <a href="orders.php?table=<?php echo $table; ?>">orders</a>
         <a href="contact.php?table=<?php echo $table; ?>">contact</a>
      </nav>

      <div class="icons">
         <a href="search.php?table=<?php echo $table; ?>"><i class="fas fa-search"></i></a>
         <a href="cart.php?table=<?php echo $table; ?>"><i class="fas fa-shopping-cart"></i><!--<span>(3)</span>--></a>
        <a href="login.php"><div id="user-btn" class="fas fa-user"></div></a>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      

   </section>

</header>


<section class="search-form">
   <form action="" method="post">
      <input type="text" class="box" name="search_box" placeholder="search here..." maxlength="100">
      <button type="submit" class="fas fa-search" name="search_btn"></button>
   </form>
</section>

<section class="products" style="padding-top: 0; min-height: 100vh;"></section>
























<footer class="footer">

   

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</footer>

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="js/script.js"></script>

</body>
</html>