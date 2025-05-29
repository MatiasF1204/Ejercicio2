<?php
include '../conexion.php';

$cod_revision = $_POST['cod_revision'];
$fingreso = $_POST['fingreso'];
$fegreso = $_POST['fegreso'];
$estado = $_POST['estado'];
$cambio_filtro = $_POST['cambio_filtro'];
$cambio_aceite = $_POST['cambio_aceite'];
$cambio_freno = $_POST['cambio_freno'];
$descripcion = $_POST['descripcion'];
$cod_auto = $_POST['cod_auto'];

$sql = "UPDATE revision
        SET fingreso = '$fingreso',
            fegreso = '$fegreso',
            estado = '$estado',
            cambio_filtro = '$cambio_filtro',
            cambio_aceite = '$cambio_aceite',
            cambio_freno = '$cambio_freno',
            descripcion = '$descripcion',
            cod_auto = '$cod_auto'
        WHERE cod_revision = '$cod_revision'
        ";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "Revisón actualizada exitosamente.";
    echo "<br><a href='../../menu.html'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}
