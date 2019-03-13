<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
  var_dump($_GET);
  var_dump($_POST);
//   echo $_GET["firstname"] . " " .$_GET["family"];
  echo $_POST["firstname"] . " " .$_POST["family"]."<br> religion  = ".$_POST["religion"];
$favorites = $_POST["favorites"];
foreach($favorites as $favorite)
 echo "<li> $favorite </li>";
 echo "<br> country = " . $_POST["country"];
 echo "<br> message = " .$_POST["message"];
  ?>  
</body>
</html>