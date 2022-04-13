<!DOCTYPE html>
<?php 
include_once('checker.php'); 
?>
<html>
    <head>
        <title>Final Project</title>
         <link rel="stylesheet" type="text/css" href="view/main.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="view/style-grid.css" type="text/css" media="all">
        <link rel="stylesheet" href="view/style-main.css" type="text/css" media="all">
    </head>

<?php
  
      echo "<nav class='topnav' id='myTopnav'>";
      echo "<a href='index.php?choice=home' class='active'>Home</a>";
      echo "<a href='index.php?choice=contact'>Contact</a>";
      echo "<a href='index.php?choice=conversions'>Decimal-Binary-Hex</a>";
      echo "<a href='index.php?choice=windows'>Windows CMD</a>";
      echo "<a href='index.php?choice=products'>PC Hardware Products</a>";
      echo "<a href='index.php?choice=linux'>Linux Terminal</a>";
      echo  "<a href='index.php?choice=cart'>Cart</a>";
     
      if(isset($_SESSION['ON']))
          echo "<a href='index.php?choice=logoff'>Logout</a>";
      else 
        echo "<a href='index.php'>Login</a>Logout</a>";


      
      
?>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
      </nav>

<body class="homebg">
  <div class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>


    <header class="masthead">
        <h1>Welcome to Smiley Technology: Where Tech puts a Smile on Anyone</h1>
        <center>
        <figure><img src="view/images/SmileyFace.png" alt ="SmileyFace" width="300" height="150"></figure>
      </center>

    </header>

    <main class="main-content">
    <div class="Box 1">Welcome to Smiley Technology: Where tech puts a Smile on anyones face</div></br>
    <div class="Box 2">This site is for new users trying to learn the fundamentals of computers</div></br>
    <div class="Box 3">We also sell computer parts so you can build your own PC!</div></br>
    <div class="Box 4">You have to start somewhere</div></br>
    <div class="Box 5">So why not start here!</div></br>
    </main>


    <aside class="sidebar">
      <center>
        <figure><img src="view/images/MicrosoftSurfaceLaptop2.png" alt ="MicrosoftSurfaceLaptop2" width="300" height="150"><p></figure>
        <input style="background-color: black; color: green;  " type="submit" name='choice2' value="$600" class="addToCart"/>
    <p><strong>Surface Laptop 2</strong></p>
   <p>Intel i7 10th Gen Processor</p>
   <p>2TB SSD Hardrive</p>
   <p>16GB RGB Ram</p>
   <p>Intel HD Graphics 4400</p>
      </center>
    </aside>




    <main class="main-content2">
    <center>
        <figure><img src="view/images/RedPCCase.png" alt ="RedPCCase" width="300" height="150"></figure>
   <input style="background-color: black; color: green;  " type="submit" name='choice2' value="$500" class="addToCart"/>
   <p><strong>Custom Build PC</strong></p>
   <p>Intel i7 10th Gen Processor</p>
   <p>2TB SSD Hardrive</p>
   <p>16GB RGB Ram</p>
   <p>Nvidia GeForce RTX 2060</p>

  </center>
</main>
    



    <aside class="sidebar2">
       This page is dedicated to ITs who are just getting started in the computer world and who want to improve there skills and start off there journey into buying a PC or laptop. There are many websites out there but this one will help you to know how to learn about basic computer hardware and techniques you can do on a Windows and Linux operating system. There is many things to learn about a computer but I will teach you about the basics that every tech should know. Below are pictures of a PC and laptop.  We are selling those computers for a reasonable price.</p>
    </aside>

    <footer class="footer-content">
        <p><span class="bg">@2022 SmileyChris27</span></p>
        <a href="https://www.facebook.com/chris.velez.5815"><span>Facebook</span></a> <span class="bar">|</span>
        <a href="http://www.twitter.com/VelezCM93"><span>Twitter</span></a> <span class="bar">|</span>
    </footer>






</div>

<script>            
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
  </script>

</head>
  </body>
    </html>
