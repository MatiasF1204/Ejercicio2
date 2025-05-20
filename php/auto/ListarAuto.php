<?php
include '../conexion.php';

$sql = "SELECT auto.cod_auto, auto.marca, auto.modelo, auto.color, auto.pventa, cliente.nomyape
FROM auto
INNER JOIN cliente
ON auto.cod_cliente = cliente.cod_cliente";

$respuesta = mysqli_query($conexion, $sql);

$cantidad = mysqli_num_rows($respuesta);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de autos</title>
</head>

<body>
    <h1>Listado de Autos</h1>
    <?php if ($cantidad > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID AUTO</th>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>COLOR</th>
                    <th>PRECIO</th>
                    <th>CLIENTE</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($auto = mysqli_fetch_assoc($respuesta)): ?>
                    <tr>
                        <td> <?php echo $auto['cod_auto'] ?> </td>
                        <td> <?php echo $auto['marca'] ?> </td>
                        <td> <?php echo $auto['modelo'] ?> </td>
                        <td> <?php echo $auto['color'] ?> </td>
                        <td> <?php echo $auto['pventa'] ?> </td>
                        <td> <?php echo $auto['nomyape'] ?> </td>
                        <td><a href="">MODIFICAR</a></td>
                        <td><a href="">ELIMINAR</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay autos registrados.</p>
    <?php endif ?>
    <br>
    <a href="../../menu.html">Volver al menú</a>
</body>

</html>