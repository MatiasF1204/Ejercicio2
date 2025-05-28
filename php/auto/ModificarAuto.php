<?php
include '../conexion.php';

$cod_auto = $_GET['cod_auto'];
$sql = "SELECT * FROM auto WHERE cod_auto = '$cod_auto'";
$resultado = mysqli_query($conexion, $sql);
$auto = mysqli_fetch_assoc($resultado);

$sql_cliente = "SELECT * FROM cliente";
$resultado_cliente = mysqli_query($conexion, $sql_cliente);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Auto</title>
</head>

<body>
    <h1>Registrar Auto</h1>

    <form action="./ProcesarRegistrarAuto.php" method="post">

        <input type="hidden" name="cod_auto" value="<?= $auto['cod_auto'] ?>">


        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" required>
        <br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" required>
        <br><br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required>
        <br><br>

        <label for="pventa">Precio:</label>
        <input type="number" name="pventa" id="pventa" required>
        <br><br>

        <label for="cod_cliente">Cliente:</label>
        <select name="cod_cliente" id="cod_cliente" required>
            <option value="">-- Ingrese una opción --</option>
            <?php
            while ($cliente = mysqli_fetch_assoc($resultado_cliente)) {
                echo "<option value={$cliente['cod_cliente']}> {$cliente['nomyape']} </option>";
            }
            ?>
        </select>
        <br><br>

        <button type="submit">Enviar</button>
        <br><br>

    </form>
    <a href="../../menu.html">Volver al menú</a>
</body>

</html>