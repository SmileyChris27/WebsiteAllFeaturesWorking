<!DOCTYPE html>
<html>
    <head>
        <title>Final Project</title>
         <link rel="stylesheet" type="text/css" href="view/main.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="view/style-grid1.css" type="text/css" media="all">
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

<body class="homebg">
  <div class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>


    <header class="masthead">
        <h1>All beginner UNIX users should know these commands for the terminal, like the command prompt for windows there is a different sets of commands to learn and there are similarities as well.</h1>
    </header>

    <main id="content" class="main-content">
        <p><figcaption>pwd (print working directory)</figcaption>Prints the current working directory on your screen. This is the directory where you are currently located. When you manipulate files and sub-directories, this is where they will (by default) be</p>
    </main>

    <aside class="sidebar">
        <p><figcaption>cd (change directory)</figcaption>This command is used to change the current working directory.</p>
    </aside>

    <main id="content" class="main-content">
        <p><figcaption>mkdir (make directory)</figcaption>This command makes a sub-directory under the current working directory.</p>
    </main>

    <aside class="sidebar">
        <p><figcaption>rmdir (remove directory)</figcaption>This command removes (deletes) a sub-directory under the current working directory. The directory to be removed must be empty of all files and sub-directories.</p>
    </aside>

    <main id="content" class="main-content">
        <p><figcaption> ls (list files)</figcaption>This command is similar to DIR in CMD; it displays a list of all the files in the directory. New users don't have any files in their home directory.</p>
    </main>

    <aside class="sidebar">
        <p><figcaption>cat (concatenate files)</figcaption>This command is used to combine files or to print files to the screen. By default, the cat command sends its output to your screen (in UNIX we call this standard-output or stdout for short).</p>
    </aside>

    <main id="content" class="main-content">
        <p><figcaption>cp (copy files)</figcaption>This command stands for copy, and is used for copying one file to another.</p>
    </main>

    <aside class="sidebar">
        <p><figcaption>mv (move files)</figcaption>The mv command is used for moving or renaming files.</p>
    </aside>

    <main id="content" class="main-content">
        <p><figcaption>rm (remove files)</figcaption>The rm utility is used for erasing files and directories.</p>
    </main>

    <aside class="sidebar">
        <p><figcaption>chmod (change access permissions)</figcaption>This utility allows users to change the access permissions on files.</p>
    </aside>

    <main id="content" class="main-content">
        <p><figcaption>grep (search for text strings within files)</figcaption>The grep command searches files for specified words or patterns</p>
    </main>
    

    <aside class="sidebar">
        <p><figcaption>mv (move files)</figcaption>The mv command is used for moving or renaming files.</p>
    </aside>

    <center>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/IVquJh3DXUA"></iframe>
    <center>


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