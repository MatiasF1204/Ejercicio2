<?php
include '../conexion.php';

$cod_auto = $_GET['cod_auto'];

// Verifico que el auto no esté en la tabla revision
$sql_validar = "SELECT * FROM revision WHERE cod_auto = '$cod_auto'";
$resultado_validar = mysqli_query($conexion, $sql_validar);
$cantidad = mysqli_num_rows($resultado_validar);

if ($cantidad > 0) {
    echo "No se puede eliminar un auto que está asociado a una revisión.";
    echo "<br><a href='./ListarAuto.php'>Volver</a>";
} else {
    $sql_eliminar = "DELETE FROM auto WHERE cod_auto = '$cod_auto'";
    $resultado_eliminar = mysqli_query($conexion, $sql_eliminar);
    if ($resultado_eliminar) {
        echo "Auto eliminado correctamente.";
        echo "<br><a href='./ListarAuto.php'>Volver</a>";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
