<!DOCTYPE html> 
<html>
    <head>
        <title>Computer Hardware</title>
         <link rel="stylesheet" type="text/css" href="main2.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style-grid1.css" type="text/css" media="all">
        <link rel="stylesheet" href="style-main.css" type="text/css" media="all">
    </head>

    <nav class="topnav" id="myTopnav">
          <a href="home.php" class="active">Home</a>
          <a href="Contact.php">Contact</a>
          <a href="Decimal-Binary-Hex.php">Decimal-Binary-Hex</a>
          <a href="WindowsCMD.php">Windows CMD</a>
          <a href="PCHardware.php">PC Hardware Products</a>
          <a href="LinuxTerminal.php">Linux Terminal</a>
          <a href="login.php">Login</a>
          <a href="signup.php">Sign Up</a>
          <a href="cart.php">Cart</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
      </nav>


<body class="homebg">
  <div class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>


<header class="masthead">
        <h1>This goes more indept with motherboards.Here's a picture of a Micro-ATX, Mini-ITX, Nano-ITX and Pico-ITX</h1>
        <h1>Which is the most popular motherboard?</h1>
        <center>
      <button onclick="myFunction1()">Click me for the Answer</button>
</center>
        <h1 id="Answer"></h1>
    </header>
  

<main id="content" class="main-content">
        <img src="images/MotherboardOrder.jpg" alt ="MotherboardOrder" width="300" height="150"></aside>
    </main>



<script>
    function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }

      function myFunction1() {
          document.getElementById("Answer").innerHTML = "ATX motherboard";

        }

</script>