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
            font-size: 32px;
            height: 3em; width: 3em;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $a = mt_rand (1,10);
        $b = mt_rand (1,10);
        $c = mt_rand (1,10);
        $kvadrat_a = $a ** 2;
        $kvadrat_b = $b ** 2;
        $kvadrat_c = $c ** 2;
    ?>
        <table>
            <tbody>
                <tr>
                <td><?= $a ?></td>
                <td><?= $kvadrat_a ?></td>
                </tr>
                <tr>
                <td><?= $b ?></td>
                <td><?= $kvadrat_b ?></td>
                </tr>
                <tr>
                <td><?= $c ?></td>
                <td><?= $kvadrat_c ?></td>
                </tr>
            </tbody>
        </table>
        <a href="../zadatak_2/drugi.php">Drugi zadatak</a>
</body>
</html>