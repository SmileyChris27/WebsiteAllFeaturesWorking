<?php 
include_once('checker.php'); 
?>

<html><head><title>LOGIN WEB SESSION</title>
<link rel="stylesheet" type="text/css" href="view/css/loginsession.css" />
<link rel="stylesheet" type="text/css" href="view/css/menu.css" />
</head>
<body>

  <?php
  
      echo "<nav class='topnav' id='myTopnav'>";
      echo "<a href='index.php?choice=home' class='active'>Home</a>";
      echo "<a href='index.php?choice=contact'>Contact</a>";
      echo "<a href='index.php?choice=conversions'>Decimal-Binary-Hex</a>";
      echo "<a href='index.php?choice=windows'>Windows CMD</a>";
      echo "<a href='index.php?choice=products'>PC Hardware Products</a>";
      echo "<a href='index.php?choice=linux'>Linux Terminal</a>";
      if(isset($_SESSION['ON']))
          echo "<a href='index.php?choice=logoff'>Login</a>";
      else
          echo 
              "<a href='index.php'>Login</a>Login</a>";


      echo "<a href='index.php?choice=signup'>Sign Up</a>";
      echo  "<a href='index.php?choice=windows'>Cart</a>";
?>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
      </nav>


<center>
<form action="index.php" method="get">
	<div style='text-align:left;width:600px'>
   <center>
   <input type="hidden" name="choice" value="logoff2" />
   <input type="submit" value="Logoff">
   </center>
   </div>
</form>
</center>

</body>
</html>
