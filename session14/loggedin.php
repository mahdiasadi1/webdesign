<?php
session_start();
if (isset($_SESSION['name']))
 {echo "hello " . $_SESSION['name'];
  echo "<a href=logout.php> log out</a>";  
}
 else
  header('location:loginform.php');      
?>