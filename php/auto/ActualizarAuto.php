<?php 
include '../conexion.php';

$cod_auto = $_POST['cod_auto'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$pventa = $_POST['pventa'];
$cod_cliente = $_POST['cod_cliente'];

$sql = "UPDATE auto
        SET marca = '$marca',
            modelo = '$modelo',
            color = '$color',
            pventa = '$pventa'
        WHERE cod_auto = '$cod_auto'
";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "Auto modificado con éxito.";
    echo "<br> <a href='../../menu.html'>Volver al menú</a>";
} else {
    echo "Error: ". mysqli_error($conexion);
}

