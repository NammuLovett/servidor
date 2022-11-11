<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alumnos
    </title>

</head>

<body>
    <form action="../inserts/insertAlum.php" method="GET">
        <fieldset>
            <legend>Información de los Alumnos</legend>
            <p>
                <label for="name">Nombre: </label>
                <input type="text" name="name" id="name" />

                <label for="surname">Apellido:</label>
                <input type="text" name="surname" id="surname" />

                <label for="expedient">Expediente:</label>
                <input type="text" name="expedient" id="expedient" />

                <label for="tlfAlum">Teléfono:</label>
                <input type="text" name="tlfAlum" id="tlfAlum" />

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" />

                <select name="id_group">
                    <option value="" selected disabled hidden>-- Selecciona un grupo --</option>
                    <?php
                    include_once('../bdconnect.php');
                    $sql = "SELECT * FROM grupo";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($grupo = $result->fetch_assoc()) {
                            echo "<option value='" . $grupo['id_group'] . "'>" . $grupo['nameCourse'] . "</option>";
                        }
                    }
                    ?>
                </select>

                <input type="submit" name="insertar" value="Guardar">




            </p>
        </fieldset>
</body>

</html>