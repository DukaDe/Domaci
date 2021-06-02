<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    $x=[];
    $b = mt_rand (5, 10);
    for ($i=0; $i<$b; $i++){
        $x[$i] = mt_rand (20, 220);
    }
    echo implode (", ", $x);
    echo "<br>";

    $zbir = 0;
    $brojac = 0;
    foreach ($x as $ind => $el){
        $zbir = $zbir + $el;
        $brojac = $brojac+1;
    }
   
    $ar_sr = round (($zbir/$brojac));
    
    echo $ar_sr;
    echo "<br>";

    $y = [];
    foreach ($x as $index => $element){
        if ($element > $ar_sr)
        $y[$index] = $element;
    }

    print_r ($y);



?>

</body>
</html>