<?php
include '../conexion.php';

// Obtenemos usuario y contraseña enviados por el FormRegistrarse.html
$user = $_POST['user'];
$pass = $_POST['pass'];

// Consulta para insertar datos en la tabla usuario
$sql = "INSERT INTO usuario (user, pass) VALUES ('$user', '$pass')";

// Ejecutamos consulta
$respuesta = mysqli_query($conexion, $sql);

if ($respuesta) {
    echo "Usuario creado exitosamente.";
    echo "<br><a href='../../index.html'>Volver</a>";
} else {
    echo "Error al crear usuario: " . mysqli_error($conexion);
}
