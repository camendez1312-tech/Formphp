<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre    = $_POST['nombre'];
    $edad      = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $correo    = $_POST['correo'];
    $cargo     = $_POST['cargo'];
    $salario   = $_POST['salario'];

    echo "<h2>Información recibida</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><td><strong>Nombre</strong></td><td>$nombre</td></tr>";
    echo "<tr><td><strong>Edad</strong></td><td>$edad</td></tr>";
    echo "<tr><td><strong>Dirección</strong></td><td>$direccion</td></tr>";
    echo "<tr><td><strong>Correo electrónico</strong></td><td>$correo</td></tr>";
    echo "<tr><td><strong>Cargo</strong></td><td>$cargo</td></tr>";
    echo "<tr><td><strong>Salario</strong></td><td>$$salario</td></tr>";
    echo "</table>";
}
?>
