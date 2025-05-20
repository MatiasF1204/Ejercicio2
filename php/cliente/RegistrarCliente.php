<?php
include '../conexion.php';

$nomyape = $_POST['nomyape'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$falta = $_POST['falta'];

$sql = "INSERT INTO cliente (nomyape, direccion, ciudad, telefono, falta)
        VALUES ('$nomyape', '$direccion', '$ciudad', '$telefono', '$falta')";

$respuesta = mysqli_query($conexion, $sql);

if ($respuesta){
    echo "Cliente agregado exitosamente.";
    echo "<br> <a href='../../menu.html'>Volver</a>";
} else {
    echo "Error al agregar cliente" . mysqli_error($conexion);
}
?>
