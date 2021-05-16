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
        $a = mt_rand (10, 500);
        $b = mt_rand (10, 500);
        if ($a > $b){
            echo "<p><span class='green'>$a</span><br><span class='red'>$b</span></p>";
        }else{
            echo "<p><span class='green'>$b</span><br><span class='red'>$a</span></p>";
        }
    ?>
</body>
</html>