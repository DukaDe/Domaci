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

        class SastojakHrane {
            public $naziv, $mera, $kalorije;
            function __construct ($naziv, $mera, $kalorije){
                $this->naziv = $naziv;
                $this->mera = $mera;
                $this->kalorije = $kalorije;
            }

            function promeniMeru ($nova_mera){
                $this->mera = $nova_mera;
            }

            function prikazi(){
                echo "<p>".$this->naziv.", ".$this->mera.", ".$this->kalorije."</p>";
            }
        }

        class Jelo {
            public $naslov, $opis, $sastojak_hrane;

            function __construct ($naslov, $opis, $podaci){
                $this->naslov = $naslov;
                $this->opis = $opis;
                $this->sastojak_hrane = [];
                    for ($i=0; $i<count($podaci); $i++){
                    $p = new SastojakHrane ($podaci[$i]['naziv'], $podaci[$i] ['mera'], $podaci[$i] ['kalorije']);
                    array_push ($this->sastojak_hrane, $p);
                    }

            }

            function prikazi (){
                echo "<h1>".$this->naslov."</h1>";
                for ($i=0; $i<count ($this->sastojak_hrane); $i++)
                    $this->sastojak_hrane[$i]->prikazi();
                echo "<p>".$this->opis."</p>";
            }

            function promeniMeru($a, $b){
                for ($i=0; $i<count ($this->sastojak_hrane); $i++)
                    if ($this->sastojak_hrane[$i]->naziv==$a)
                    $this->sastojak_hrane[$i]->promeniMeru($b);
            }
                    
        }

        $podaci = [
            ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
            ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
            ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
            ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
        ];
        
        $jelo = new Jelo ("Palacinke", "Najbolje jelo ikad", $podaci);
        $jelo->prikazi();
        $jelo->promeniMeru("brasno", "400g");
        $jelo->prikazi();


    ?>
</body>
</html>