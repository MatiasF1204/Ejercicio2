<?php
include '../conexion.php';

$sql = "SELECT * FROM cliente";
$resultado = mysqli_query($conexion, $sql);
$cantidad = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar clientes</title>
</head>

<body>
    <h1>Listado de Clientes</h1>
    <?php if ($cantidad > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DIRECCION</th>
                    <th>CIUDAD</th>
                    <th>TELÉFONO</th>
                    <th>FECHA DE ALTA</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($cliente = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td> <?php echo $cliente['cod_cliente'] ?> </td>
                        <td> <?php echo $cliente['nomyape'] ?> </td>
                        <td> <?php echo $cliente['direccion'] ?> </td>
                        <td> <?php echo $cliente['ciudad'] ?> </td>
                        <td> <?php echo $cliente['telefono'] ?> </td>
                        <td> <?php echo $cliente['falta'] ?> </td>
                        <td><a href="">MODIFICAR</a></td>
                        <td><a href="./EliminarCliente.php?cod_cliente=<?php echo $cliente['cod_cliente'] ?>">ELIMINAR</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    <?php endif ?>
    <br>
    <a href="../../menu.html">Volver al menú</a>
</body>

</html>