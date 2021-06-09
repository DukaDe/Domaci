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

        class Krevet {

            public $duzina, $sirina, $materijal, $cena;

            function __construct ($duzina, $sirina, $materijal, $cena){
                $this->duzina = $duzina;
                $this->sirina = $sirina;
                $this->materijal = $materijal;
                $this->cena = $cena;

            }   

            function citanje_cene (){
                return $this->cena;
            }

            function __toString (){
                return "Krevet je dužine ".$this->duzina." i sirine".$this->sirina." napravljen od".$this->materijal." po ceni ".$this->cena.".";
            }

           function popust($procenat_popusta){
                $nova_cena = $this->cena - ($this->cena/100*$procenat_popusta);
                $this->cena=$nova_cena;
           }          

        }
        
        $krevet1 = new Krevet (2.05, 72, "drvo", 15000);
        $krevet2 = new Krevet (2.00, 1.5, "drvo",21700);

        if ($krevet1->citanje_cene()>$krevet2->citanje_cene())
            echo $krevet1->citanje_cene();
            else echo $krevet2->citanje_cene();
            echo "<br>";

        $krevet3 = new Krevet (1.90, 1, "plastika", 27000);

        echo $krevet3;
        echo "<br>";
        $krevet3->popust(10);
        echo $krevet3;
        echo "<br>";

    ?>
</body>
</html>