<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/Estilo.css">
    <title>Document</title>
</head>
<body>
    <center>
        <div class="contenedor">
            <?php
                if(isset($hecho)){
                    echo $hecho;
                }
            ?>
            <h1>Bienvenido <?php include_once '../MODELO/Modelo_Name.php'; ?></h1>
            <div>
                <a href="../VISTA/Registro_Vendedor.php"><button class="button-go">Registro</button></a>
            </div>
            <div>
                <a href="../CONTROLADOR/Controlador_Inventario.php"><button class="button-go">Inventario</button></a>
            </div>
            <div>
                <a href="../CONTROLADOR/Controlador_AlquilerConsu.php"><button class="button-go">Alquiler</button></a>
            </div>
            <a href="../MODELO/Modelo_Logout.php" class="cerrar-sesion">Cerrar Sesión</a>
        </div>
    </center>
</body>
</html>