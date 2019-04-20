<?php
if(isset($_GET['submit']))
 {setcookie('color',$_GET['color'],time()+24*60*60,'/','session12.com');
  header('location:index.php'); 
}
    else
header('location:form.html'); 
?>
