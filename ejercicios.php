<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios</title>
</head>
<body>
    
    <?php
    
        //Ejercicio 1
        $x = 144;
        $y = 999;

        echo '<h2> Ejercicio 1: </h2>';    
        echo 'Suma: '.($x + $y).'<br>';
        echo 'Resta: '.($x - $y).'<br>';
        echo 'Multiplicación: '.($x * $y).'<br>';
        echo 'División: '.($x / $y).'<br>';

        //Ejercicio 2
        echo '<h2> Ejercicio 2: </h2>';    

        $nombre = 'Digno Alexander Familia Jimenez';
        echo $nombre.'<br>';

        //Ejercicio 3
        echo '<h2> Ejercicio 3: </h2>';    

        function conversor($pesetas, $tasa){
            echo 'La conversion es: '.($pesetas / $tasa).'<br>';
        }

        $pesetas = 100;
        $tasa = 50;
        conversor($pesetas, $tasa);

        //Ejercicio 4
        echo '<h2> Ejercicio 4: </h2>';

        $mi_array[0] = 'Digno';
        $mi_array[1] = 'Alexander';
        $mi_array[2] = 'La cata';

        foreach($mi_array as $valor){
            echo $valor.'<br>';
        }
    
    ?>

</body>
</html>