<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)


<?php

function niz() {
    $y = [];
    for ($i = 0; $i < 10; $i++) {
        $y[$i] = mt_rand(20, 150);
    }
    return $y;
}


function trocifreni_vs_dvocifreni (){
    $y = niz();
    print_r($y);
    echo "<br>";
    $trocifreni = 0;
    $dvocifreni = 0;
    for ($i=0; $i< count (niz()); $i++){
        if ($y[$i]>99 and $y[$i]<1000)  $trocifreni = $trocifreni +1;
        if ($y[$i]<100)  $dvocifreni = $dvocifreni +1;
    }
    if ($dvocifreni>$trocifreni) echo "dvocifrenih ima više";
    if ($dvocifreni<$trocifreni) echo "trocifrenih ima više";
    if ($dvocifreni===$trocifreni) echo "ima ih isto";


}

trocifreni_vs_dvocifreni ();
?>

</body>
</html>