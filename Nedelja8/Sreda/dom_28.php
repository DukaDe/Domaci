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

        public $duzina, $sirina, $materijal;
        private $cena;

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
        
        function daj_cenu(){
            return $this->cena;
        }

    }

    class Baldahin extends Krevet{
        public $visina, $cenaBaldahina;

        function __construct ($duzina, $sirina, $materijal, $cena, $visina, $cenaBaldahina){
            $this->visina = $visina;
            $this->cenaBaldahina = $cenaBaldahina;
            parent::__construct($duzina, $sirina, $materijal, $cena);
        }
        
        function __toString(){
           
            return "Cena kreveta bez baldahina je ". $this->daj_cenu().", a cena sa baldahinom je ".($this->daj_cenu() + $this->cenaBaldahina);
        }
    }

    $saBaldahinom = new Baldahin (2.05, 2.00, "drvo", 47000, 1.50, 7300);

    echo $saBaldahinom;


?>

</body>
</html>