<script type="text/javascript">	
function MostrarBot(){
	
	/*----INPUT----*/
	var estadoActual = document.getElementsByClassName("input-script");
	
	[].forEach.call(estadoActual, function(input){
		input.style.background = "none";
		input.style.padding = "5px";
		input.disabled = !input.disabled;
	});	
	
	var datoActual = document.getElementsByClassName("input-datos");
	
	[].forEach.call(datoActual, function(dato){
		dato.style.background = "none";
		dato.style.padding = "5px";
		dato.hidden = !dato.hidden;
	});
	
	/*----BOTON----*/
	
	var botonActual = document.getElementsByClassName("boton_script");
	
	[].forEach.call(botonActual, function(button){
		button.hidden = !button.hidden;
	});
}

function BotProv(){

	/*----INPUT----*/
	
	var estadoActual = document.getElementsByClassName("input-script");
	
	[].forEach.call(estadoActual, function(input){
		input.style.background = "rgba(221,220,202,1.00)";
		input.style.borderRadius = "8px"; 
		input.style.height = "30px";
		input.style.padding = "5px";
		input.disabled = !input.disabled;
	});	
	
	var datoActual = document.getElementsByClassName("input-datos");
	
	[].forEach.call(datoActual, function(dato){
		dato.style.background = "rgba(221,220,202,1.00)";
		dato.style.borderRadius = "8px"; 
		dato.style.height = "30px";
		dato.style.padding = "5px";
		dato.hidden = !dato.hidden;
	});
	
	/*----BOTON----*/
	
	var botonActual = document.getElementsByClassName("boton_script");
	
	[].forEach.call(botonActual, function(button){
		button.hidden = !button.hidden;
	});	
	
}

</script>
<?php
class Lista_Inventario{

	public $linea1;
	public $linea2;
	public $linea3;
	public $linea4;
	public $linea5;
	public $linea6;
	public $linea7;

	public function List_Pel(){
		$sql = pg_query('SELECT ID_PEL, GENERO.GENERO, NOM_PEL, ACTOR_PRIN, DUR_PEL, ANO_PEL, ESTADO_PELICULA.ESTADO FROM PELICULAS INNER JOIN GENERO ON PELICULAS.ID_GEN = GENERO.ID_GEN INNER JOIN ESTADO_PELICULA ON ESTADO_PELICULA.ID_EST = PELICULAS.ID_EST ORDER BY ID_PEL;');

		echo '<table>
				<tr>
					<th class="td-host">Referencia</th>
					<th>Nombre</th>
					<th>Genero</th>
					<th>Duración</th>
					<th class="td-host">Año</th>
					<th>Actor Principal</th>
					<th>Estado</th>
					<th colspan="2">Acciones</th>
				</tr>';
		while($row = pg_fetch_row($sql)){

			echo "<tr><form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>";

			echo $this -> linea1 = "<td><input type='text' value='".$row[0]."' class='list-input' disabled><input type='hidden' name='id_pel' value='".$row[0]."' class='list-input'></td>";			
			echo $this -> linea2 = "<td><input type='text' value='".$row[2]."' class='list-input input-script input-datos' disabled><input type='text' name='nom_pel' value='".$row[2]."' class='list-input input-datos' hidden></td>";			
			echo $this -> linea3 = "<td><input type='text' value='".$row[1]."' class='list-input input-script input-datos' disabled><input type='text' name='id_gen' value='".$row[1]."' class='list-input input-datos' hidden></td>";
			echo $this -> linea4 = "<td><input type='text' value='".$row[4]."' class='list-input input-script input-datos' disabled><input type='text' name='dur_pel' value='".$row[4]."' class='list-input input-datos' hidden></td>";
			echo $this -> linea5 = "<td><input type='text' value='".$row[5]."' class='list-input input-script input-datos' disabled><input type='text' name='ano_pel' value='".$row[5]."' class='list-input input-datos' hidden></td>";
			echo $this -> linea6 = "<td><input type='text' value='".$row[3]."' class='list-input input-script input-datos' disabled><input type='text' name='actor_prin' value='".$row[3]."' class='list-input input-datos' hidden></td>";
			echo $this -> linea7 = "<td><input type='text' value='".$row[6]."' class='list-input' disabled><input type='hidden' name='id_est' value='".$row[6]."' class='list-input input-list'></td>";

			echo "<td>
			    	<button onclick='MostrarBot()' name='mod_bot' value='Guardar' class='button-list boton_script' hidden>Guardar</button>
				</form>
					<button onclick='BotProv()' class='button-list boton_script' name='cambio-save'>Modificar</button>
				</td>
				<td>			
					<button onclick='MostrarBot()' class='button-list space-botton boton_script' name='cambio-save' hidden>Cancelar</button>
					
					<form method='post' action='../CONTROLADOR/Controlador_Modificar.php'>
						<input type='hidden' name='id_pel' value='".$row[0]."'>
		
						<button name='mod_bot' value='Eliminar' class='button-list space-botton boton_script'>Eliminar</button>
					</form>
				</td>
				</tr>";
		}
		echo '</table>';
	}
};
