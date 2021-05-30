<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    li {

        display: inline-block;
        width: 50px;
        border: 2px solid black;
        text-align: center;
        margin:1px;
        
    }
    ul {
        float:right;
        margin-right: 10px;
    }

</style>
<body>

<?php

    function meni ($string){
        echo "<ul>";
        foreach ($string as $ind=>$el){
            echo "<li>$el</li>";
        }
        echo "</ul>";
    }
$x =["dobar", "loš", "zao", "jao"];

meni ($x);

?>
</body>
</html>