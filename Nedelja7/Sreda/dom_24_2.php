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

$niz = ['ponedeljak'=>27, 'utorak'=>29, 'sreda'=>33, 'cetvrtak'=>28, 'petak'=>28];
print_r ($niz);
echo "<br>";

    function multi($x){
        $dan = "";
        $max=0;
        foreach ($x as $ind => $el){
            if ($max<$el) { $max=$el; $dan=$ind;}           
            
        }
        $zbir=0;
        $brojac=0;
        foreach ($x as $index => $element){
            $zbir += $element;
            $brojac ++;
        }
        $prosek= round ($zbir/$brojac);
        $razlika = max($x)-min($x);
        return ["najuspešniji dan"=> $dan, "Prosek"=>$prosek, "razlika"=>$razlika];
    }
    print_r (multi($niz));

?>
</body>
</html>