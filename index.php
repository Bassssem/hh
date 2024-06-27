<?php 
include "config.php";


    $table=$_GET['table'];
    
    $req1="select * from `command` where num_table='$table';";
    $res=mysql_query($req1);
    
   
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

      <a href="index.php" class="logo">yum-yum 😋</a>

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

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>delicious pizza</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/home-img-1.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>double hamburger</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/home-img-2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>roasted chicken</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/home-img-3.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category">

   <h1 class="title">food category</h1>

   <div class="box-container">

      <a href="category.html" class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fast food</h3>
      </a>
   
      <a href="category.html" class="box">
         <img src="images/cat-2.png" alt="">
         <h3>main dishes</h3>
      </a>
   
      <a href="category.html" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>drinks</h3>
      </a>
   
      <a href="category.html" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>desserts</h3>
      </a>

   </div>

</section>

<section class="products">

   <h1 class="title">latest dishes</h1>

   <div class="box-container">

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/pizza-1.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">delicious pizza 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/dish-1.png" alt="">
         <a href="category.html" class="cat">dishes</a>
         <div class="name">main dish 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/burger-1.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">chezzy hamburger 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/dessert-1.png" alt="">
         <a href="category.html" class="cat">dessert</a>
         <div class="name">delicious dessert 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/drink-1.png" alt="">
         <a href="category.html" class="cat">drinks</a>
         <div class="name">fresh drink 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/dish-2.png" alt="">
         <a href="category.html" class="cat">dishes</a>
         <div class="name">main dish 02</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

   </div>

   <div class="more-btn">
      <a href="menu.html" class="btn">veiw all</a>
   </div>

</section>




















<footer class="footer">

   <section class="box-container">

      <div class="box">
         <img src="images/email-icon.png" alt="">
         <h3>our email</h3>
         <a href="mailto:shaikhanas@gmail.com">shaikhanas@gmail.com</a>
         <a href="mailto:anasbhai@gmail.com">anasbhai@gmail.com</a>
      </div>

      <div class="box">
         <img src="images/clock-icon.png" alt="">
         <h3>opening hours</h3>
         <p>00:07am to 00:10pm </p>
      </div>

      <div class="box">
         <img src="images/map-icon.png" alt="">
         <h3>our address</h3>
         <a href="https://www.google.com/maps">mumbai, india - 400104</a>
      </div>

      <div class="box">
         <img src="images/phone-icon.png" alt="">
         <h3>our number</h3>
         <a href="tel:1234567890">+123-456-7890</a>
         <a href="tel:1112223333">+111-222-3333</a>
      </div>

   </section>

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</footer>














<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   grabCursor:true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>
<div id="chatbot" class="main-card collapsed">
    <button id="chatbot_toggle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M15 4v7H5.17l-.59.59-.58.58V4h11m1-2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm5 4h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="display:none">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
        </svg>
    </button>
    <div class="main-title">
        <svg viewBox="0 0 640 512" title="robot">
            <path fill="currentColor" d="M32,224H64V416H32A31.96166,31.96166,0,0,1,0,384V256A31.96166,31.96166,0,0,1,32,224Zm512-48V448a64.06328,64.06328,0,0,1-64,64H160a64.06328,64.06328,0,0,1-64-64V176a79.974,79.974,0,0,1,80-80H288V32a32,32,0,0,1,64,0V96H464A79.974,79.974,0,0,1,544,176ZM264,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,264,256Zm-8,128H192v32h64Zm96,0H288v32h64ZM456,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,456,256Zm-8,128H384v32h64ZM640,256V384a31.96166,31.96166,0,0,1-32,32H576V224h32A31.96166,31.96166,0,0,1,640,256Z"/>
        </svg>
        <span>Chatbot</span>
    </div>
    <div class="chat-area" id="message-box"></div>
    <div class="line"></div>
    <div class="input-div">
        <input class="input-message" name="message" type="text" id="message" placeholder="Type your message ..." />
        <button class="input-send" onclick="send()">
            <svg style="width:24px;height:24px">
                <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
            </svg>
        </button>
    </div>
</div>
<script>
  var running = false;

function send() {
  if (running == true) return;
  var msg = document.getElementById("message").value;
  if (msg == "") return;
  running = true;
  addMsg(msg);

  // Call the function to handle the chatbot response
  respondToInput(msg);
}

function addMsg(msg) {
  var div = document.createElement("div");
  div.innerHTML =
    "<span style='flex-grow:1'></span><div class='chat-message-sent'>" +
    msg +
    "</div>";
  div.className = "chat-message-div";
  document.getElementById("message-box").appendChild(div);
  document.getElementById("message").value = "";
  document.getElementById("message-box").scrollTop = document.getElementById(
    "message-box"
  ).scrollHeight;
}

function addResponseMsg(msg) {
  var div = document.createElement("div");
  div.innerHTML = "<div class='chat-message-received'>" + msg + "</div>";
  div.className = "chat-message-div";
  document.getElementById("message-box").appendChild(div);
  document.getElementById("message-box").scrollTop = document.getElementById(
    "message-box"
  ).scrollHeight;
  running = false;
}

function respondToInput(inputText) {
  // Your chatbot logic here
  const pairs = [
   
   
   
   
    [
      /asba lik/i,
      ["fi sormk ya nayyek"]
    ],
    
    [
      /(.*)/i,
      ["sayeb zeby min site keml jit ken liya ena \n bara chouf haja okhra"]
    ]
  ];

  for (const [pattern, responseList] of pairs) {
    const match = inputText.match(pattern);
    if (match) {
      var botResponse = responseList[Math.floor(Math.random() * responseList.length)];
      addResponseMsg(botResponse);
      return;
    }
  }

  var defaultResponse = "sayeb zeby min site keml jit ken liya ena.";
  addResponseMsg(defaultResponse);
}

document.getElementById("message").addEventListener("keyup", function (event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    send();
  }
});

document.getElementById("chatbot_toggle").onclick = function () {
  if (document.getElementById("chatbot").classList.contains("collapsed")) {
    document.getElementById("chatbot").classList.remove("collapsed");
    document.getElementById("chatbot_toggle").children[0].style.display =
      "none";
    document.getElementById("chatbot_toggle").children[1].style.display = "";
    setTimeout(addResponseMsg, 1000, "Hi");
  } else {
    document.getElementById("chatbot").classList.add("collapsed");
    document.getElementById("chatbot_toggle").children[0].style.display = "";
    document.getElementById("chatbot_toggle").children[1].style.display = "none";
  }
};
</script>
<style>


  @media (min-width: 450px) {
  .main-card {
    width: 60%;
    max-width: 300px;
    height: calc(100% - 32px) !important;
    border-radius: 8px !important;
    max-height: 400px;
    margin: 8px !important;
  }
}

.collapsed {
  width: 40px !important;
  height: 40px !important;
  border-radius: 20px !important;
  margin: 8px !important;
}

.main-card {
  background: white;
  color: white;
  width: 100%;
  height: 100%;
  margin: 0px;
  border-radius: 0px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  right: 0;
  bottom: 0;
  position: fixed;
  transition: all 0.5s;
  box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
}

#chatbot_toggle {
  position: fixed;
  right: 0;
  border: none;
  height: 40px;
  width: 40px;
  background: rebeccapurple;
  padding: 10px;
  color: white;
}

#chatbot_toggle:hover {
  background: #7d56a5;
}
  .line {
    height: 1px;
    background-color: rebeccapurple;
    width: 100%;
    opacity: 0.2;
  }
  .main-title {
    background-color: rebeccapurple;
    font-size: large;
    font-weight: bold;
    display: flex;
    height: 48px;
  }
  .main-title>div{
    height:48px;
    width:48px;
    display:flex;
    margin-left:8px;
  }
  .main-title svg {
    height: 24px;
    margin: auto;
  }
  .main-title > span {
    margin: auto auto auto 8px;
  }
  .chat-area {
    flex-grow: 1;
    overflow: auto;
    border-radius: 8px;
    padding: 16px;
    display: flex;
    flex-direction: column;
  }
  .input-message {
    padding: 8px 48px 8px 16px;
    flex-grow: 1;
    border: none;
  }
  .input-message:focus {
    outline: none;
  }
  .input-div {
    height: 48px;
    display: flex;
  }
  
  .input-send {
    background: transparent;
    width: 48px;
    height: 48px;
    right: 0%;
    border: none;
    cursor: pointer;
  }
  .input-send:hover {
    background: lavender;
  }
  .input-send svg {
    fill: rebeccapurple;
    margin: 11px 8px;
  }
  .chat-message-div {
    display: flex;
  }
  
  .chat-message-sent {
    background-color: white;
    margin: 8px 16px 8px 64px;
    padding: 8px 16px;
    animation-name: fadeIn;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-duration: 100ms;
    color: black;
    border-radius: 8px 8px 2px 8px;
    background-color: lavender;
    font-size: 16px;
  }
  
  .chat-message-received {
    background-color: white;
    margin: 8px 64px 8px 16px;
    padding: 8px 16px;
    animation-name: fadeIn;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-duration: 100ms;
    color: black;
    border-radius: 8px 8px 8px 2px;
    background-color: lavender;
    font-size: 16px;
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
  
    to {
      opacity: 1;
    }
  }
  
  ::-webkit-scrollbar {
    width: 10px;
  }
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }
  
  ::-webkit-scrollbar-thumb {
    background: #888;
  }
  
  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }


</style>
</body>
</html>