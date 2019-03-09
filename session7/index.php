<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>session 7</title>
</head>
<body>
    <?php
      $singers = ['saman jalili','alireza talischi','mehdi ahmadvand','homeyra'];
      foreach($singers as $singer)
       echo $singer ." , ";
      $cars = [
          ['zhian',160,'iran'],
          ['zantia',220,'france'],
          ['tank rezvani',180,'usa']
      ] ;
      $cars[2][0]="hammer";
      echo "<ul>";
      foreach($cars as $car)
      echo "<li> model = ".$car[0] ." speed =  "
      .$car[1]." made in = ".$car[2]."</li>";
      echo "</ul>";

      $doll =[
       "name"=>"kitty",
       "color"=>"pink",
       "price"=>30000
      ];
      $doll['color']="red";
      
      foreach($doll as $key=> $value)
      echo  $key ." = ".$value ." ";
      $flowers=[["name"=>"orchid","color"=>"yellow"],
      ["name"=>"rose","color"=>"blue"]];
      foreach($flowers as $flower)
       echo "<br> $flower[name]  $flower[color] ";
    ?>
</body>
</html>