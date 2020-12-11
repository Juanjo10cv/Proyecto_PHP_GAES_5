<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/Estilo.css">
    <title>Inventario</title>
</head>
<body>
	<center>
        <div class="contenedor-4">
            <?php
                if(isset($hecho)){
                    echo $hecho;
                }

                if(isset($error)){
                    echo $error;
                }
            ?> 
		    <a href="../VISTA/Agregar_Pelicula.php"><button class="button-go">Agregar</button></a>
		    <?php 
		        $m -> List_Pel();
		    ?>
		    <a href="../CONTROLADOR/Controlador_Redirect_Login.php" class="cerrar-sesion">Regresar</a>
    </div>
    </center>
</body>
</html>