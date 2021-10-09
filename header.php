<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sitio web</title>
    <link rel="stylesheet" href="./css/foundation.css" />
  </head>
  <body>
<div class="row">
      <div class="large-9 columns">
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <?php 
          if (isset($_SESSION['email'])){
          ?>
            <li><a href="./index.php" class="button">Registros</a></li>
            <li><a href="./Contacto.php" class="button">Contacto</a></li>
            <li><a href="./logout.php" class="button">cerrar sesion </a></li>
          <?php 
          }else{ 
          ?>
            <li><a href="./login.php" class="button">ingresar</a></li>
            <li><a href="./Contacto.php" class="button">Contacto</a></li>
            <?php 
          }
          ?>
        </ul>
      </div>
    </div>