<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green {
            color:green;
        }
        .red {
            color:red;
        }
    </style>
</head>
<body>

<?php

    $x = ["trougao", "ugao", "pet", "kvadrat", "krug"];

    $y=[];
    foreach ($x as $ind => $el){
        if (strlen($el)<5)
        $y[$ind]= "<span class='red'>".$el."</span>";
        if (strlen($el)>5)
        $y[$ind]= "<span class='green'>".$el."</span>";
    }
    print_r ($y);


?>
</body>
</html>