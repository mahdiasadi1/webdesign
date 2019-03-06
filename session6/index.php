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
    $avg = rand(0,20);
    echo $avg; 
    if($avg >=10)
    echo "<br> تبریک شما قبول شدی";
    else
    echo "<br> متاسفم شما افتادی";
    $abcd;
    if($avg<5)
    $abcd = "D";
    elseif($avg>=5 && $avg <10 )
    $abcd = "C";
    elseif($avg >=10 && $avg<15)
    $abcd="B";
    else
    $abcd = "A";
    echo " <br>  ".$abcd."<br>";
    //   *************   while loop ************
    $daysOfWeek = ['sat','sun','mon','tue','wed','thu','fri'];
    $index = 0;
    while($index<= count($daysOfWeek))
     {
         echo $daysOfWeek[$index]." ";
         $index++;
     }
    //  ************* do while loop ************
    do {
        echo  "<br> hello there! <br>";
    }while(false);
    while(false)
    {
        echo "hello there! from while loop";
    }
    for($i=0;$i<count($daysOfWeek);$i++)
    {
        echo $daysOfWeek[$i]." ";
    }

    ?>
</body>
</html>