<?php
include '../conexion.php';

$sql = "SELECT revision.cod_revision, revision.fingreso, revision.fegreso, 
revision.estado, revision.cambio_filtro, revision.cambio_aceite, 
revision.cambio_freno, revision.descripcion, auto.marca, auto.modelo 
FROM revision
INNER JOIN auto
ON revision.cod_auto = auto.cod_auto";

$resultado = mysqli_query($conexion, $sql);

$cantidad = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Revisiones</title>
</head>

<body>
    <h1>Listado de Revisiones</h1>
    <?php if ($cantidad > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID REVISIÓN</th>
                    <th>FECHA INGRESO</th>
                    <th>FECHA EGRESO</th>
                    <th>ESTADO</th>
                    <th>CAMBIO FILTRO</th>
                    <th>CAMBIO ACEITE</th>
                    <th>CAMBIO FRENOS</th>
                    <th>DESCRIPCION</th>
                    <th>MARCA AUTO</th>
                    <th>MODELO</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
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
                        <td><a href="">MODIFICAR</a></td>
                        <td><a href="./EliminarRevision.php?cod_revision=<?php echo $revision['cod_revision'] ?>">ELIMINAR</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay revisiones para mostrar.</p>
    <?php endif ?>
    <br>
    <a href="../../menu.html">Volver al menú</a>
</body>

</html>