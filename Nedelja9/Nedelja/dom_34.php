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
        class Baza{
            public $conn;
            
            function __construct($baza){
                $this->conn = new mysqli ('localhost', 'root', '', $baza);
                if ($this->conn->connect_error)
                    die ('Doslo je do greke: '.$this->conn->connect_error);
                else echo "Konektovan";
            }

            function izvrsi_select($upit){
                $podaci=$this->conn->query($upit);
                if ($podaci === false)
                    return ['uspesno'=>false, 'poruka'=>$this->conn->error];
                else
                    $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                    return ['uspesno'=>true, 'niz'=>$niz];

            }

            function prikazi_destinacije(){
                $d = $this->izvrsi_select('SELECT drzava, grad, datum_polaska, datum_povratka
                FROM putovanja join destinacije
                ON putovanja.destinacija=destinacije.id');
                if ($d['uspesno']==true)
                    print_r ($d['niz']);
                else
                    die ('Neuspesno: '.$d['poruka']);
            }

            function prikazi_putnike(){
                $p = $this->izvrsi_select("SELECT CONCAT(putnici.ime, ' ', putnici.prezime) AS Osoba, drzava, grad, datum_polaska, datum_povratka FROM (putovanja join destinacije ON putovanja.destinacija=destinacije.id) join putnici ON putovanja.br_pasosa=putnici.br_pasosa");
                if ($p['uspesno']==true)
                    print_r ($p['niz']);
                else
                    die ('Neuspesno: '.$p['poruka']);
                

            }

            function otkazi_rezervaciju($br_pasosa){
                $o= $this->conn->query("DELETE FROM `putovanja` WHERE br_pasosa=$br_pasosa");
                if ($o===false)
                    die ("Nije uspelo otkazivanje: ".$this->conn->error);
                else
                    echo ("Uspesno otkazana rezervacija");
            }

        }

        $b = new Baza ('turisticka_agencija');
        echo "<br>";
        $b-> prikazi_destinacije();
        echo "<br>";
        $b->prikazi_putnike();
        echo "<br>";
        $b->otkazi_rezervaciju('1111');
     
    ?>
</body>
</html>