<?php
require_once'../BD/Conexion.php';
require_once'../MODELO/Modelo_Pelicula.php';

$c = new conexion();
$p = new Modelo_Pelicula();

$id_gen = $_POST['id_gen'];

if ($id_gen == 'sel') {
	$p -> error();
}

if ($id_gen == 'acc') {
	$id_gen = 3;
	$nom_pel = $_POST['nom_pel'];
	$dur_pel = $_POST['dur_pel'];
	$ano_pel = $_POST['ano_pel'];
	$actor_prin = $_POST['actor_prin'];

	$c -> conexion();
	$p -> pel_accion($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin);
}

if ($id_gen == 'ave') {
	$id_gen = 1;
	$nom_pel = $_POST['nom_pel'];
	$dur_pel = $_POST['dur_pel'];
	$ano_pel = $_POST['ano_pel'];
	$actor_prin = $_POST['actor_prin'];

	$c -> conexion();
	$p -> pel_aventura($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin);
}

if ($id_gen == 'ter') {
	$id_gen = 2;
	$nom_pel = $_POST['nom_pel'];
	$dur_pel = $_POST['dur_pel'];
	$ano_pel = $_POST['ano_pel'];
	$actor_prin = $_POST['actor_prin'];

	$c -> conexion();
	$p -> pel_terror($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin);
}

if ($id_gen == 'ani') {
	$id_gen = 4;
	$nom_pel = $_POST['nom_pel'];
	$dur_pel = $_POST['dur_pel'];
	$ano_pel = $_POST['ano_pel'];
	$actor_prin = $_POST['actor_prin'];

	$c -> conexion();
	$p -> pel_animacion($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin);
}

?>