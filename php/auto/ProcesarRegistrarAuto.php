<?php
include '../conexion.php';

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$pventa = $_POST['pventa'];
$cod_cliente = $_POST['cod_cliente'];

$sql = "INSERT INTO auto(
marca, 
modelo, 
color, 
pventa,
cod_cliente
) VALUES (
'$marca',
'$modelo',
'$color',
'$pventa',
'$cod_cliente'
)";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "Auto registrado exitosamente.";
    echo "<br> <a href='../../menu.html'>Volver al menú</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}