<?php
include_once "../BD/Conexion.php";
include_once "../MODELO/Modelo_Inventario.php";

$c = new conexion();
$m = new Lista_Inventario();

include_once "../VISTA/Inventario.php";
?>