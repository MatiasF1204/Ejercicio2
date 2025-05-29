<?php 
include '../conexion.php';

$cod_revision = $_GET['cod_revision'];

$sql = "SELECT * FROM revision
        WHERE cod_revision = '$cod_revision'
";

$respuesta = mysqli_query($conexion, $sql);

$revision = mysqli_fetch_assoc($respuesta);

$sql_auto = "SELECT * FROM auto";
$resultado_auto = mysqli_query($conexion, $sql_auto);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión</title>
</head>

<body>
    <h1>Modificar Revisión</h1>

    <form action="./ActualizarRevision.php" method="post">

        <input type="hidden" name="cod_revision" value="<?php echo $revision['cod_revision'] ?>">

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
            while ($auto = mysqli_fetch_assoc($resultado_auto)) {
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