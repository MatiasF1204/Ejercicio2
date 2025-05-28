<?php
include '../conexion.php';

$cod_cliente = $_GET['cod_cliente'];

$sql = "SELECT * FROM cliente
        WHERE cod_cliente = '$cod_cliente' 
        ";

$resultado = mysqli_query($conexion, $sql);
$cliente = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
</head>
<body>
    <h1>Modificar Cliente</h1>

    <form action="./ActualizarCliente.php" method="post">
        <input type="hidden" name="cod_cliente" value="<?php echo $cliente['cod_cliente'] ?>">

        <label for="nomyape">Nombre completo:</label>
        <input type="text" name="nomyape" id="nomyape" required minlength="3">
        <br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required minlength="3">
        <br><br>

        <label for="ciudad">Ciudad:</label>
        <select name="ciudad" id="ciudad" required>
            <option value="">-- Ingrese una opción --</option>
            <option value="Rio Grande">Rio Grande</option>
            <option value="Tolhuin">Tolhuin</option>
            <option value="Ushuaia">Ushuaia</option>
        </select>
        <br><br>

        <label for="telefono">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" required minlength="3" min="0">
        <br><br>

        <label for="falta">Fecha de alta:</label>
        <input type="date" name="falta" id="falta" required>
        <br><br>

        <button type="submit">Enviar</button>
        <br><br>
    </form>
    <a href="../menu.html">Volver al menú</a>
</body>
</html>