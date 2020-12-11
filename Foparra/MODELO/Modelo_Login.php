<?php
include_once '../BD/Conexion.php';

class User extends conexion{
    private $user;
	private $rol;

	public function userExists($user, $pass){
		
		$enc = md5($pass);
		
		$sql = pg_query("SELECT ID_ROL, USER_USU, PASS_USU FROM PERSONA INNER JOIN USUARIO ON 
		PERSONA.NUM_IDEN = USUARIO.NUM_IDEN WHERE USER_USU = '$user' AND PASS_USU = '$enc'");
		$fila=pg_fetch_row($sql);
		$row_rol = $fila[0];
		$row_usu = $fila[1];
		$row_cont = $fila[2];
        
		$this->rol = $row_rol;

		if ($user == $row_usu && $enc == $row_cont){
			return true;
		}else {
			return false;
		}
	}
	
	public function setUser($usu){

		$sql = pg_query("SELECT * FROM USUARIO WHERE USER_USU = '$usu'");
		
		$fila=pg_fetch_row($sql);
		$row_nom=$fila[2];
		
		$this->nombre = $row_nom;
	}
	
	public function getRol(){
		return $this->rol;
	}
}
?>