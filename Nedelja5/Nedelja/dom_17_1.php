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
        function ime_prezime (){
        
            $t = "<p>
                    <span>Dušan </span><span>Kalejski</span>        
                    </p>";
            return $t;
        }
        
        $ime = "Dusan";
        $prezime = "Kalejski";
        $d_ime = strlen ($ime);
        $d_prezime = strlen ($prezime);
        $spoj = $d_ime + $d_prezime;

        for ($i = 1; $i <= $spoj; $i++){
            $m = ime_prezime();
            echo $m;
        }
    ?>
</body>
</html>