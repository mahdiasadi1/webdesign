<?php
session_start();
$error = "";
if(isset($_SESSION['error']))
{
$error = $_SESSION['error'];
unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    #errors {
        color:red;
    }
    </style>
</head>
<body>
   <h1 id="errors"> <?php echo $error;  ?></h1>
   <form action="formprocess.php" method="POST">
   <table border=1  align=center>
       <tr>
           <td>first name :</td>
           <td><input type="text" name="firstname"></td>
       </tr>
       <tr>
          <td colspan="2"> 
          <input type="submit" name="submit" value="submit">
          </td>
       </tr>
   </table>
   </form> 
  
</body>
</html>