<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/Estilo.css">
    <title>Document</title>
</head>
<body>
	<center>
      	<div class="contenedor-3">
      		<?php
            	if(isset($error)){
               		echo $error;
            	}
         	?>
			<h1>Agregar Alquiler</h1>

			<form action="../CONTROLADOR/Controlador_Alquiler.php" method="post">
				Referencia Pelicula:
				<div>
					<input type="text" name="id_pel" class="input-form" required="required">
				</div>
				Documento Cliente:
				<div>
					<input type="text" name="num_iden" class="input-form" required="required">
				</div>
				Fecha de Alquiler:
				<div>
					<input type="date" name="fec_alq" class="input-form" required="required">
				</div>
				Fecha De Devolucion:
				<div>
					<input type="date" name=" fec_dev" class="input-form" required="required">
				</div>
				<input type="submit" value="Alquilar ">
			</form> 
			<a href="../CONTROLADOR/Controlador_AlquilerConsu.php" class="cerrar-sesion">Regresar</a>
		</div>
   	</center> 
</body>
</html>