<!DOCTYPE html>
<html>

    <head>
        <title>Computer Hardware</title>
         <link rel="stylesheet" type="text/css" href="view/main2.css">
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
        <h1>If you work with computers you likely heard of different types of components in a PC or laptop such as a Case, Motherboard, CPU, Hard Drive, Graphic Card, Ram or Power Supply Box. Those are the 7 main components to a computer. Lets try to give you guys a simple outlook to each components and break it down for you to give you a better understanding of what millions of users use daily threw out the world. We also sell these products at a reasonable price to get you started on your jouney in the world of computers. </h1>
    </header>

    <main id="content" class="main-content">
        <p><figcaption><a href="https://www.amazon.com/ROG-XIII-Intel11th-Motherboard-Thunderbolt/dp/B08T6BHQC8/ref=sr_1_1?crid=1UP0CZT4TFZFE&keywords=asus+maximus+hero+13&qid=1649815317&sprefix=asus+maximus+hero+13%2Caps%2C66&sr=8-1">ATX Motherboard</a></figcaption>A motherboard is printed circuit board containing the principal components of a computer or other device. ATX stands for Advance Technology Extended which is the most popular motherboard today. There are also other form factors such as NLX (New Low Profile) and LPX (Low Profile Extended)One of the best form factor designs that keep a system cool would be called BTX (Balance technology Extended). Buy Now for $229.99 cheaper then amazon if you click the link above and read more details on your purchase.
         </p>
    </main>

    <aside class="sidebar">
      <center>
        <img src="view/images/motherboard.jpg" alt ="motherboard" width="300" height="150"></aside>
      </center>
      </div>
      <center>
        <form action='index.php' method='GET'>
              <input type='hidden' name='item'   value='Motherboard' />
              <input type='hidden' name='price'  value='229.99' />
              <input type='hidden' name='choice' value='products' />
              <input style="background-color: black; color: green;" type='submit' name='choice2' value='$229.99' class="addToCart" onclick="alert('Motherboard is in the cart please proceed to cart to check out ...')"/>
      </form>
      </center>
    
    </aside>

    <main id="content" class="main-content">
        <p><figcaption><a href="https://www.amazon.com/Intel-i7-12700K-Desktop-Processor-Unlocked/dp/B09FXNVDBJ/ref=sr_1_2?crid=2RHJ273BFJLJY&keywords=i7+12900k&qid=1649815580&sprefix=i7+12900k%2Caps%2C53&sr=8-2">Microprocessor</a></figcaption>The brain of the computer it is called the microprocessor or central processing unit, there are two types of brands which is Intel and AMD. There are Processor Sockets that determine which processor a motherboard can support provides mechanical and eletrical connections between a microprocessor and a circuit board locks Centeral Processing Unit into place, preventing it from moving or being damages. Pin grid array (PGA) socket: Pins aligned in uniform rows around socket but pins easily bent. Staggered pin grid array (SPGA): Pins staggered over socket and Squeezes more pins into a small space. Land grid array (LGA): Intel Technology Uses lands rather than pins. Buy now cheaper then amazon if you click the link above and read more details on your purchase</p>
    </main>

    <aside class="sidebar">
        <p><figcaption>Central Processing Unit</figcaption>Inside a CPU Processor Basic Components: Input/output (I/O) unit: Manages data and instructions entering and leaving the processor Control unit: Manages all activies inside the processor. One or more arithmetic logic units(ALU): Performs all logical operations (comparisions) and calculations. Registers: Small holding areas on processor chip (32 or 64 bits each typically 16 registers).Holds counters, data, instructions, and addresses ALC is currently processing. Internal memory caches (L1 is processor chip, L2 is on the processor packages, L3 is on the Motherboard): Holds data and instructions to be processed by ALU</p>
    </aside>

    <main id="content" class="main-content">
      <center>
        <img src="view/images/IntelCorei7.jpg" alt ="IntelCorei7" width="300" height="150">
      </center>
    </main>
    <center>
      <form action='index.php' method='GET'>
          <input type='hidden' name='item'   value='CPU' />
          <input type='hidden' name='price'  value='350.00' />
          <input type='hidden' name='choice' value='products' />
          <input style="background-color: black; color: green;" type='submit' name='choice2' value='$350.00' class="addToCart"
          onclick="alert('CPU is in the cart please proceed to cart to check out ...')"/>
      </center>

    <aside class="sidebar">
        <p> <p><figcaption><a href="DDRRAM.php">Double Data Rate Random Access Memory</a></figcaption>There are many diffrent types of RAM the one in the photo is as DDR 4 RGB (Red, Green, Blue) RAM (Random Access Memory) RAM is used to speed up your computer there are various of factors to consider when looking at overall speed. How much RAM is installed and the technology used. Speed of the memory in ns,MHz, or PC rating. ECC/parity or non-ECC/non-parity. Use of dual channeling. There are diffrent types of RAM. SRAM (static RAM) is random access memory (RAM) that retains data bits in its memory as long as power is being supplied. Unlike dynamic RAM (DRAM), which stores bits in cells consisting of a capacitor and a transistor, SRAM does not have to be periodically refreshed. Dynamic random-access memory (DRAM) is a type of random-access memory that stores each bit of data in a separate capacitor within an integrated circuit. The capacitor can be either charged or discharged; these two states are taken to represent the two values of a bit, conventionally called 0 and 1. Synchornous DRAM (SDRAM) is a type of memory stores on DIMM (dual inline memory module) that runs in sync with the system clock; running at the notch on the DIMM.</p>
    </aside>

    <main id="content" class="main-content">
      <center>
        <aside><img src="view/images/DDR4RGBRAM.jpg" alt ="DDR4RGBRAM" width="300" height="150"></aside>
      </center>
    </main>
    <center>
      <form action='index.php' method='GET'>
              <input type='hidden' name='item'   value='DDR4' />
              <input type='hidden' name='price'  value='350.00' />
              <input type='hidden' name='choice' value='products' />
              <input style="background-color: black; color: green;" type='submit' name='choice2' value='$99.99' class="addToCart" />
  </center>

    <aside class="sidebar">
        <p><figcaption><a href="HardDrive.php">SSD SATA(Serial advanced technology attachment) 16TB Solid State Drive(SSD)</a></figcaption>There are two types of hard drives one is called HDD (Hard Disk Drive) and a SSD (Solid State Drive) back in the day they used PATA drives or known as(Parellel ATA). Hard Drives have been around since 1956. Inside a HDD is something that looks more than a bit like an old record player. There is a platter, or stacked platters, which spin around a central axis a spindle typically at about 5,400 to 7,200 revolutions per minute. Some hard drives built for performance work faster. Solid State is industry shorthand for an integrated circuit, and thats the key difference between an SSD and a hard drive: there are no moving parts inside an SSD. Rather than using disks, motors and read/write heads, SSDs use flash memory instead that is, computer chips which retain their information even when the power is turned off.</p>
    </aside>

    <main id="content" class="main-content">
      <center>
        <img src="view/images/harddrive.jpg" alt ="hardrive" width="300" height="150">
      </center>
    </main>
    <center>
      <form action='index.php' method='GET'>
              <input type='hidden' name='item'   value='SSD' />
              <input type='hidden' name='price'  value='169.00' />
              <input type='hidden' name='choice' value='products' />
              <input style="background-color: black; color: green;" type='submit' name='choice2' value='$169.00' class="addToCart" />
  </center>

    <aside class="sidebar">
        <p><figcaption>Graphics Card</figcaption>A graphics card consists of a graphics processing unit designed to help process and display images. It help take the processing strain off the main processor and can contain their own memory to take the strain off the systems RAM. There is either onboard cards or dedicated cards. Onboard cards are integrated graphics cards build into a computers motherboard but usually they are less powerful than cards installed in an expansion bay. Dedicated cards are graphics cards that are installed in PCI express (Peripheral Component Interconnect) AGP (Accelerated Graphics Port), PCI or other expansion bays and have their own video memory separate from the system's main RAM.</p>
    </aside>

    <main id="content" class="main-content">
      <center>
        <img src="view/images/GraphicCard.png" alt ="GraphicCard" width="300" height="150">
      </center>
    </main>
    <center>
      <form action='index.php' method='GET'>
              <input type='hidden' name='item'   value='GPU' />
              <input type='hidden' name='price'  value='50.00' />
              <input type='hidden' name='choice' value='products' />
              <input style="background-color: black; color: green;" type='submit' name='choice2' value='$50.00' class="addToCart" />
    </center>

    <aside class="sidebar">
        <p><figcaption>Power Supply Box or Power supply unit (PSU)</figcaption>The component that supplies power to a computer. Most personal computers can be plugged into standard electrical outlets. The power supply then pulls the required amount of electricity and converts the AC current to DC current. If a ATx or a BTX is used the three voltages produced would be +5, +12, and +3.3</p>
    </aside>

    <main id="content" class="main-content">
      <center>
        <img src="view/images/PowerSupplyBox.jpg" alt ="PowerSupplyBox" width="300" height="150">
      </center>
    </main>
    <center>
      <form action='index.php' method='GET'>
              <input type='hidden' name='item'   value='PSU' />
              <input type='hidden' name='price'  value='184.50' />
              <input type='hidden' name='choice' value='products' />
              <input style="background-color: black; color: green;" type='submit' name='choice2' value='$184.50' class="addToCart" />
  </center>

    <aside class="sidebar">
        <p><figcaption>Optical Drive</figcaption>It is a piece of computer hardware about the size of a thick soft cover book. The front of the drive has a small Open/Close button that ejects and retracts the drive bay door. This is how media like CDs, DVDs, and BDs are inserted into and removed from the drive. Popular optical drive formats include CD-ROM, CD-R, CD-RW, DVD, DVD-RAM, DVD-R, DVD+R, DVD-RW, DVD+RW, DVD-R DL, DVD+R DL, BD-R, BD-R DL & TL, BD-RE, BD-RE DL & TL, and BDXL.</p>
    </aside>

    <main id="content" class="main-content">
      <center>
        <img src="view/images/BlueRay2019.jpg" alt ="BlueRay2019" width="300" height="150">
      </center>
    </main>
    <center>
       <form action='index.php' method='GET'>
              <input type='hidden' name='item'   value='Optical_Drive' />
              <input type='hidden' name='price'  value='30.00' />
              <input type='hidden' name='choice' value='products' />
              <input style="background-color: black; color: green;" type='submit' name='choice2' value='$30.00' class="addToCart" />
  </center>

     <aside class="sidebar">
        <p>Remember to use antistatic bracelet clipped to the side of the computer to prevent ESD when working on or building a computer.</p>
    </aside>

    


    <center>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/ExxFxD4OSZ0"></iframe>
    <center>

    <center>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/xnyFYiK2rSY"></iframe>
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
          } 

          else {
            x.className = "topnav";
          }
        }
  </script>

</head>
</body>
</html>