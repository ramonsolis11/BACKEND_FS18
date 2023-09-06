<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Planillas</title>
</head>
<body>
    <section>
        <h1>Gestión de Planillas</h1>
        <!-- Formulario para ingresar los datos del empleado -->
        <form action="" method="POST">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>
            <br>
            <label for="sueldo">Sueldo:</label>
            <input type="number" id="sueldo" name="sueldo" required>
            <br>
            <input type="submit" value="Calcular">
        </form>
    </section>

    <?php
    // Requerir el archivo "Planilla.php"
    require("Planilla.php");

    // Obtener datos del formulario
    $nombre = @$_POST['nombre'];
    $cargo = @$_POST['cargo'];
    $sueldo = @$_POST['sueldo'];

    // Creación y uso de un objeto de la clase "Planilla"
    $persona1 = new Planilla($nombre, $cargo, $sueldo);
    $persona1->calcularDeducciones();
    echo $persona1->informacion();
    ?>
</body>
</html>
