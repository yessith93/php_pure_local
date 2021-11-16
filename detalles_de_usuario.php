<?php 
require_once ('verificacion.php');
include_once('bd/operaciones.php');
$id=isset($_GET['id'])? $_GET['id']:'';

$datos=datos_de_usuario($id);

if ($_POST){
	if(!empty($_REQUEST['id'])&&!empty($_REQUEST['email'])){
		header('location:index.php');
		$id=isset($_REQUEST['id'])? $_REQUEST['id']:0;
		$email     = isset($_POST['email'])    ? $_POST['email']:'';
		modificar_datos($id,$email);
		die();
	}
	else{
		die('algunos datos estan vacios');
	}
	
}
?>
	<!doctype html>
	<html class="no-js" lang="es">
	<?php 
	include_once('header.php');
	?>
	<div class="row">
	<h3>datos del usuario </h3>
	<form method="post">
		<label>numero de identificacion
       	 <input type="number" value="<?php echo $datos['log_id']?>" name="id" disabled=»disabled»/>
        </label>
        <label>correo electronico
       	 <input type="email" value="<?php echo $datos['log_email']?>"name="email"  />
        </label>
        <label>
         <input type="submit" class="button success" value="Modificar" />
        </label>
    </form>
</div>


<?php 
include_once('footer.php');
?>