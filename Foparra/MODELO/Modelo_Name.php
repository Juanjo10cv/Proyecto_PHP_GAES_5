<?php
error_reporting(0);
include_once '../BD/Conexion.php';
include_once '../MODELO/Modelo_Login.php';
include_once '../MODELO/Modelo_User.php';

$userSession = new UserSession();
$user = new User();
$c = new conexion(); 

$username = htmlspecialchars($_SESSION['usu']);       

$sql = pg_query("SELECT NOM_PE, USER_USU FROM USUARIO INNER JOIN PERSONA ON USUARIO.NUM_IDEN = PERSONA.NUM_IDEN WHERE USER_USU = '$username'");

$fila=pg_fetch_row($sql);
$row_name = $fila[0]; 

echo $row_name;

?>