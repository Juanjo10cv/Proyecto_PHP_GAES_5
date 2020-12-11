<?php
class Modelo_Modificar
{
	public function modificar_pelicula($id_pel, $nom_pel, $id_gen, $dur_pel, $ano_pel, $actor_prin){

		$sql = pg_query("SELECT ID_GEN FROM PELICULAS WHERE ID_PEL = $id_pel;");
		$row = pg_fetch_row($sql);
			$db_id_gen = $row[0];

		$query = pg_query("UPDATE PELICULAS SET ID_GEN = $db_id_gen, NOM_PEL = '$nom_pel', ACTOR_PRIN = '$actor_prin', DUR_PEL = '$dur_pel', ANO_PEL = '$ano_pel' WHERE ID_PEL = $id_pel;");

		if($query == True){
			$hecho = "<div class='error'>Datos Modificados Exitosamente!</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}else{
			$error = "<div class='error'>Datos Incorrectos</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}
	}

	public function estado_pelicula($id_pel){

		$sql = pg_query("SELECT ID_EST FROM PELICULAS WHERE ID_PEL = $id_pel;");
		$row = pg_fetch_row($sql);
			$id_est = $row[0];

		if ($id_est == 1) {
			$query = pg_query("UPDATE PELICULAS SET ID_EST = 0 WHERE ID_PEL = $id_pel");

			$hecho = "<div class='error'>Datos Actalizados Exitosamente!</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}else{
			$query = pg_query("UPDATE PELICULAS SET ID_EST = 1 WHERE ID_PEL = $id_pel");

			$hecho = "<div class='error'>Datos Actalizados Exitosamente!</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}
		
	}
}
?>