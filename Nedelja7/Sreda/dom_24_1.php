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

        $niz = [22, 34, 88, 92, 67, 5, 13, 78];

        function ne_sadrzi_nule ($x){
            $b= true;
            foreach ($x as $ind=>$el){
                if ($el === 0 or $el % 10 === 0)
                $b = false;
            }
            return $b;
        }
        print_r ($niz);
        echo"<br>";
        if (ne_sadrzi_nule ($niz)===true) echo "nema nule";
        else echo "ima nule";


    ?>
</body>
</html>