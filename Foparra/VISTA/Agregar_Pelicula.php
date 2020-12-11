<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="../CSS/Estilo.css">
    <title>Agregar Pelicula</title>
</head>
<body>
    <center>
        <div class="contenedor-5">
             <?php
                if(isset($error)){
                   echo $error;
                }
             ?>
             <div>
                <h1>Agregar Pelicula</h1>
             </div>
        	<form action="../CONTROLADOR/Controlador_Pelicula.php" method="post">
        	    <div>
            		<input type="text" name="nom_pel" placeholder="Nombre" class="input-form" required="required">
        	    </div>
        	    <div>
            		<select name="id_gen">
            			<option value="sel">Seleccionar...</option>
            			<option value="acc" required="required">Acción</option>
            			<option value="ave" required="required">Aventura</option>
            			<option value="ter" required="required">Terror</option>
                        <option value="ani" required="required">Animación</option>
            		</select>
        	    </div>
        	    <div>
            		<input type="text" name="dur_pel" placeholder="Duración" class="input-form" required="required">
        	    </div>
        	    <div>
            		<input type="text" name="ano_pel" placeholder="Año" class="input-form" required="required">
        	    </div>
        	    <div>
            		<input type="text" name="actor_prin" placeholder="Actor Principal" class="input-form" required="required">
        	    </div>
        	    <div>
            		<input type="submit" name="agre_pel" value="Agregar">
        	    </div>
        	</form>
            <a href="../CONTROLADOR/Controlador_Inventario.php" class="cerrar-sesion">Regresar</a>
        </div>
   </center>
</body>
</html>