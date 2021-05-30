
<?php
    require_once ("include/proizvod.php");


?>
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
        proizvod ('GRAMOFON', 'gramofon.jpg', '19999', '3600' );
        proizvod ('LUSTER', 'luster.jpg', '14999', '0' );
        proizvod ('STOLICA', 'stolica.jpg', '11560', '2200' );
    ?>

</body>
</html>