<?php 
class Consulta_Cliente
{
	public function alquiler_cliente($num_iden){

		$query = pg_query("SELECT NUM_IDEN FROM PERSONA WHERE NUM_IDEN = $num_iden");
		$array = pg_fetch_row($query);
			$array_id = $array[0];

		if ($array_id == $num_iden) {

			$sql = pg_query("SELECT ID_ALQ, PERSONA.NUM_IDEN, NOM_PE, PELICULAS.ID_PEL, PELICULAS.NOM_PEL, FEC_ALQ, FEC_DEV FROM ALQUILER INNER JOIN PERSONA ON ALQUILER.NUM_IDEN = PERSONA.NUM_IDEN INNER JOIN PELICULAS ON ALQUILER.ID_PEL = PELICULAS.ID_PEL WHERE PERSONA.NUM_IDEN = $num_iden");

			echo '<table>
					<tr>
						<th>ID de Alquiler</th>
						<th>Doc.Cliente</th>
						<th>Nom. Cliente</th>
						<th>Ref. Pelicula</th>
						<th>Nom. Pelicula</th>
						<th>Fecha Alquiler</th>
						<th>Fecha Devolucion</th>
					</tr>';
			while($row = pg_fetch_row($sql)){

				echo $this -> linea1 = "<tr><td><input type='text' value='".$row[0]."' class='list-input' disabled></td>";			
				echo $this -> linea2 = "<td><input type='text' value='".$row[1]."' class='list-input' disabled></td>";			
				echo $this -> linea3 = "<td><input type='text' value='".$row[2]."' class='list-input' disabled></td>";
				echo $this -> linea4 = "<td><input type='text' value='".$row[3]."' class='list-input' disabled></td>";
				echo $this -> linea5 = "<td><input type='text' value='".$row[4]."' class='list-input' disabled></td>";
				echo $this -> linea6 = "<td><input type='text' value='".$row[5]."' class='list-input' disabled></td>";
				echo $this -> linea7 = "<td><input type='text' value='".$row[6]."' class='list-input' disabled></td></tr>";
			}
			   
			echo '</table>';
			
		}else{
			echo "<div class='error'>El cliente no se encuentra registrado</div>";
			include_once '../VISTA/Consulta.php';
		}
	}
}
?>