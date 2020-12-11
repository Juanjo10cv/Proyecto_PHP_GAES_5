<?php
require_once'../BD/Conexion.php';
require_once'../MODELO/Modelo_Registro.php';

$c = new conexion();
$r = new Modelo_Registro();

$Registrar_ven = $_POST['Registrar_ven'];

if ($Registrar_ven == 'REGISTRAR') {

	$id_tip=$_POST["id_tip"];

	if ($id_tip == 'SEL') {
		$r -> error();
	}

	if ($id_tip == 'CC') {
		$num_iden=$_POST["num_iden"];
		$dir_pe=$_POST["dir_pe"];
		$nom_pe=$_POST['nom_pe'];
		$ape_pe=$_POST["ape_pe"];
		$cor_pe=$_POST["cor_pe"];
		$tel_pe=$_POST["tel_pe"];
		$id_tip=1;
		$user_usu=$_POST["user_usu"];
		$pass_usu=$_POST["pass_usu"];
		$confi_pass=$_POST["confi_pass"];

    	$c -> conexion();
    	$r -> registro_vendedor($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip, $user_usu, $pass_usu, $confi_pass);
	}

	if ($id_tip=='TI') {
		$num_iden=$_POST["num_iden"];
		$dir_pe=$_POST["dir_pe"];
		$nom_pe=$_POST['nom_pe'];
		$ape_pe=$_POST["ape_pe"];
		$cor_pe=$_POST["cor_pe"];
		$tel_pe=$_POST["tel_pe"];
		$id_tip=2;
		$user_usu=$_POST["user_usu"];
		$pass_usu=$_POST["pass_usu"];
		$confi_pass=$_POST["confi_pass"];

		$c -> conexion();
    	$r -> registro_vendedor($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip, $user_usu, $pass_usu, $confi_pass);
	}

	if ($id_tip=='TE') {
		$num_iden=$_POST["num_iden"];
		$dir_pe=$_POST["dir_pe"];
		$nom_pe=$_POST['nom_pe'];
		$ape_pe=$_POST["ape_pe"];
		$cor_pe=$_POST["cor_pe"];
		$tel_pe=$_POST["tel_pe"];
		$id_tip=3;
		$user_usu=$_POST["user_usu"];
		$pass_usu=$_POST["pass_usu"];
		$confi_pass=$_POST["confi_pass"];

		$c -> conexion();
    	$r -> registro_vendedor($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip, $user_usu, $pass_usu, $confi_pass);
	}

}

if ($Registrar_ven == 'AGREGAR') {
	
	$id_tip=$_POST["id_tip"];

	if ($id_tip == 'SEL') {
		$r -> error_cli();
	}

	if ($id_tip == 'CC') {
		$num_iden=$_POST["num_iden"];
		$dir_pe=$_POST["dir_pe"];
		$nom_pe=$_POST['nom_pe'];
		$ape_pe=$_POST["ape_pe"];
		$cor_pe=$_POST["cor_pe"];
		$tel_pe=$_POST["tel_pe"];
		$id_tip=1;

    	$c -> conexion();
    	$r -> registro_cliente($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip);
	}

	if ($id_tip=='TI') {
		$num_iden=$_POST["num_iden"];
		$dir_pe=$_POST["dir_pe"];
		$nom_pe=$_POST['nom_pe'];
		$ape_pe=$_POST["ape_pe"];
		$cor_pe=$_POST["cor_pe"];
		$tel_pe=$_POST["tel_pe"];
		$id_tip=2;

		$c -> conexion();
    	$r -> registro_cliente($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip);
	}

	if ($id_tip=='TE') {
		$num_iden=$_POST["num_iden"];
		$dir_pe=$_POST["dir_pe"];
		$nom_pe=$_POST['nom_pe'];
		$ape_pe=$_POST["ape_pe"];
		$cor_pe=$_POST["cor_pe"];
		$tel_pe=$_POST["tel_pe"];
		$id_tip=3;

		$c -> conexion();
    	$r -> registro_cliente($num_iden, $dir_pe, $nom_pe, $ape_pe, $cor_pe, $tel_pe, $id_tip);
	}

}
?>