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

        function biggest_num ($num1, $num2, $num3){

            if ($num1 > $num2 and $num1 > $num3) return $num1;
            if ($num2 > $num1 and $num2 > $num3) return $num2;
            if ($num3 > $num2 and $num3 > $num1) return $num3;

        }
        $a = 43;
        $b = 89;
        $c = 678;
        
        echo biggest_num (987, 1098, 876);



    ?>
</body>
</html>