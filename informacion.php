<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];
$correo = $_POST['correo'];

echo "<h2>Información recibida</h2>";
echo "El empleado <strong>$nombre</strong> tiene <strong>$edad</strong> años.<br>";
echo "Vive en <strong>$direccion</strong> y su salario es <strong>$salario</strong>.<br>";
echo "Ocupa el cargo de <strong>$cargo</strong> y su correo es <strong>$correo</strong>.";
?>
