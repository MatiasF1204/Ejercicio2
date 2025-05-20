<?php
include '../conexion.php';

$cod_auto = $_GET['cod_auto'];

$sql_validar = "SELECT * FROM cliente WHERE cod_auto = '$cod_auto'"; 
?>