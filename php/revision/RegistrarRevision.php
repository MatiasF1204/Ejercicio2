<?php
include '../conexion.php';
$sql = "SELECT * FROM auto";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión</title>
</head>

<body>
    <h1>Registrar Revisión</h1>
    <form action="./ProcesarRegistrarRevision.php" method="post">
        <label for="fingreso">Fecha de ingreso:</label>
        <input type="date" name="fingreso" id="fingreso" required>
        <br><br>

        <label for="fegreso">Fecha de egreso:</label>
        <input type="date" name="fegreso" id="fegreso" required>
        <br><br>

        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="">-- Seleccione una opción --</option>
            <option value="En espera">En espera</option>
            <option value="En revision">En revision</option>
            <option value="Finalizado">Finalizado</option>
        </select>
        <br><br>

        <label for="cambio_filtro">¿Se realizó cambio de filtro?</label>
        <select name="cambio_filtro" id="cambio_filtro" required>
            <option value="">-- Seleccione una opción --</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        <br><br>

        <label for="cambio_aceite">¿Se realizó cambio de aceite?</label>
        <select name="cambio_aceite" id="cambio_aceite" required>
            <option value="">-- Seleccione una opción --</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        <br><br>

        <label for="cambio_freno">¿Se realizó cambio de freno?</label>
        <select name="cambio_freno" id="cambio_freno" required>
            <option value="">-- Seleccione una opción --</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        <br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" required>
        <br><br>

        <label for="cod_auto">Auto:</label>
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