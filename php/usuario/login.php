<?php
session_start();
include '../conexion.php';

// Obtenemos usuario y contraseñas enviados por el index.html
$user = $_POST['user'];
$pass = $_POST['pass'];

// Obtenemos todos los usuarios que coincidan con el usuario y contraseña ingresada
$sql = "SELECT * FROM usuario WHERE user = '$user' AND pass = '$pass'";

// Ejecutamos consulta
$resultado = mysqli_query($conexion, $sql);

// Obtenemos cantidad de resultados
$cantidad = mysqli_num_rows($resultado);

// Si hay al menos 1 coincidencia
if ($cantidad == 1) {
    // Guardamos los datos del usuario en sesión
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $usuario['user'];
    $_SESSION['cod_usuario'] = $usuario['cod_usuario'];

    // Redirigimos a la página principal
    header("Location: ../../menu.html");
    exit();
} else {
    echo "Usuario o contraseña incorrectas.";
    echo "<br><br><a href='../../index.html'>Volver</a>";
}
