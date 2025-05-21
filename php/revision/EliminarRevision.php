<?php
include '../conexion.php';

$cod_revision = $_GET['cod_revision'];

$sql = "DELETE FROM revision WHERE cod_revision = '$cod_revision'";

$resultado = mysqli_query($conexion, $sql);

if ($resultado){
    echo "Revisión eliminada exitosamente.";
    echo "<br><a href='./ListarRevision.php'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}