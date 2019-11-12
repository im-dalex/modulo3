<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Modulo 3</title>
</head>
<body>

    <div class="container">
    
        <div class="row">
            <div class="col-md-6">
                <div class="container bg-primary text-center text-white p-3 m-2">
                    <h2>Ejercicios Basicos</h1>
                </div>
                
                <?php 
                    /*En este archivo se encuentra una serie de 4 ejercicios:
                        *El 1ro toma 2 numeros enteros ya asignados a variables y muestra el resultado de operaciones como suma,resta, division y multiplicaion usando estos numeros
                        *El 2do muestra en pantalla un nombre, previamente guardado en una varible
                        *El 3ro a travez de una funcion realiza una conversion de monedas, recibiendo 2 valores enteros: el numero de pesetas y la tasa de conversion
                        *El 4to presenta en pantalla datos almacenados en un array*/
                    include("ejercicios.php"); 
                    
                ?>
            </div>

            <div class="col-md-6">
                <div class="container bg-primary text-center text-white p-3 m-2">
                    <h2>Funciones Predefinidas</h1>
                </div>
                <?php 
                    /*Dentro de este include comentado ahi una funcion predefinida que te redirecciona a otra pagina*/
                    
                     //include("redireccion.php");

                     /*Dentro de este archivo se encuentra una serie de funciones predefinidas de PHP:
                        *Un funcion para imprimir en patalla la url actual
                        *Una funcion para mostrar la ip del cliente y del servidor
                        *Una funcion para mostrar el archivo en ejecucion
                        *Una funcion que imprime la version de PHP actual
                     */
                    include("predefinidas.php"); 
                ?>
            </div>
        </div>
        <?php include("identificador.php"); ?>
        <?php include("cards.php"); ?>
    </div>

    <?php 
    
        
        
       
    
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>