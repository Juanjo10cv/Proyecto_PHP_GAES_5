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
                if(isset($error)){
                    echo $error;
                }
            ?>
            <div>
                <form action="../CONTROLADOR/Controlador_Consulta.php" method="post">
                    <input type="search" name="num_iden" class="input-search" placeholder="Buscar...">
                </form>
            </div>      
            <?php 
                $a -> alquiler_cliente($num_iden);
            ?>
            <a href="../CONTROLADOR/Controlador_AlquilerConsu.php" class="cerrar-sesion">Regresar</a>
        </div>
    </center>
</body>
</html>