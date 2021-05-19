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
        if(isset($_GET ['br1'])) $a = $_GET ['br1'];
        if(isset($_GET ['br2'])) $b = $_GET ['br2'];
        if($b > $a){
        }else die ("GREŠKA");

        if(isset($_GET ['br3'])) $c = $_GET ['br3'];
        if(isset($_GET ['br4'])) $d = $_GET ['br4'];
        if($d > $c){
        }else die ("GREŠKA");

        function prva (){
            global $a;
            global $b;
            
            $zbir_1 = 0;
            for ($i=$a; $i<=$b; $i++){
                if ($i % 4 == 0){
                        $zbir_1 = $zbir_1 + $i; 
                }    // echo "$zbir_2, ";
            }return "$zbir_1, ";
        }
        
        
        function druga (){
            global $c;
            global $d;
            
            $zbir_2 = 0;
            for ($i=$c; $i<=$d; $i=$i+1){
                if ($i % 3 == 0){
                    $zbir_2 = $zbir_2 + $i; 
                }   // echo "$zbir_2, ";
            }return $zbir_2;
        }

        $pp = prva();
        $dd = druga();
        echo $pp.$dd."<br>";

        if ($pp > $dd){
            echo $pp;
        }else {
            echo $dd;
        }
?>
</body>
</html>