<?php
  session_start();
  $error = "";
  if(isset($_SESSION['ERROR']))
  {
      $error = $_SESSION['ERROR'];
      unset($_SESSION['ERROR']);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>

 <?php echo $error ?>

<form action="login.php" method="POST">
   <table width=300 border=1 align=center>
       <tr>
           <td>username:</td>
           <td><input type="text" name="username"></td>
       </tr>
       <tr>
           <td>password:</td>
           <td><input type="password" name="password"></td>
       </tr>
       <tr>
           <td colspan="2">
           <input type="submit" value="sign in" name="submit">
           </td>
           
       </tr>
   </table> 
   </form>
</body>
</html>