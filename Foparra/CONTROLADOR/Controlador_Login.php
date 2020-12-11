<link rel="stylesheet" href="../CSS/Estilo.css">
<?php
include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();

if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
	
$userForm = $_POST['usuario'];
$passForm = $_POST['contrasena'];
	
if($user->userExists($userForm, $passForm)){
		
	$userSession->setCurrentUser($userForm);
	$user->setUser($userForm);
		
	if($user->getRol() == 1){
	
		include_once '../VISTA/Index_Admin.php';
	}
	
	if($user->getRol() == 2){
			
		include_once '../VISTA/Index_Vendedor.php';
	}
	
	}else{

		echo '<!DOCTYPE html>
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
				<div class="contenedor-6">
					<div class="error">Datos Incorrectos!</div>
					<br>
					<a href="../Index.php" class="cerrar-sesion">Regresar</a>
				</div>
			</center>
		</body>
		</html>';
	}
}	
?>