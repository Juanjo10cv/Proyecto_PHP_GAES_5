<?php
$username = htmlspecialchars($_SESSION['usu']);       

$sql = pg_query("SELECT ID_ROL, USER_USU FROM PERSONA INNER JOIN USUARIO ON PERSONA.NUM_IDEN = USUARIO.NUM_IDEN WHERE USER_USU = '$username'");

$fila=pg_fetch_row($sql);

$row_rol = $fila[0]; 

if($row_rol == 1){

	header("location: ../VISTA/Index_Admin.php");
}

if($row_rol == 2){

	header("location: ../VISTA/Index_Vendedor.php");
}
?>