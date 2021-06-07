<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz) -->
<!-- Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba) -->
<!-- Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter) -->



<?php
$x = [ 
 ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
 ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
 ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
 ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
];

$y = array_map (function ($osoba){
    
    $osoba['godine staza']="";
    for ($i=0; $i<4; $i++){
        $osoba['godine staza'][$i]=mt_rand (1,3);    
        return $osoba;
       
    }
}, $x);

print_r($y);
echo "<br>";

usort ($y, function ($a, $b){ return ($a['godine staza'] - $b['godine staza']);});
print_r ($y);
echo "<br>";

$max =0;
for ($i=0; $i<count ($y); $i++){
    if ($max<$y[$i]['godine staza'])
        $max = $y[$i]['godine staza'];
}
echo $max;
echo"<br>";

$n = array_filter ($y, function ($el){
    global $max;
    if ($el['godine staza']===$max)
        return true;
    else
        return false;
});

print_r ($n);




?>
</body>
</html>