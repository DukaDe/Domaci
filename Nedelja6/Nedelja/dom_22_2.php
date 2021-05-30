<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul". -->

<?php
        function palindrom($str){
            // $str = "Ana   voli     Milovana";
            $n1 = explode(" ", strtolower($str));  //["ana", "voli", "milovana"];
            $n2 = join("", $n1); //"anavolimilovana"
            if($n2 === strrev($n2))
                return true;
            else    
                return false;
        }


        function ispitati_palindrom ($string){
            foreach ($string as $ind=>$el){
                if (palindrom ($el)===true) echo "$el, ";
            }
        }
        $n = ["potop", "ana voli milovana", "lul", "nije"];
        ispitati_palindrom ($n);
?>
</body>
</html>