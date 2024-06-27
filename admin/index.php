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
  <title>vCard - Personal Portfolio</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #333; /* Set background color of the body */
        color: white; /* Set default text color */
    }
    .signup-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #444; /* Set background color of the form container */
        color: white; /* Set text color inside the form container */
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        color: white; /* Set text color of the input */
    }
    button {
        background-color: #ff8c00; /* Set background color of the button to orange */
        color: rgb(255, 255, 255);
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }
</style>

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

          <p class="title">Gerant</p>
          <br>
          <p class="title"><a href="logout.php">log out</a></p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

    

            

          </li>
        </ul>

        <div class="separator"></div>

       

      </div>

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
            <button class="navbar-link  active" data-nav-link>Register</button>
          </li>

         

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>List ordre</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Stock</button>
          </li>

        </ul>

      </nav>



      <article class="register active" data-page="register">

        <header>
          <h2 class="h2 article-title">Add user</h2>
        </header>

        <section class="about-text">
          <p>
            you can add any user here 
          </p>
          <div class="signup-container">
            <h2>Sign Up Form</h2>
            <form action="adduser.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                  <label for="category">Category:</label>
                  <select id="category" name="category" required>
                      <option value="serveur">Serveur</option>
                      <option value="chef">chef Cuisinier</option>
                      <option value="barman">Barman</option>
                  </select>
              </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        </section>

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Users</h3>

          <ul class="testimonials-list has-scrollbar">
<?php 


    $sql = "SELECT * FROM `admin`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    


?>
            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/my-avatar.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title><?php echo $row['nom'];?></h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    <?php echo $row['role'];?>
                  </p>
                   <a href="suppuser.php?idsup=<?php echo $row['id']; ?>"><button>supprimer</button></a>
                </div>

              </div>
            </li>
            <?php 
}
?>
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

              <h4 class="h3 modal-title" data-modal-title></h4>

              <time datetime="2021-06-14"><!-- wa9teh dkhal yekhdem --></time>

              <div data-modal-text>
                <p>
                 
                </p>
              </div>

            </div>

          </section>

        </div>   

      </article>
      <article class="list ordre" data-page="list ordre">

        <header>
          <h2 class="h2 article-title">Orders list</h2>
        </header>

        <section class="projects">

          

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              

              

            </button>

           

          </div>

          <ul class="project-list">

            
          
          
          
<form action="getorders.php" method="post">          
  <!--  Details -->
  <div class="form-group">
    <h2 class="heading">Details</h2>
    <div class="grid">
        <br>
        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Start :</label>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive" class="floatLabel" name="start" value="<?php echo date('Y-m-d'); ?>">
        
      </div>      
    </div>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;End :</label>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="end" value="<?php echo date('Y-m-d'); ?>" />
        
      </div>      
    </div>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;Serveur :</label>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select name="serveur" class="floatLabel">
            
            <?php 


    $sql = "SELECT * FROM `admin` where role like 'serveur' ;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    


?>
          <option value="<?php echo $row['id'];?>"><?php echo $row['nom'];?></option>
          
          <?php 


    }

?>
        </select>
        
      </div>      
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="lister">
    
</form>









            

            

         

            

           

         

          
          </ul>

        </section>

      </article>
      <article class="stock" data-page="stock">
      
    
        <div class="form-group">
          <label for="category">Product:</label>
          <select id="category" name="category" required>
              <option value="eau">eau</option>
              <option value="gazeuse">gazeuse</option>
              <option value="fraise">fraise</option>
          </select>
      </div>
    
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" placeholder="Enter quantity">
    
        <button onclick="addToStock()">Add to Stock</button>
        <h3>Current Stock</h3>
        <ul id="stockList"></ul>
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