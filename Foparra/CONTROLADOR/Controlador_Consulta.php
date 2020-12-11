<?php
include_once "../BD/Conexion.php";
include_once "../MODELO/Modelo_Consulta.php";

$c = new conexion();
$a = new Consulta_Cliente();

$num_iden = $_POST['num_iden'];

include_once "../VISTA/Consulta.php";
?>