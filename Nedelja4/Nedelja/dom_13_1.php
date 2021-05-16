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
        $a = mt_rand (10, 500);
        $b = mt_rand (10, 500);
        if ($a > $b){
            echo "<p><span style='color:green'>$a</span><br><span style='color:red'>$b</span></p>";
        }else{
            echo "<p><span style='color:green'>$b</span><br><span style='color:red'>$a</span></p>";
        }
    ?>
</body>
</html>