<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/login.css">
	<link rel="stylesheet" type="text/css" href="view/style.css">
    <link rel="stylesheet" type="text/css" href="view/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Login Form</title>
</head>
<body>

  <style>
a { color: Red; 

</style>
  
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


<div class="container">
		<img src="view/images/icon.png"/>
			<form action='index.php' method='GET'>
				<div class="form-input">
					<?php
            if(!isset($user)) $user='';
              echo "<input type='text' name='username' value='$user' placeholder='Enter the User Name'/>";
          ?>
				</div>
		<div class="form input">
			<?php
        if(!isset($pass)) $pass='';
          echo "<input type='password' name='password' placeholder='Password'/>";
      ?>
		</div>
		<input type="submit" value="Login" class="btn-login"/>
		<!--<input type="submit" value="Sign Up" onclick="mylink()" class="btn-signup"/>-->
<a href="index.php?choice=registration">Sign Up</a>
    <input type='hidden' name='choice' value='logon'/>
    <?php
      if(isset($_GET['message'])) echo "<div style='color:red; width:330px'>".$_GET['message']."</div>";
      if(isset($message)) echo "<div style='color:red; width:330'>".$message."</div>";
    ?>

</form>
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

        function mylink(){
          window.location.assign("signup.php")
        }

</script>




</body>
</html>
