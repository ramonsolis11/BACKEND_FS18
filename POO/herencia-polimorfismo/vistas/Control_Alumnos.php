<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Alumnos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
        <h1>Control de Alumnos</h1>
        <form action="" method="POST">
        <div class="mb-3">
                <label for="kodigo" class="form-label">Academia</label>
                <select class="form-select" id="kodigo" name="kodigo">
                    <option value="">Selecciona una opción</option>
                    <option value="Kodigo">Kodigo</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>

            <div class="mb-3">
            <label for="estadoAlumno" class="form-label">Estado del alumno</label>
            <select class="form-select" id="estadoAlumno" name="estado_alumno">
                <option value="">Selecciona una opción</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <div class="mb-3">
                <label for="nota" class="form-label">Nota</label>
                <input type="number" class="form-control" id="nota" name="nota">
            </div>

            <div class="mb-3">
                <p>Bootcamp:</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bootcamp" value="FSJ" id="fsjRadio">
                    <label class="form-check-label" for="fsjRadio">Full Stack Jr</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bootcamp" value="WD" id="wdRadio">
                    <label class="form-check-label" for="wdRadio">Web Developer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bootcamp" value="JD" id="jdRadio">
                    <label class="form-check-label" for="jdRadio">Java Developer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bootcamp" value="PD" id="pdRadio">
                    <label class="form-check-label" for="pdRadio">Python Developer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bootcamp" value="DS" id="dsRadio">
                    <label class="form-check-label" for="dsRadio">Data Science</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="nivelAcademico" class="form-label">Nivel Académico</label>
                <select class="form-select" id="nivelAcademico" name="nivel_academico">
                    <option value="">Selecciona una opción</option>
                    <option value="Bachillerato">Bachillerato</option>
                    <option value="Universidad">Universidad</option>
                    <option value="Posgrado">Posgrado</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipoPago" class="form-label">Tipo de Pago</label>
                <select class="form-select" id="tipoPago" name="tipoPago">
                    <option value="">Selecciona una opción</option>
                    <option value="Aic">AIC</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Transferencia">Transferencia</option>
                    <option value="Tarjeta">Tarjeta</option>
                </select>
            </div>

            <div id="tipoPagoMessage" class="text-danger mb-3"></div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cargar Datos</button>
            </div>

        </form>

        <hr>

        <?php
        require "../clases/Alumno.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = @$_POST['nombre'];
            $correo = @$_POST['correo'];
            $academia = @$_POST['kodigo'];
            $nivel_academico = @$_POST['nivel_academico'];
            $bootcamp = @$_POST['bootcamp'];
            $pago = @$_POST['tipoPago'];
            $nota = @$_POST['nota'];
    
            // Corrected constructor parameters
            $alumno = new Alumno($nombre, $correo, $academia, $nivel_academico, $bootcamp, $pago, $nota);
        }
        ?>
    
        <!-- Information display only once -->
        <?php if(isset($alumno)): ?>
            <h2>Informacion del alumno</h2>
            <?php echo $alumno->obtenerInfo(); ?>
            <h2>Estado del alumno</h2>
            <?php echo $alumno->mensajeEstado(true, "Activo", "Inactivo"); ?>
            <h2>Estado del bootcamp</h2>
            <?php echo $alumno->AproboBootcamp(); ?>
            <h2>Tipo de pago del bootcamp</h2>
            <?php echo $alumno->TipoPagoBootcamp(); ?>
            <h2>Nota del bootcamp</h2>
            <?php echo $alumno->NotaBootcamp(); ?>
        <?php endif; ?>
    </div>
    </body>
    </html>