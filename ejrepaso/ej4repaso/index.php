<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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

        include_once "funciones.php";

        if (isset($_GET['cantidad'])) { //Si hay algo en cantidad entra 
            $cantidad = $_GET['cantidad']; //Guardamos la variable fuera para los dos casos de uso

            if (isset($_GET['invertir'])) { //Si hay datos en la variable ordenar, llama a la función de ordenar

                for ($i = 1; $i <= $cantidad; $i++) { //Bucle para meter en el array el valor
                    $val[$i] = $_GET['N' . $i];
                }

                foreach (invertir($val) as $invert) {
                    echo $invert . " ";
                }
            } else { //Si no hay datos en la variable suma, mete los inputs con n cantidad veces
                crearFormulario($cantidad);
            }
        } else { // Si no hay nada en la primera pantalla, primer formulario si no hay datos, recojo cantidad
            echo '<form action="#" method="get">
    <p><label for="variables">Determina cuántas inputs quieres para ordenar?</label>
    <p>  <input type="number" name="cantidad" />
    <input type="submit" name="enviar" value="Enviar" />
</form>';
        }
        ?>
    </body>

    </html>
</body>

</html>