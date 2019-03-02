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
    $x= null;
    $y= 5;
    $z =true;
    if ($x and $y)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
    if(!$z  )
    echo "<br> z = false";
     $fisrtName = "ali";
     $lastName = "javadi";
     echo "<br>your name = ".$fisrtName ." ".$lastName;
    $message ="<br> ali says \" salam\"";
    echo $message; 
    $message1 ='<br> ali says " salam"';
    echo $message1; 
    $message2 ="<br> ali says ' salam'";
    echo $message2; 
    
    echo "<br> $fisrtName says  salam !!!";
    echo '<br> $fisrtName says  salam !!!';
    echo strlen("salam javad");
    $studentFirstName =["faezeh","ehsan"];
    var_dump($studentFirstName);
    $studentFirstName[] = "mohammad";
    $studentFirstName[2]="muhammad";
    echo "<br>". $studentFirstName[2];
    var_dump($studentFirstName);
    ?>
    </body>
</html>