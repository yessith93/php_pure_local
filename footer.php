    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright .</p>
            <?php 
            echo date('d/m/y');
            ?>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <?php 
              if (isset($_SESSION['email'])){ 
                ?>
            <li><a href="./index.php" >Registros</a></li>
            <li><a href="./Contacto.php" >Contacto</a></li>

          <?php }else{ ?>

            <li><a href="./Contacto.php" >Contacto</a></li>

            <?php 
          }
          ?>
            </ul>
          </div>
        </div>
      </div>
    </footer>