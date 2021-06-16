<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stil.css" />
</head>
<body>
<?php
    require_once ("Proizvod.php");
    $broj= $_GET['broj']; 

    $ws->header();
    $ws->meni($podaci);

    echo "<div class='grupe'>";
    $b -> prikazi_jedan_proizvod($broj);
    echo "</div>";
            
    $ws->footer();
    

?>
</body>
</html>