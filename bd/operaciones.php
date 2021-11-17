<?php
require_once('credenciales.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$resultado='';
if($mysqli->connect_errno){
	echo 'error en la conexion '.$mysqli->connect_error;
	exit;
}
function  consulta(){
	global $mysqli, $resultado;
	$sql="SELECT * FROM info_user";
	return $mysqli->query($sql);
}
function borrar($id){
	global $mysqli;
	settype($id_article,'integer');
	$sql="DELETE FROM info_user WHERE log_id={$id}";
	$mysqli->query($sql);
}

function agregar($id,$email,$contrasena){
	global $mysqli;

	$sql="INSERT INTO info_user (Log_id, log_email, log_password) VALUES ({$id}, '{$email}', '{$contrasena}')";
	$mysqli->query($sql);
}
function datos_de_usuario($id){
	global $mysqli;
	$sql="SELECT log_id, log_email FROM info_user WHERE log_id={$id}";
	$datos= $mysqli->query($sql);
	if(!($datos->num_rows)==0){
		Return $datos ->fetch_assoc();
	}else{
		$datosvacios['log_email']='';
		$datosvacios['log_id']='';
		return $datosvacios;
	}
}
function verificacion_cuenta($id,$email){
	global $mysqli;
	$sql="SELECT * FROM info_user WHERE log_id={$id} AND log_email='{$email}'";
	$datos= $mysqli->query($sql);
	if(!($datos->num_rows)==0){
		Return True;
	}else{
		return false;
	}
}

function cambiar_pass($id,$email,$password){
	global $mysqli;
	settype($id,'integer');
	$email= filter_var($email,FILTER_SANITIZE_SPECIAL_CHARS);
	$sql="UPDATE info_user SET log_password='{$password}' WHERE log_id={$id} AND log_email='{$email}'";
	$mysqli->query($sql);
}

function login($email){
	global $mysqli;
	$sql="SELECT * FROM info_user WHERE log_email='{$email}'";
	$datos= $mysqli->query($sql);
	if(!($datos->num_rows)==0){
		Return $datos ->fetch_assoc();
	}else{
		$datosvacios['log_password']='';
		return $datosvacios;
	}
	
}
function modificar_datos($id,$email){
	global $mysqli;
	settype($id,'integer');
	$email= filter_var($email,FILTER_SANITIZE_SPECIAL_CHARS);
	$sql="UPDATE info_user SET log_email='{$email}' WHERE log_id={$id}";
	$mysqli->query($sql);
}
