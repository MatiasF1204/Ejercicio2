<?php
include '../conexion.php';

$sql = "SELECT * FROM revision
        INNER JOIN auto
        ON revision.cod_auto = auto.cod_auto
        WHERE revision.estado != 'Finalizado'
    ";

$resultado = mysqli_query($conexion, $sql);
$cantidad = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Revisiones Encontradas:</h1>
    <?php if ($cantidad > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha ingreso</th>
                    <th>Fecha egreso</th>
                    <th>Estado</th>
                    <th>Filtro</th>
                    <th>Aceite</th>
                    <th>Freno</th>
                    <th>Descripción</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($revision = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?php echo $revision['cod_revision'] ?></td>
                        <td><?php echo $revision['fingreso'] ?></td>
                        <td><?php echo $revision['fegreso'] ?></td>
                        <td><?php echo $revision['estado'] ?></td>
                        <td><?php echo $revision['cambio_filtro'] ?></td>
                        <td><?php echo $revision['cambio_aceite'] ?></td>
                        <td><?php echo $revision['cambio_freno'] ?></td>
                        <td><?php echo $revision['descripcion'] ?></td>
                        <td><?php echo $revision['marca'] ?></td>
                        <td><?php echo $revision['modelo'] ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay revisiones no finalizadas para mostrar.</p>
    <?php endif ?>
    <br>
    <a href="../../menu.html">Volver</a>
</body>

</html>