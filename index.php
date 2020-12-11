<!DOCTYPE html>
<html>

<head>
	<!--Caracteres Especiales-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="CSS/Estilo.css">
	<title>FoParra</title>
</head>

<body>
	<center>
		<div class="contenedor">
			<div>
				<h1>Bienvenido</h1>
			</div>
			
			<form action="CONTROLADOR/Controlador_Login.php" method="post">
				<div>
					<input type="text" name="usuario" placeholder="Usuario" required="required" class="input-form">
				</div>
				<div>
					<input type="password" name="contrasena" placeholder="Contraseña" required="required" class="input-form">
				</div>
				<div>
					<input type="submit" name="login" value="Iniciar Sesión">
				</div>
			</form>
		</div>
	</center>
</body>

</html>