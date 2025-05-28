<?php
include '../conexion.php';

$cod_cliente = $_POST['cod_cliente'];
$nomyape = $_POST['nomyape'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$falta = $_POST['falta'];

$sql = "UPDATE cliente
        SET nomyape = '$nomyape',
            direccion = '$direccion',
            ciudad = '$ciudad',
            telefono = '$telefono',
            falta = '$falta'
        WHERE cod_cliente = '$cod_cliente'
        ";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "Cliente modificado exitosamente.";
    echo "<br> <a href='../../menu.html'>Volver al menú</a>";
} else {
    echo "Error al modificar cliente" . mysqli_error($conexion);
}
