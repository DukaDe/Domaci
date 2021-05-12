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
        $a = mt_rand (1,10);
        $b = mt_rand (1,10);
        $c = mt_rand (1,10);
        echo "<p> Zbir brojeva ".$a.", ".$b." i ".$c." je <span> ".($a+$b+$c)."</span>.</p>";
    ?>
</body>
</html>