<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red{
            color:red;
        }

    
    </style>
</head>
<body>
<!-- Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom. -->


<?php
    $a=1;
    $i=30;
    do {
      
      $a = $a * $i;
      $i--;
      
     
        
    } while ($a<100000);
    
    echo "<span class='red'> $a </span> <br>"; 
    echo "<span style='color:green'> $i </span> <br>";


?>
</body>
</html>