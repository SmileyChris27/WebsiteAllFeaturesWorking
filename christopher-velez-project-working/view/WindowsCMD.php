<!DOCTYPE html
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


    <header class="masthead">
        <h1>Windows Command Prompt Basic Commands: The first command one should be aware exists is the "help" command. This command will display all
        the currently supported commands that can be entered at the command prompt. Below is a list of the command that one should know.</h1>
    </header>

    <main id="content" class="main-content">
        <p>cd and chdir: Specifies that you want to change to another directory. Use " " when extensions are disabled. For example cd "Windows\system" </p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>dir: Displays a list a set of files and subdirectories in a directory. Has switch options</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>md and mkdir: Creates directories</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>rd and rmdir: Removes or deletes a directorys and subdirectories (using switches)</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>copy: Copies one or more files from source to destination</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>xcopy: Copies files and directory trees from source to destination</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>copy: Copies one or more files from source to destination</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>robocopy: Robust file copy for Windows. More powerful than copy and xcopy</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>del and erase: Deletes one or more files</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>Rename or ren: Renames a file or files. Destination can't be a new drive or path</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>type: Displays the contents of a text file or files</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>find: Searches for a text string in a file or files</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>tasklist: Displays a list of currently running processes either on the local or remote computer</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>taskkill: Used to erminate tasks by process ID PID or by image name</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>start: Starts a seprate windows to run a specified program or command</p>
    </main>

     <aside class="sidebar">
        <p style="color:gold";>shutdown: Shutdown or restart the computer</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>set: Displays, set, or removes cmd.exe environment variables</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>rem: Records, comments batch files or CONFIG.SYS</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>path: Displays or sets a search path for executable files</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>chkdsk: Checks a disk and displays a status report</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>attrib: Displays or changes files attributes</p>
    </main>


    <aside class="sidebar">
        <p style="color:gold";>ASSOC: Most files in Windows are associated with a specific program that is assigned to open the file by default. At times, remembering these associations can become confusing. You can remind yourself by entering the command "assoc" to display a full list of file name extensions and program associations.</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>CIPHER: Cipher wipes a directory by writing random data to it. To wipe your C drive, for example, you'd use the command cipher /w:c", which will wipe free space on the drive. The command does not overwrite undeleted data, so you will not wipe out files you need by running this command.</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";><aside class="sidebar">
        <p style="color:gold";>DRIVERQUERY: Drivers remain among the most important software installed on a PC. Improperly configured or missing drivers can cause all sorts of trouble, so its good to have access to a list of what’s on your PC. That’s exactly what the “driverquery” command does. You can extend it to “driverquery ” to obtain more information, including the directory in which the driver is installed.</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";>File Compare - fc: You can use this command to identify differences in text between two files. It's particularly useful for writers and programmers trying to find small changes between two versions of a file. Simply type "fc" and then the directory path and file name of the two files you want to compare. You can also extend the command in several ways. Typing "/b" compares only binary output, "/c" disregards the case of text in the comparison, and "/l" only compares ASCII text. So, for example, you could use the following:fc /l "C:\Program Files (x86)\example1.doc" "C:\Program Files (x86)\example2.doc" The above command compares ASCII text in two word documents.</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";><aside class="sidebar">
        <p style="color:gold";>IPCONFIG: This command relays the IP address that your computer is currently using. However, if you're behind a router (like most computers today), you'll instead receive the local network address of the router. Still, ipconfig is useful because of its extensions. "ipconfig /release" followed by "ipconfig /renew" can force your Windows PC into asking for a new IP address, which is useful if your computer claims one isn't available. You can also use “ipconfig /flushdns” to refresh your DNS address. These commands are great if the Windows network troubleshooter chokes, which does happen on occasion.</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";><main id="content" class="main-content">
        <p style="color:gold";>NETSTAT: Entering the command "netstat -an" will provide you with a list of currently open ports and related IP addresses. This command will also tell you what state the port is in listening, established or closed. This is a great command for when you're trying to troubleshoot devices connected to your PC or when you fear a Trojan infected your system and you're trying to locate a malicious connection.</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";>PING: Sometimes, you need to know whether or not packets are making it to a specific networked device. That's where ping comes in handy. Typing "ping" followed by an IP address or web domain will send a series of test packets to the specified address. If they arrive and are returned, you know the device is capable of communicating with your PC; if it fails, you know that there's something blocking communication between the device and your computer. This can help you decide if the root of the issue is an improper configuration or a failure of network hardware.</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";><main id="content" class="main-content">
        <p style="color:gold";>PATHPING: This is a more advanced version of ping that's useful if there are multiple routers between your PC and the device you're testing. Like ping, you use this command by typing "pathping" followed by the IP address, but unlike ping, pathping also relays some information about the route the test packets take.</p>
    </main>

    <aside class="sidebar">
        <p style="color:gold";><aside class="sidebar">
        <p style="color:gold";>TRACERC: The "tracert" command is similar to pathping. Once again, type "tracert" followed by the IP address or domain you'd like to trace. You'll receive information about each step in the route between your PC and the target. Unlike pathping, however, tracert also tracks how much time (in milliseconds) each hop.</p>
    </aside>

    <main id="content" class="main-content">
        <p style="color:gold";><main id="content" class="main-content">
        <p style="color:gold";>SHUTDOWN: As of Windows 8/8.1 there is now a shutdown command that – you guessed it! – shuts down your computer. This is of course redundant with the already easily accessed shutdown button, but what's not redundant is the "shutdown /r /o" command, which restarts your PC and launches the Advanced Start Options menu, which is where you can access Safe Mode and Windows recovery utilities. This is useful if you want to restart your computer for troubleshooting purposes.</p>
    </main>

    <center>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/8JzW1l4wfmQ"></iframe>
    </center>


    <footer class="footer-content">
        <p style="color:gold";><span class="bg">@2022 SmileyChris27</span></p>
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