<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Dodati u gornji niz jos 4 osobe po zelji. -->
<!-- Napisati fju koja prikazuje imena svih programera. -->
<!-- Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s. -->

<?php
    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
       ];

       $x[4] = ['ime'=>"Goran", "godine"=>64, "grad"=>"Smederevo", "pozicija"=>"HR"];
       $x[5] = ['ime'=>"Bojana", "godine"=>44, "grad"=>"Zrenjanin", "pozicija"=>"programer"];
       $x[6] = ['ime'=>"Boris", "godine"=>51, "grad"=>"Kragujevac", "pozicija"=>"dizajner"];
       $x[7] = ['ime'=>"Marina", "godine"=>22, "grad"=>"Nis", "pozicija"=>"menadzer"];
       

       function prikazi_osobu ($osoba){
           echo "<p>".join(", ", $osoba)."</p>";
       }

       for ($i=0; $i<count($x); $i++)
            prikazi_osobu($x[$i]);

    
       function programeri ($niz){
           for ($i=0; $i<count($niz); $i++){
               if ($niz[$i]['pozicija'] === "programer")
                echo "<span>".$niz[$i]['ime'].", </span>";
           }
       }
       echo "<br>";
       echo "<p>Programeri su: ";
       programeri ($x);
       echo "</p>";
       echo "<br>";

       echo "<span> Osobe koje sadrže slovo 'n' u imenu su:";
       for ($i=0; $i<count($x); $i++){
           if (strpos(strtolower($x[$i]['ime']), "s") !== false){
               prikazi_osobu($x[$i]);

           }
       }
       echo "</span>";
       
?>
</body>
</html>