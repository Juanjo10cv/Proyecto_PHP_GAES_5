<?php
class Modelo_Pelicula{
	public function pel_accion($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin){
		$query = pg_query("INSERT INTO PELICULAS (id_est, id_gen, nom_pel, actor_prin, dur_pel, ano_pel) VALUES (1, $id_gen, '$nom_pel', '$actor_prin', '$dur_pel', $ano_pel)");

		if ($query == True) {
			$hecho = "<div class='error'>Pelicula Agregada Correctamente!</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}else{
			$error = '<div class="error">Datos Incorrectos</div>';
			include_once '../VISTAS/Agregar_Pelicula.php';
		}
	}

	public function pel_aventura($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin){
		$query = pg_query("INSERT INTO PELICULAS (id_est, id_gen, nom_pel, actor_prin, dur_pel, ano_pel) VALUES (1, $id_gen, '$nom_pel', '$actor_prin', '$dur_pel', $ano_pel)");

		if ($query == True) {
			$hecho = "<div class='error'>Pelicula Agregada Correctamente!</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}else{
			$error = '<div class="error">Datos Incorrectos</div>';
			include_once '../VISTAS/Agregar_Pelicula.php';
		}
	}

	public function pel_terror($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin){
		$query = pg_query("INSERT INTO PELICULAS (id_est, id_gen, nom_pel, actor_prin, dur_pel, ano_pel) VALUES (1, $id_gen, '$nom_pel', '$actor_prin', '$dur_pel', $ano_pel)");

		if ($query == True) {
			$hecho = "<div class='error'>Pelicula Agregada Correctamente!</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}else{
			$error = '<div class="error">Datos Incorrectos</div>';
			include_once '../VISTAS/Agregar_Pelicula.php';
		}
	}

	public function pel_animacion($id_gen, $nom_pel, $dur_pel, $ano_pel, $actor_prin){
		$query = pg_query("INSERT INTO PELICULAS (id_est, id_gen, nom_pel, actor_prin, dur_pel, ano_pel) VALUES (1, $id_gen, '$nom_pel', '$actor_prin', '$dur_pel', $ano_pel)");

		if ($query == True) {
			$hecho = "<div class='error'>Pelicula Agregada Correctamente!</div>";
			include_once '../CONTROLADOR/Controlador_Inventario.php';
		}else{
			$error = '<div class="error">Datos Incorrectos</div>';
			include_once '../VISTAS/Agregar_Pelicula.php';
		}
	}

	public function error(){
		$error = '<div class="error">Debe Seleccionar un Genero de Pelicula</div>';
		include_once '../VISTA/Agregar_Pelicula.php';
	}
}
?>