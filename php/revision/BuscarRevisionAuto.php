<?php 
include '../conexion.php';

$sql = "SELECT * FROM auto";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listar Revisiones de un Auto</h1>
    <form action="./ProcesarBuscarRevisionAuto.php" method="post">

        <label for="cod_auto">Seleccione el auto:</label>
        <select name="cod_auto" id="cod_auto" required>
            <option value="">-- Seleccione una opción --</option>
            <?php
            while ($auto = mysqli_fetch_assoc($resultado)) {
                echo "<option value={$auto['cod_auto']}>{$auto['marca']} - {$auto['modelo']}</option>";
            }
            ?>
        </select>
        <br><br>

        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="../../menu.html">Volver al menú</a>
</body>
</html>