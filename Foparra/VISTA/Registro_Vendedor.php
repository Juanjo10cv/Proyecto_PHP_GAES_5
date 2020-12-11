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
      <div class="contenedor-2">
         <?php
            if(isset($error)){
               echo $error;
            }
         ?>
         <div>
            <h1>Registrar Vendedor</h1>
         </div>
         <form action="../CONTROLADOR/Controlador_Registro.php" method="post">
            <div>
               <input type="text" name="nom_pe" placeholder="Nombre" class="input-form" required="required" />
            </div>
            <div>
               <input type="text" name="ape_pe" placeholder="Apellido" class="input-form" required="required" />
            </div>
            <div>
               <select name="id_tip">
                  <option value='SEL'>Seleccionar...</option>
                  <option value="CC">Cedula de Ciudadania</option>
                  <option value="TI">Tarjeta de Identidad</option>
                  <option value="TE">Tarjeta de Extranjeria</option>
               </select>
            </div>
            <div>
               <input type="text" name="num_iden" placeholder="Número de Identificación" class="input-form" required="required" />
            </div>
            <div>
               <input type="text" name="dir_pe" placeholder="Dirección" class="input-form" required="required" />
            </div>
            <div>
               <input type="email" name="cor_pe" placeholder="Correo" class="input-form" required="required" />
            </div>
            <div>
               <input type="text" name="tel_pe" placeholder="Telefono" class="input-form" required="required" />
            </div>
           
            <div>
               <input type="text" name="user_usu" placeholder="Usuario" class="input-form" required="required" />
            </div>
            <div>
               <input type="password" name="pass_usu" placeholder="Contraseña" class="input-form" required="required" />
            </div>
             <div>
               <input type="password" name="confi_pass" placeholder="Confirmar Contraseña" class="input-form" required="required" />
            </div>
            <div>
               <input type="submit" name ="Registrar_ven" value="REGISTRAR" />
            </div>
         </form>
         <a href="../VISTA/Index_Admin.php" class="cerrar-sesion">Regresar</a>
      </div>
   </center>
</body>

</html>