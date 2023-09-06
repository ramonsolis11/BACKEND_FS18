<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Calculadora de Área de Círculo</h1>
    <form action="" method="post">
        <label for="radio">Radio del círculo:</label>
        <input type="number" step="0.01" name="radio" required>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './clases/figura.php'; // Asegúrate de que Figura.php esté correctamente definido y ubicado

    class Circulo extends Figura {
        public $radio;

        public function calcularArea() {
            $area = pi() * pow($this->radio, 2);
            return "<div class='alert alert-primary' role='alert'>
                        El área del círculo es " . number_format($area, 2) . "
                    </div>";
        }
    }

    $Circulo = new Circulo();
    $Circulo->radio = $_POST['radio'];
    $resultado = $Circulo->calcularArea();

    echo $resultado;
};

?>

</body>
</html>