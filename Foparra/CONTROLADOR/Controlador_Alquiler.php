<?php
include_once "../BD/Conexion.php";
include_once "../MODELO/Modelo_Alquiler.php";

$c = new conexion();
$m = new Alquiler_Registro();

$id_pel=$_POST["id_pel"];
$num_iden=$_POST["num_iden"];
$fec_alq=$_POST["fec_alq"];
$fec_dev=$_POST["fec_dev"];

$c -> conexion();
$m -> registro_alquiler($id_pel, $num_iden, $fec_alq, $fec_dev);

?>