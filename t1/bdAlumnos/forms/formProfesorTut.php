<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <!-- charset  unicode, todos los idiomas, emojis... -->
    <meta name="description" content="This is my first webpage ... " />
    <!-- en name pones el nombre del metadato. y en content el metadato: En desctiption es una descripción en lenguaje natural  -->
    <meta name="keywords" content="coding, html, programming" />
    <!-- keywords ayuda a posicionarnos frente a los motores de búsqueda -->
    <meta name="author" content="Manuel Gómez Lora" />
    <!-- Autor de la página web -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Para dar soporte a las versiones antiguas de IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- El conjunto de cosas que se muestra en pantalla, es decir si no se pone, las páginas responsives no se muestran, es la referencia de estas-->
    <meta name="generator" content="Programa" />
    <!-- Si nuestra página web ha sido creada de forma automáticamente con un programa -->
    <link rel="stylesheet" href="../style.css" />

    <!-- Señalar contenido que tiene relación con el html de la web, tienes que poner en rel la palabra cable -->
    <link rel="icon" href="img/favicon.ico" />
    <!-- Favicon de la web -->
    <title>BD MURALLA</title>
</head>

<body>
    <form action="../inserts/insertProf.php" method="POST">
        <fieldset>
            <legend>Crear profesor</legend>
            <p>
                <label for="nameTeacher">Nombre </label>
                <input type="text" name="nameTeacher" id="nameTeacher" />
            </p>
            <p>
                <label for="surnameTeacher">Apellidos</label>
                <input type="text" name="surnameTeacher" id="surnameTeacher" />
            </p>
            <p>
                <label for="tlfTeacher">Teléfono</label>
                <input type="text" name="tlfTeacher" id="tlfTeacher" />
            </p>
            <p>
                <label for="emailTeacher"> email</label>
                <input type="text" name="emailTeacher" id="emailTeacher" />
            </p>
            <select name="id_group">
                <option value="" selected disabled hidden>-- Selecciona un grupo --</option>
                <?php
                include_once('../bdconnect.php');
                $sql = "SELECT * FROM Grupo";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($grupo = $result->fetch_assoc()) {
                        echo "<option value='" . $grupo['id_grupo'] . "'>" . $grupo['nombreGrupo'] . "</option>";
                    }
                }
                ?>
            </select>
            <input type="submit" name="insertar" value="Guardar">



        </fieldset>
</body>

</html>