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
        $a = mt_rand (5, 605);
        $b = mt_rand (5, 605);
        $c = mt_rand (5, 605);
        if ($a < $b && $a < $c) {
            if ($b < $c) {
                echo $a.", ".$b.", ".$c;
            }else {echo $a.", ".$c.", ".$b;
            }
        }
        if ($b < $a && $b < $c) {
            if ($a < $c) {
                echo $b.", ".$a.", ".$c;
            }else {echo $b.", ".$c.", ".$a;
            }
        }
        if ($c < $b && $c < $a) {
            if ($b < $a) {
                echo $c.", ".$b.", ".$a;
            }else {echo $c.", ".$a.", ".$b;
            }
        }

    ?>

</body>
</html>