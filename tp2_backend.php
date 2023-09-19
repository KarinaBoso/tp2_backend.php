<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio 1</h1>
    <?php 
        $a = 5;
        $b = 0;
        echo "<br>";

        if ($a>$b) {
            echo "La variable a es un número positivo";
            echo "<br>";
        }
?>
<h2>Ejercicio 2</h2>
    <?php
        $a = 3;
        echo "<br>";

        if ($a>1 & $a<10) {
            echo "Es mayor a 1 y menor a 10";
            echo "<br>";
        }
?>

<h2>Ejercicio 3</h2>
    <?php
        $a = 12;
        echo "<br>";

        if ($a>10 || $a<2) {
            echo "Cumple con la condición";
            echo "<br>";
        }
?>

<h2>Ejercicio 4</h2>
    <?php
        $número1 = 110;
        $número2 = 55;
        echo "<br>";

        if ($número1 > $número2) {
            echo "Si numero1 es mayor a numero2";
            echo "<br>";
            echo $número1 + $número2;
            echo "<br>";
            echo $número1 - $número2;
        } elseif ($número2 > $número1) {
            echo "Si numero2 es mayor a numero1";
            echo "<br>";
            echo $número2 * $número1;
            echo "<br>";
            echo $número2 / $número1;
            echo "<br>";
            echo $número2 % $número1;
        } else {
            echo "Los números ingresados son iguales";
        }
?>
</body>
</html>