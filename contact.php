<?php 
include "config.php";


    $table=$_GET['table'];

    
   
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

<div class="heading">
   <h3>contact us</h3>
   <p><a href="index.php">home </a> <span> / contact</span></p>
</div>

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>tell us something!</h3>
         <input type="text" name="name" required placeholder="enter your name" maxlength="50" class="box">
         <input type="number" name="number" required placeholder="enter your number" max="9999999999" min="0" class="box" onkeypress="if(this.value.length == 10) return false;">
         <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="box">
         <textarea name="msg" placeholder="enter your message" required class="box" cols="30" rows="10" maxlength="500"></textarea>
         <input type="submit" value="send message" class="btn" name="send">
      </form>

   </div>

</section>


























<footer class="footer">

  

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</footer>

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="js/script.js"></script>
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