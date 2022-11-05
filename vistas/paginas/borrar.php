<?php 
$usuario = controladorRegistro::ctrselecionarRegistro();
//echo '<pre>'; print_r($usuario); echo '</pre>'
?>
  <div class="row">
    <form class="form" action="index.php?controladores=controladorregistro&action=ctrBorrarRegistro" method="POST">
    <?php foreach ($usuario as $key=>$value): ?>
      <div class="alert alert-warning">
        <b>¿Confirma que desea eliminar el registro de?:  <?php echo $value["nombre"];?></b>
      </div>
      <input type="submit" value="Eliminar" class="btn btn-danger"/>
      <br>
      <a class="btn btn-outline-success" href="index.php?paginas=inicio">Cancelar</a>
      <?php endforeach ?> 
    </form>
  </div>

