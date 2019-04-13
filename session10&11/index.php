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
  $link = mysqli_connect('127.0.0.1','root','','store');
  mysqli_set_charset($link,'utf8');
  $query = "select * from chocolates";
  $result = mysqli_query($link,$query);
//   $chocolates= mysqli_fetch_all($result,MYSQLI_ASSOC);
$chocolates= mysqli_fetch_all($result,MYSQLI_NUM);
//   var_dump($chocolates);
  ?> 
   <table border=1 align=center>
       <tr>
           <th>id</th>
           <th>name</th>
           <th>type</th>
           <th>price</th>
           <th>country</th>
       </tr>
       <?php
       foreach($chocolates as $chocolate)
       {
           echo "<tr><td>$chocolate[0]</td>
           <td>$chocolate[3]</td>
           <td>$chocolate[2]</td>
           <td>$chocolate[1]</td>
           <td>$chocolate[4]</td>
           </tr>";
       }
       ?>
   </table>
</body>
</html>