<?php 
$usuario = controladorRegistro::ctrselecionarRegistro();
//echo '<pre>'; print_r($usuario); echo '</pre>'
?>
<div class="row">
	<?php
	if(count($usuario))
  {
		foreach ($usuario as $key=>$value)
    {
			?>
        <div class="col-md-3">
            <div class="card-body border border-secondary rounded">
              <h4 class="card-title"><?php echo  $value["nombre"]; ?></h4><br>
              <div class="card-text">Telefono: <?php echo  $value["telefono"]; ?></div>
              <div class="card-text">Corre: <?php echo  $value["correo"]; ?></div>
              <div class="card-text">Contraseña: <?php echo  $value["password"]; ?></div>
              <hr class="mt-1"/>
              <a href="index.php?paginas=editar&id=<?php echo $value["id"]; ?>" class="btn btn-primary">Editar</a>
              <a href="index.php?paginas=borrar&id=<?php echo $value["id"]; ?>" class="btn btn-danger">Eliminar</a>
            </div>
          </div>
			<?php
		}
	}else{
		?>
		<div class="alert alert-info">
			Actualmente no existen registros.
		</div>
		<?php
	}
	?>
</div>