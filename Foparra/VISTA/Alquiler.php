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
        <div class="contenedor-4">
            <?php
                if(isset($hecho)){
                    echo $hecho;
                }

                if(isset($error)){
                    echo $error;
                }
            ?> 
        	<div>
        		<a href="../VISTA/Registro_Alquiler.php"><button class="button-go">Agregar</button></a>
                <form action="../CONTROLADOR/Controlador_Consulta.php" method="post">
                    <input type="search" name="num_iden" class="input-search" placeholder="Buscar...">
                </form>
            </div>      
			<?php 
		        $m -> Reg_Al();
		    ?>
		    <a href="../CONTROLADOR/Controlador_Redirect_Login.php" class="cerrar-sesion">Regresar</a>
	    </div>
    </center>
</body>
</html>