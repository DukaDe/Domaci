<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            height: 30px;
            width: 30px;
        }
        .black {
            background-color: black;
            color: white;
        }
    
    </style>
</head>
<body>

<?php

    $a = mt_rand (1, 64);
       echo "<table>";
            for ($i=1; $i<=57; $i+=8){
                echo "<tr>";
                    for ($j=0; $j<=7; $j+=1){
                        if ($i+$j === $a) echo "<td class='black'>$a</td>";
                        else echo "<td></td>";
                    }
                

                echo "</tr>";

            }
        echo "</table>";


?>
</body>
</html>