<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .duze {
            color:red;
        }
        .krace {
            color:green;
        }
    </style>
</head>
<body>
    <?php
        $a = "dragos";
        $b = "Dragoslav";
        

        function duzina(){
            global $a;
            global $b;
            $a_d = strlen ($a);
            $b_d = strlen ($b);

            if ($a_d > $b_d){
                return "<p class='duze'>".$a."</p>";
            }
            if ($b_d>$a_d){
                return "<p class='duze'>".$b."</p>";
            }
        }

        function krace(){
            global $a;
            global $b;
            $a_d = strlen ($a);
            $b_d = strlen ($b);

            if ($a_d < $b_d){
                return "<p class='krace'>".$a."</p>";
            }
            if ($b_d < $a_d){
                return "<p class='krace'>".$b."</p>";

            }    
        }

        $rez = duzina();
        echo $rez;
        $rez_kr = krace();
        echo $rez_kr;
?>
</body>
</html>