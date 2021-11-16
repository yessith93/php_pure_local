<?php
session_start();
?>
	<!doctype html>
	<html class="no-js" lang="es">
	<?php 
	include_once('header.php');
	?>
	<div class="row">
	<h3>Sitio en Construccion</h3>
		<label>nombre 
       	 <input type="number" name="id" placeholder="Miguel Almanza" readonly="readonly" />
        </label>
        <label>correo electronico
       	 <input type="email" name="email" placeholder="yessith@misena.edu.co" readonly="readonly"/>
        </label>
        
</div>


<?php 
include_once('footer.php');
?>