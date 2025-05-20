<?php
include '../conexion.php';

$fingreso = $_POST['fingreso'];
$fegreso = $_POST['fegreso'];
$estado = $_POST['estado'];
$cambio_filtro = $_POST['cambio_filtro'];
$cambio_aceite = $_POST['cambio_aceite'];
$cambio_freno = $_POST['cambio_freno'];
$descripcion = $_POST['descripcion'];
$cod_auto = $_POST['cod_auto'];

$sql = "INSERT INTO revision(
fingreso,
fegreso,
estado,
cambio_filtro,
cambio_aceite,
cambio_freno,
descripcion,
cod_auto
) VALUES (
'$fingreso',
'$fegreso',
'$estado',
'$cambio_filtro',
'$cambio_aceite',
'$cambio_freno',
'$descripcion',
'$cod_auto'
)";

$resultado = mysqli_query($conexion, $sql);

if ($resultado){
    echo "Revisión agregada exitosamente.";
    echo "<br><a href='../../menu.html'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>