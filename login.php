<?php 
include_once('bd/operaciones.php');
session_start();
if($_POST){
	
	$email     = isset($_POST['email'])    ? $_POST['email']:'';
	$contrase  = isset($_POST['contrase'])    ? $_POST['contrase']:'';
	$datos=login($email);
	if(password_verify($contrase, $datos['log_password'])){
		$_SESSION['email']=$email;
		header('location:index.php');
		die();	
	}else{

		echo "<script>
		        alert('Datos incorrectos');
    
    		  </script>";
	}
}
?>

	<!doctype html>
	<html class="no-js" lang="es">
	<?php 
	include_once('header.php');
	?>
	<div class="row">
	<h3>ingreso</h3>
	<form method="post">
        <label>correo electronico
       	 <input type="email" name="email" placeholder="" />
        </label>
        <label>contraseña
       	 <input type="text" name="contrase" placeholder="" required="required"/>
        </label>
        <label>
         <input type="submit" class="button success" value="ingresar" required="required"/>
        </label>
    </form>
    <a href="olvidar_contraseña.php" class="button tiny alert">olvide mi contraseña </a>
    <a href="nuevo.php" class="button tiny alert">Nuevo usuario </a>
</div>


<?php 
include_once('footer.php');
?>