<?php 
include_once('bd/operaciones.php');
$contraseña_cambiada=false;
if($_GET){
	$email     = isset($_GET['email'])    ? $_GET['email']:'';
	$id  = isset($_GET['id'])    ? $_GET['id']:'';
	$datos=verificacion_cuenta($id,$email);
	if($_POST){
		//solo entra cuando se envian las contraseñas
		$contrase  = isset($_POST['contrase']) ? $_POST['contrase']:'';
		$contrase1  = isset($_POST['contrase1']) ? $_POST['contrase1']:'';
		if ($contrase1==$contrase){
			//verificacion que las contraseñas sean iguales
			$contrase= password_hash($contrase, PASSWORD_DEFAULT);
			cambiar_pass($id,$email,$contrase);
			$contraseña_cambiada=true;
		}else{
			echo "<script>
		        	alert('las contraseñas no coinciden');
        		  </script>";
		}
	}
	if(!$datos){
		echo "<script>
	        	alert('los datos ingresados no estan registrados ');
			  </script>";
	}

}else{
	$datos=false;
}
?>

	<!doctype html>
	<html class="no-js" lang="es">
	<?php 
	include_once('header.php');
	?>
	<div class="row">
	
	<?php if (!$contraseña_cambiada){ ?>
		<h3>olvidar contraseña</h3>
		<?php if (!$datos){ ?>
		<form method="get">
			<label>ingrese su numero de identificacion
	       	 <input type="number" name="id" placeholder="" />
	        </label>
	    	<label>confirme su correo electronico registrado
	       	 <input type="email" name="email" placeholder="" />
	        </label>
	        <label>
	         <input type="submit" class="button success" value="Enviar" required="required"/>
	        </label>
		</form>
		<?php }else { ?>
		<h3>olvidar contraseña</h3>
		<form method="post">
			<label>nueva contraseña   	     
	        	<input type="password" name="contrase" placeholder="" />
	        </label>
	        <label>confirmar contraseña   	     
	        	<input type="password" name="contrase1" placeholder="" />
	        </label>
	        <label>
	         <input type="submit" class="button success" value="cambiar contraseña" required="required"/>
	        </label>
	    </form>
		<?php
		}
	}else{ ?>
		<h3>contraseña cambiada con exito</h3>
		<br/>
	<?php
	}
	?>	
    <a href="login.php" class="button tiny alert">ingresar </a>
    <a href="nuevo.php" class="button tiny alert">Nuevo usuario </a>
</div>


<?php 
include_once('footer.php');
?>