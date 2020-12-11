<?php
class Alquiler_Registro
{
	public function registro_alquiler($id_pel, $num_iden, $fec_alq, $fec_dev){

		$query = pg_query("SELECT ID_EST FROM PELICULAS WHERE ID_PEL = $id_pel");
		$row = pg_fetch_row($query);
			$row_est = $row[0];

		if ($row_est == 1) {
			$sql = pg_query("INSERT INTO ALQUILER (NUM_IDEN, ID_PEL,FEC_ALQ, FEC_DEV ) VALUES ($num_iden, $id_pel, '$fec_alq', '$fec_dev')");
			
			if ($sql == True) {
				pg_query("UPDATE PELICULAS SET ID_EST = 0 WHERE ID_PEL = $id_pel");
				
				$hecho = "<div class='error'>Alquiler Realizado!</div>";
				include_once '../CONTROLADOR/Controlador_AlquilerConsu.php';
			}else{
				$error = "<div class='error'>Datos Incorrectos!</div>";
				include_once '../VISTA/Registro_Alquiler.php';
			}
		}else{
			$error = "<div class='error'>La pelicula no se encuntra disponible!</div>";
			include_once '../VISTA/Registro_Alquiler.php';
		}	
	}
}
?>