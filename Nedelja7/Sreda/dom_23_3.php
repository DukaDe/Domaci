<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna.  -->

<?php

    function niz (){
        $x=$_GET['brojevi'];
        $y = explode (" ", $x);
        return $y;
    }
    $niz1 = niz();
    print_r ($niz1);
    echo "<br>";

    function tri_parna ($niz){
        $brojac = 0;
        foreach ($niz as $ind => $el){
            if ($el%2===0) $brojac++;
        }
        if ($brojac>=3) return "niz ima tri parna broja";
        else return "niz nema tri parna broja";

    }
   

    function manji_od_1000 ($niz){
        $b="Svi brojevi su manji od 1000";
        foreach ($niz as $ind=>$el){
            if ($el > 1000) $b="Postoji bar jedan broj veći od 1000";
        }
        return $b;
    }
    // if (manji_od_1000 ($niz1) === true) echo "Svi brojevi su manji od 1000";
    // else echo "Postoji bar jedan broj veći od 1000";
    echo tri_parna($niz1);
    echo "<br>";
    echo manji_od_1000 ($niz1);
    echo "<br>";


?>
</body>
</html>