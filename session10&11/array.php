<?php
$teams=[
    ['name'=>'perspolis','year'=>1330,'coach'=>'branco'],
    ['name'=>'esteghlal','year'=>1333,'coach'=>'shefer'],
    ['name'=>'sepahan','year'=>1340,'coach'=>'ghalenoei']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1 align="center">
        <tr>
            <th>name</th>
            <th>year</th>
            <th>coach</th>
        </tr>
     <?php
     foreach($teams as $team)
     {
         echo "<tr><td>$team[name]</td>
         <td>$team[year]</td><td>$team[coach]</td></tr>";
     }
     ?>   
    </table>
</body>
</html>