
<style>
    .glavni {
        width: 200px;
        height: 330px;
        border: 2px solid black;
        float:left;
        position:relative;
        top:0px;
        margin: 5px;


    }
    .slika {
        
        width: 200px;
        height: 200px;
    }
    .naziv {
        text-align: center;
        font-size: 30px;
        margin: 0;
        padding: 0;
        margin-top:5px;
        color: black;
        font-weight: bold;
    }
    .cena {
        text-align: center;
        font-size: 25px;
        margin: 0;
        padding: 0;
        margin-top:15px;
       
        
    }
    .crvena {
        color:red;
        text-align: center;
        font-size: 15px;
        margin: 0;
        padding: 0;
        margin-top:5px;
        text-decoration: line-through;
    }
    .zelena{
        color:green;
        text-align: center;
        font-size: 25px;
        margin: 0;
        padding: 0;
        
    }
</style>

<?php 
function proizvod($naziv, $slika, $cena, $popust){
    if ($popust > 0) {
        echo "<div class='glavni'>  
        <div style ='background: url($slika) no-repeat center / cover;' class='slika'></div>
        <p class='naziv'> $naziv </p>
        <p class='crvena'>Redovna cena: $cena RSD</p>
        <p class='zelena'>akcijska ponuda!!! ".($cena-$popust)." RSD</p>
        </div>";}
    else {
        echo "<div class='glavni'>  
        <div style ='background: url($slika) no-repeat center / cover;' class='slika'></div>
        <p class='naziv'> $naziv </p>
        <p class='cena'> $cena RSD </p>
        <p class='zelena'></p>
        </div>";}
         
       
    
    } 
?>


