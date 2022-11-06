<?php 
$usuario = controladorRegistro::ctrselecionarRegistro();
//echo '<pre>'; print_r($usuario); echo '</pre>'
?>
  <div class="row">
    <form class="form" method="post">
      <div class="alert alert-warning">
          <b>¿Confirma que desea eliminar el registro? </b>
      </div>
      <input type="submit" value="Eliminar" class="btn btn-danger"/>
      <a class="btn btn-outline-success" href="index.php?paginas=inicio">Cancelar</a>
      <?php
        $borrar = new controladorregistro();
        $borrar-> ctrBorrarRegistro();
      ?>
    </form>
  </div>

