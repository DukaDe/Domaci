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
        $a = "dragoslav";
        $b = "Dragoslav";
        

        function duzina(){
            global $a;
            global $b;
            $a_d = strlen ($a);
            $b_d = strlen ($b);

            if ($a_d > $b_d){
                echo $a;
            }
            if ($b_d>$a_d){
                echo $b;
            }
            if ($b_d == $a_d){
                echo $a." i ".$b;
            }
        }

        duzina();
?>
</body>
</html>