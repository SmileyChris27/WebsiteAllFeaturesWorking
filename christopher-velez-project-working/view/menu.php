<?php
if(isset( $_SESSION['ON'])) echo "<li> align=center><a href='index.php?choice=logoff'>Login</a></td>";
else echo "<li align=center><a href='index.php'>Login</a></li>";
	
echo "<li width='100' align=center><a href='index.php?choice=home'>Home</a></li>";
echo "<li width='100' align=center><a href='index.php?choice=products'>Products</a></li>";
echo "<li width='100' align=center><a href='index.php?choice=about'>About</a></li>";
echo "<li width='100' align=center><a href='index.php?choice=contact'>Contact</a></li>";
?>
