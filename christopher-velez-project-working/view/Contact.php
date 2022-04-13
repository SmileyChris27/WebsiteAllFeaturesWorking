<!DOCTYPE html>
<html>
<head>
	<title>Final Project</title>
	    <link rel="stylesheet" type="text/css" href="view/style.css">
      <link rel="stylesheet" type="text/css" href="view/main.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<body class="homebg">
	

<?php
  
      echo "<nav class='topnav' id='myTopnav'>";
      echo "<a href='index.php?choice=home' class='active'>Home</a>";
      echo "<a href='index.php?choice=contact'>Contact</a>";
      echo "<a href='index.php?choice=conversions'>Decimal-Binary-Hex</a>";
      echo "<a href='index.php?choice=windows'>Windows CMD</a>";
      echo "<a href='index.php?choice=products'>PC Hardware Products</a>";
      echo "<a href='index.php?choice=linux'>Linux Terminal</a>";
      if(isset($_SESSION['ON']))
          echo "<a href='index.php?choice=logoff'>Logout</a>";
      else 
        echo "<a href='index.php'>Login</a>Logout</a>";


      
      echo  "<a href='index.php?choice=windows'>Cart</a>";
?>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
      </nav>


  <div class="contact-title">
		<h1>Welcome To Smiley Chris's Page</h1>
		<h2>Have some questions? Please email us here.</h2>
	</div>

	<div class="contact-form">
		
		<input name="name" type="text" class="form-control" placeholder="Your Name" required>
		<br>
			
    <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

		<textarea  rows="10" cols="20" name="message" class="form-control" placeholder="Message" required></textarea><br>

		<input type="submit" value="Send Message" class="form-control submit" value="SEND MESSAGE">
  </div>
  
          

<footer>
<div id="Footer">
  <p>&copy; Copyright @ 2022 SmileyChris27</p>
  <a href="https://www.facebook.com/chris.velez.5815"><span>Facebook</span></a> <span class="bar">|</span>
  <a href="http://www.twitter.com/VelezCM93"><span>Twitter</span></a> <span class="bar">|</span>
</div>
</footer>


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


</body>
</head>
</html>