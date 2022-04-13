<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8 />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Final Project</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic|PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="view/main.css">
        <link href='view/style3.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="view/style-main.css" type="text/css" media="all">
        
        
        
	</head>
    
	<body>
        <body class="homebg">
        <main class="main" role="main">
        
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


      
      echo  "<a href='index.php?choice=cart'>Cart</a>";
?>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
      </nav>

            
            <h1>Converting Decimal To Binary To Hexadecimal</h1>
        
            
           



            <figure class="featugold-image">
                <img src="view/images/BinaryOriginal.gif" 
                    srcset="view/images/BinarySmall.gif 250w,
                            view/images/BinaryMedium.gif 1000w,
                            view/images/BinaryLarge.gif 1200w,
                            view/images/BinaryExtraLarge.gif 1200w" 

                alt="BinaryOriginal">
                <figcaption class="image-caption">
                    <p>Welcome to the World of Binary where it is used in everyday activities. This is where I will show you how to do conversations here, you will learn this in your Discrete Stuctures course.</p>
                </figcaption>
            </figure>
            

            <p>EX 1. Hex - Decimal</p>
            <p>23E Hex-Base 16 System</p>
            <p>Each one goes up by a power for each Hex Number</p>
            <p>2*16<sup>2</sup> + 3<sup>1</sup> + 14*16<sup>0</sup></p>
            <p>2*256 + 48 + 14</p>
            <p>512 + 62 = 574 Decimal Number base 10</p>
            
            <hr>

            <p>EX 2. Decimal - Hex</p>
            <p>479 Decimal Number Base 10</p>
            <p>479/16 = 29.9375 = 29 Remainder 15</p>
            <p>29/16 = 1.8125 = 1 Remainder 13</p>
            <p>1\16 + 0.0625 = 0 Remainder 1</p>
            <p>15 = F Least Significant Digit</p>
            <p>13 = D</p>
            <p>1 = 1 Most Significant Digit</p>
            <p> (FD1) 16 Hex-Base System</p>

            <hr>

            <p>EX 3. Hex - Binary</p>
            <p> A9 </p>
            <p> 8 4 2 1</p>
            <p> 2<sup>3</sup> 2<sup>2</sup> 2<sup>1</sup> 2<sup>0</sup> </p>
            <p> 1 0 0 1</p>
            <p> 8 4 2 1</p>
            <p> 1 0 1 0</p>
            <p> A9 16 Hex-Base System</p>
            <p> 1010 1001 2 Binary-Base System</p>

            <hr>

            <p>EX 4. Binary - Decimal</p>
            <p>1010 | 1001</p>
            <p> 2<sup>7</sup> 2<sup>6</sup> 2<sup>5</sup> 2<sup>4</sup> 2<sup>3</sup> 2<sup>2</sup> 2<sup>1</sup> 2<sup>0</sup> </p>
            <p>128 + 32 + 8 + 1 = 169 10 Decimal-Base System </p>

            <hr>

            <p>EX 5. Binary - Hex</p>
            <p>1011 | 0111</p>
            <p>8421 | 8421</p>
            <p>8 + 2 + 1 = 11</p>
            <p>4 + 2 + 1 = 7</p>
            <p>B | 7</p>
            <p>B7 16 Hex-Base System</p>

            <hr>

            <p>EX 6. Binary - Decimal</p>
            <p>1 0 1 0</p>
            <p>2<sup>3</sup> + 0 + 2<sup>1</sup> + 0</p>
            <p>8 + 2 = 10</p>

            <hr>

            <p>EX 7. Decimal - Binary</p>
            <p>75</p>
            <p>128 64 32 16 | 8 4 2 1</p>
            <p>0 1 0 0 | 1 0 11</p>
            <p>75 - 64 = 11</p>
            <p>11 - 8 = 3</p>
            <p>3 - 2 = 1</p>

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






        
        </main>
	</body>
</html>
