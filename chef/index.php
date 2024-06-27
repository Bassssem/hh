<?php 
include '../config.php';
session_start();

if (!isset($_SESSION['id'])) {header("Location: ../login.php");}

    $sql = "SELECT * FROM `admin` WHERE id = ".$_SESSION['id'];
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
    $nom= $row['nom'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serveure</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
<script>
    setTimeout(function() {
    location.reload();
}, 10000);

</script>
  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick"><?php echo $nom; ?></h1>

          <p class="title"><?php echo $row['role']; ?></p>
         <br>
          <p class="title"><a href="logout.php">log out</a></p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span></span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

  
    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>Orders:</button>
          </li>
        </ul>

      </nav>



        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Orders:</h3>

          <ul class="testimonials-list has-scrollbar">

<?php 

    $req="SELECT DISTINCT `num_table` FROM `orders` where etap = 1;";
    $result = mysqli_query($conn, $req);
    while($row = mysqli_fetch_assoc($result)){



?>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/order.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Order : <!-- fi blaset kel wahed hot noumrou l order --></h4>

                <div class="testimonials-text" data-testimonials-text>
                  <!--hnee normalment andek boucle bch yjib les order -->
                  <div class="item">
                    <h3>Table : <?php echo $row['num_table']; ?></h3>
                    
                   <?php  $sql = "SELECT * FROM `orders` WHERE etap = 1 AND num_table=".$row['num_table'];
                    $result1 = mysqli_query($conn, $sql);
                    while($row1 = mysqli_fetch_assoc($result1)){
                        
                    $sql1 = "SELECT * FROM `produit` WHERE id=".$row1['id_produit'];
                    $result11 = mysqli_query($conn, $sql1);
                    $row11 = mysqli_fetch_assoc($result11);
                    ?>
                    
                  <h3> <p style="color : black;"> <?php echo $row11['nom']; ?> </p>
                  <?php } ?>
                  </div>
                 
                
                  <a href="setmodife.php?idor=<?php echo $row['num_table']; ?>"><button>Confirm Order</button></a>
                  <a href="setmodife.php?idorsup=<?php echo $row['num_table']; ?>"><button>suuprimer Order</button></a>
                </div>

              </div>
            </li>
            
<?php } ?>
           


          </ul>

        </section>
        


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Order:</h4>

              <time datetime="2021-06-14"></time>

              <div data-modal-text>
                
              </div>

            </div>

          </section>

        </div>


       





   

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>