<?php
require_once('bd/operaciones.php');
require_once ('verificacion.php');
$resultado = consulta();


?>
<!doctype html>
<html class="no-js" lang="es">
  
    <?php require_once('header.php'); ?>
    <div class="row">
     
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h4>usuarios en la base de datos</h4>
          <div class="row">
            <div class="large-12 columns">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
        <table width="100%">
          <thead>
            <tr>
              <th>Identificacion</th>
              <th>Correo Electronico</th>
              <th>acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php while($usuario=$resultado->fetch_assoc()){  
            ?>     
            <tr>
              <td><?php echo $usuario['log_id']; ?></td>
              <td><?php echo $usuario['log_email']; ?></td>
              <td>
                <a href="./detalles_de_usuario.php?id=<?php echo $usuario['log_id']; ?>" class="button tiny secondary">modificar email</a>
                <a href="./borrar.php?id=<?php echo $usuario['log_id']; ?>" class="button tiny alert">Eliminar</a>
              </td>
            </tr>
            <?php
            }
            ?>
        
          </tbody>
        </table>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>
 
    
  </body>
</html>