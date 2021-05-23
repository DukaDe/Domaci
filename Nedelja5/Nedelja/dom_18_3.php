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

        $i=30;
        while ($i<100){
            $i++;
            $prva_c = floor ($i/10);
            $druga_c = $i % 10;
            if ($prva_c % 3 == 0) continue;
            if ($druga_c % 4 == 0) continue;
            echo "$i, ";
        }

    ?>
</body>
</html>