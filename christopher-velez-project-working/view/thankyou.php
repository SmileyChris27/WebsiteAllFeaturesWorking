<!DOCTYPE html>

<?php 
include_once('checker.php'); 
?>


<style>
h1{
  color: red;
}

a { color: #FF0000; } /* CSS link color */
h2{
  color: red;
}

</style>

<html>
    <head>
        <title>Computer Hardware</title>
             <link rel="stylesheet" type="text/css" href="view/style.css">
             <link rel="stylesheet" type="text/css" href="view/main.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
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
<center>
<div style='text-align:left;width:600px;color:red;'>
<h2>THANK YOU</h2> 

Thank You For Your Order <a href='index.php?choice=products'>Continue Shopping</a>
</div>
</center>

</body>
</html>