<link rel="stylesheet" type="text/css" href="stil.css" />
<?php

    class Proizvod{

        public $id, $ime, $slika, $opis, $naslov, $cena, $grupa;

        function __construct ($niz){
            $this->id = $niz['id'];
            $this->ime =$niz['ime'];
            $this->slika = $niz['slika'];
            $this->opis = $niz['opis'];
            $this->naslov = $niz['naslov'];
            $this->cena = $niz['cena'];
            $this->grupa = $niz['grupa'];


        }

        function prikazi_proizvod(){
            echo "<div class='proizvod'>";
            echo "<h1>$this->naslov - $this->grupa</h1>";
            echo "<img  src='".$this->slika."'/>";
            echo "<p><a href='detaljnije.php?broj=$this->id'>Detaljnije</a></p>";
            echo "</div>";
        }

        function prikazi_proizvod_detaljnije (){
            echo "<div style='border:2px solid black; width:300px;'>";
            echo "<h1>$this->naslov</h1>";
            echo "<img style='width:200px' src='".$this->slika."'/>";
            echo "<p>$this->opis</p>";
            echo "<p>$this->cena</p>";
            echo "</div>";
        }
    }

    class ListaProizvoda{

        public $p;

        function __construct ($podaci){
            $this->p = [];
            for ($i=0; $i<count($podaci); $i++){
                $pom = new Proizvod ($podaci[$i]);
                array_push ($this->p, $pom);
            }
        }
        function prikazi_sve_proizvode($grupa=""){
            if ($grupa===""){
                for ($i=0; $i<count($this->p); $i++){
                    $this->p[$i]->prikazi_proizvod();
                }
            }
            else {
                for ($i=0; $i<count($this->p); $i++){
                    if ($this->p[$i]->grupa== $grupa)
                    $this->p[$i]->prikazi_proizvod();
                }
            }
        }
        function prikazi_jedan_proizvod ($id){
            foreach ($this->p as $proizvod){
                if ($proizvod->id == $id)
                    $proizvod -> prikazi_proizvod_detaljnije ();
            }
        }
    }
    include ("podaci.php");
    $b = new ListaProizvoda ($podaci);

    class WebSite {

        function header() {
            echo "<div class='header'>";
            echo "<h3><a href='index.php'>Dobro dosli u web-shop</a></h3>";
            echo "</div>";
        }

        function footer() {
            echo "<div class='footer'>";
            echo "<h5>Bolje vas nasli!</h5>";
            echo "</div>";
        }

        function meni($podaci) {
            $grupe = [];
            foreach ($podaci as $podatak) {
                array_push($grupe, $podatak['grupa']);
            }
            $grupe = array_unique($grupe);

            echo "<ul>";
            foreach ($grupe as $grupa) {
                echo "<li><a href='index.php?grupa=$grupa'>$grupa</a></li>";
            }
            echo "</ul>";
        }
    }
    $ws=new WebSite;

  

   

   
?>