<?php 
include_once('bd/operaciones.php');
if($_POST){
	
	$id        = isset($_POST['id'])       ? $_POST['id']:0;
	$email     = isset($_POST['email'])    ? $_POST['email']:'';
	$contrase  = isset($_POST['contrase']) ? $_POST['contrase']:'';
	$contrase1  = isset($_POST['contrase1']) ? $_POST['contrase1']:'';
	if ($contrase1==$contrase){
		//verificacion que las contraseñas sean iguales
		
		$contrase= password_hash($contrase, PASSWORD_DEFAULT);
		agregar($id,$email,$contrase);
		echo "<script>
			        alert('usuario registrado con exito');
			        window.location= 'index.php'
    	   		  </script>";
		die();
	}else{
			echo "<script>
			        alert('Contraseña no coincide');
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
	<h3>nuevo registro</h3>
	<form method="post">
		<label>numero de identificacion
       	 <input type="number" name="id" placeholder="" required="required"/>
        </label>
        <label>correo electronico
       	 <input type="email" name="email" placeholder="" />
        </label>
        <label>contraseña
       	 <input type="password" name="contrase" placeholder="contraseña" required="required"/>
        </label>
        <label>confirme la contraseña
       	 <input type="password" name="contrase1" placeholder="confirmacion" required="required"/>
        </label>
        <label>
         <input type="submit" class="button success" value="Registrar" required="required"/>
        </label>
    </form>
</div>


<?php 
include_once('footer.php');
?>