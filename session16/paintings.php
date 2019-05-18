<?php
$link = mysqli_connect('localhost','root','','exhibition');
mysqli_set_charset($link,'utf8');
$query = "select * from paintings";
$result = mysqli_query($link,$query);
$paintings = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<table border=1 align=center>
    <tr>
        <th>name</th>
        <th>style</th>
        <th>image</th>
        
    </tr>
   <?php
   foreach($paintings as $painting)
   echo "<tr><td>$painting[name]</td><td>$painting[style]</td>
         <td><img width=250 src=uploads/$painting[image] /></td></tr>";
?> 
</table>