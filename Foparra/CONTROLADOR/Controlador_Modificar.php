<?php
include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_Modificar.php';

$c = new conexion();
$m = new Modelo_Modificar();

$mod_bot = $_POST['mod_bot'];

if($mod_bot == 'Guardar'){
	$id_pel = $_POST['id_pel'];
	$nom_pel = $_POST['nom_pel'];
	$id_gen = $_POST['id_gen'];
	$dur_pel = $_POST['dur_pel'];
	$ano_pel = $_POST['ano_pel'];
	$actor_prin = $_POST['actor_prin'];

	$c -> conexion();
	$m -> modificar_pelicula($id_pel, $nom_pel, $id_gen, $dur_pel, $ano_pel, $actor_prin);
}

if ($mod_bot == 'Eliminar') {
	$id_pel = $_POST['id_pel'];

	$c -> conexion();
	$m -> estado_pelicula($id_pel);
}
?>