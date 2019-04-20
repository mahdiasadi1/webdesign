<?php
// setcookie('name','mahdi',time()+60*60,"/test/","session12.com");
// setcookie('color','red',time()+60,'/test/','session12.com');
// echo  $_COOKIE['name'];
if(isset($_COOKIE['color']))
$color = $_COOKIE['color'];
else
$color  = "purple";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body bgcolor="<?php echo $color ?>">
salam
<br>
   <a href="delete.php">delete </a> 
   <br>
   <a href="form.html">set color </a>
</body>
</html>