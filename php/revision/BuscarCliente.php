<?php
include '../conexion.php';

$sql = "SELECT * FROM cliente";

$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Revisión</title>
</head>

<body>
    <h1>Buscar Revisión según Cliente</h1>

    <form action="./ProcesarBuscarCliente.php" method="post">
        <label for="cod_cliente">Eliga el cliente:</label>
        <select name="cod_cliente" id="cod_cliente" required>
            <option value="">-- Seleccione una opción --</option>
            <?php
            while ($cliente = mysqli_fetch_assoc($resultado)) {
                echo "<option value={$cliente['cod_cliente']}>{$cliente['nomyape']}</option>";
            }
            ?>
        </select>
        <br> <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="../../menu.html">Volver al menú</a>
</body>

</html>