<?php
include '../conexion.php';

// Obtenemos el ID del cliente desde la URL
$cod_cliente = $_GET['cod_cliente'];

// Verificamos si el cliente está asociado a algún auto
$sql_validar = "SELECT * FROM auto WHERE cod_cliente = '$cod_cliente'";
$resultado_validar = mysqli_query($conexion, $sql_validar);
$cantidad = mysqli_num_rows($resultado_validar);

if ($cantidad > 0) {
    // Si el cliente tiene autos asociados, no se puede eliminar
    echo "No se puede eliminar un cliente que está asociado a uno o más autos.";
    echo "<br><a href='./ListarCliente.php'>Volver</a>";
} else {
    // Si no tiene autos asociados, procedemos a eliminarlo
    $sql_eliminar = "DELETE FROM cliente WHERE cod_cliente = '$cod_cliente'";
    $resultado_eliminar = mysqli_query($conexion, $sql_eliminar);
    if ($resultado_eliminar) {
        echo "Cliente eliminado correctamente.";
        echo "<br><a href='./ListarCliente.php'>Volver</a>";
    } else {
        echo "Error al eliminar cliente: " . mysqli_error($conexion);
    }
}
