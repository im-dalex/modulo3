<?php

//Funciones Predefinidas
//Ejercicio 2
echo '<h2>Ejercicio 2</h2>'; 
echo 'La url actual es: '.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

//Ejercicio 3 

echo '<h2>Ejercicio 3</h2>'; 

echo 'Nombre del fichero en ejecucion: '. basename($_SERVER['PHP_SELF']).'<br>';
echo 'IP del Cliente: '.$_SERVER['REMOTE_ADDR'].'<br>';
echo 'IP del Servidor: '.$_SERVER['SERVER_ADDR'].'<br>';


//Ejercicio 4 
echo '<h2>Ejercicio 4</h2>'; 
echo 'Version de PHP: '.PHP_VERSION;

?>