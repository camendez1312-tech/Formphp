<?php
$nombre    = $_POST['nombre'];
$edad      = $_POST['edad'];
$direccion = $_POST['direccion'];
$salario   = $_POST['salario'];
$correo    = $_POST['correo'];
$cargo     = $_POST['cargo'];

echo "<h2>Información recibida</h2>";
echo "El empleado <strong>$nombre</strong> tiene <strong>$edad</strong> años.<br>";
echo "Vive en <strong>$direccion</strong>.<br>";
echo "Su cargo es <strong>$cargo</strong> y su salario es <strong>$$salario</strong>.<br>";
echo "Correo de contacto: <strong>$correo</strong>.";
?>
