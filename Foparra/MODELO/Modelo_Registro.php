<?php
class Modelo_Registro
{
	public function registro_vendedor($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip, $user_usu, $pass_usu, $confi_pass){

		if ($pass_usu==$confi_pass) {

			$enc = md5($pass_usu);

			pg_query(" INSERT INTO PERSONA VALUES ($num_iden, 2, $id_tip, '$nom_pe', '$ape_pe', '$cor_pe', '$tel_pe', '$dir_pe')");
			pg_query(" INSERT INTO USUARIO (NUM_IDEN, USER_USU, PASS_USU) VALUES ($num_iden,'$user_usu', '$enc') ");
			
			$hecho = "<div class='error'>Empleado Registrado Correctamente!</div>";
			include_once '../VISTA/Index_Admin.php';
		}else{
			$error = "<div class='error'>Datos Incorrectos!</div>";
			include_once '../VISTA/Registro_Vendedor.php';
		}
	}

	public function registro_cliente($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip){

		$sql = pg_query("INSERT INTO PERSONA VALUES ($num_iden, 3, $id_tip, '$nom_pe', '$ape_pe', '$cor_pe', '$tel_pe', '$dir_pe')");
			
		if ($sql == True) 
		{
		    $hecho = "<div class='error'>Cliente Registrado Correctamente!</div>";
			include_once '../VISTA/Index_Vendedor.php';
		}else{
			$error = "<div class='error'>Datos Incorrectos!</div>";
			include_once '../VISTA/Registro_Cliente.php';
		}
	}

	public function error(){
		$error = '<div class="error">Debe Seleccionar un Tipo de Documento</div>';
		include_once '../VISTA/Registro_Vendedor.php';
	}

	public function error_cli(){
		$error = '<div class="error">Debe Seleccionar un Tipo de Documento</div>';
		include_once '../VISTA/Registro_Cliente.php';
	}
}
?>